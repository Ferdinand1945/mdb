<?php

/*
    Example script for the eventLogger.php class
    
    This examples requires a database table with columns name(TEXT), number(INT) and date(TEXT) in order for the DB part to work!
    It also requires a sub-folder of the current working dir called "logs" with write permissions
    Also remember to configure the database to fit your configuration!
    
    The file should be called with ?act=1 to generate entries and ?act=2 to put them into a database
    You can also pass the optional GET parameter num=n to generate n entries =)
    
    By: Jon Gjengset - 3rd March - 2008
    Contact: jon@thesquareplanet.com
    Original URL: http://www.phpclasses.org/browse/package/4426.html
    
    All use permitted, but please keep this notice!
*/

#Database configuration
$db = array(
            'host'      =>   'DB_TABLE',
            'username'  =>   'DB_USERNAME',
            'password'  =>   'DB_PASSWORD',
            'database'  =>   'DB_DATABASE',
            'table'     =>   'DB_TABLE'
    );

#Lorem Ipsum for generating random strings
$lipsum = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam eu massa et massa ornare tempus. Curabitur sit amet nunc. Nulla tellus pede, elementum eu, bibendum et, volutpat vel, lacus. Morbi orci massa, eleifend sodales, volutpat vitae, dignissim sed, pede. Morbi urna erat, egestas vitae, malesuada a, posuere bibendum, dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque lacinia consectetuer ligula. Aliquam libero. Suspendisse placerat, purus non elementum bibendum, libero est pulvinar dolor, sed lacinia magna ante ac diam. Pellentesque enim dui, tincidunt non, dignissim id, adipiscing a, pede. Quisque hendrerit, dui at varius ornare, quam nunc fermentum est, sit amet sollicitudin lorem purus ut tellus. Maecenas mollis justo et neque mattis auctor. Proin tristique, lacus a auctor suscipit, elit lacus porta urna, a luctus ante nisi nec erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam tempor augue sed erat. Phasellus nisl tortor, cursus eu, bibendum ac, pharetra ac, orci.';

#Require the class
require('eventLogger.php');

#Create a new logger (Note the syntax for the log format, what is inside the [% %] has to be the same as the corresponding database column)
#Note that you can pass many more parameters directly here:
# function __construct( $logFormat, $maxEntries = 1000, $db = false, $dbTable = false )
$logger = new eventLogger("[%name%]|[%number%]|[%date%]");

#Set working directory
$logger->setWorkingDir('./logs');

#Set the various filters
$logger->addFilter('name', 'string'); #String is a predefined type which is the same as the regular expression: [\w\s_\-,\.:;]+
$logger->addFilter('number', 'numeric'); #Numeric is, well, numeric...
$logger->addFilter('date', '(\d{1,2}\-\d{1,2})'); #Custom regular expressions are permitted as well
#There is also a type called word which only allows alphanumerical characters

#Only send text
header("Content-type: text/plain");

#Make sure that we are doing something...
if (isset($_GET['act']))
{
    switch ($_GET['act'])
    {
        #Populate folder
        case 1:
            echo "Populating folder with elements\n";
            
            #Loop through the number of elements we want
            for ( $i = 0; $i < (isset($_GET['num']) && is_numeric($_GET['num']) && $_GET['num'] > 0 ? $_GET['num'] : 30); $i++ )
            {
                #Generate a random string, number and date
                $randName = substr($lipsum, rand(0,(int)(strlen($lipsum)/2)), rand((int)(strlen($lipsum)/10),(int)(strlen($lipsum)/2)));
                $randNumber = rand();
                $randDate = date('m-d', rand(time()-5*365*24*60*60, time()));
                
                #Add into the entry list
                $logger->addEntry(
                                    array (
                                           'name' => $randName,
                                           'number' => $randNumber,
                                           'date' => $randDate
                                           )
                                 );
                
                echo "\tAdded element with string: ".$randName.'|'.$randNumber.'|'.$randDate."\n";
            }
            
            #Write all entries into the working log directory
            $logger->writeLogToFiles();
            echo "Wrote elements to file!\n";
            
            #Check for errors
            $errors = $logger->returnErrors();
            if (count($errors) > 0)
            {
                echo "\nERRORS ENCOUNTERED!\n";
                for ( $o = 0; $o < count($errors); $o++ )
                {
                    echo "\t".$errors[$o]."\n";
                }
            }
            break;
        
        #Parse folder and store in DB
        case 2:
            #Parse entries from the working folder
            echo "Parsing folder with elements\n";
            $logger->parseFolder();
            echo "Done parsing!\n";
            
            #Connect to the database
            #You can also pass an already established DB connection directly
            echo "Connecting to DB\n";
            $logger->connectToDB($db, $db['table']);
            
            #Write entries to DB
            echo "Writing to DB\n";
            $logger->updateDB();
            echo "Done writing to DB\n";
            
            #Check for errors
            $errors = $logger->returnErrors();
            if (count($errors) > 0)
            {
                echo "\nERRORS ENCOUNTERED!\n";
                for ( $o = 0; $o < count($errors); $o++ )
                {
                    echo "\t".$errors[$o]."\n";
                }
            }
            break;
    }
}
?>