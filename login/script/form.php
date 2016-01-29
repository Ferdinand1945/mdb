<?php

$personnummer = $_POST['personnummer'];
    if(isset($_POST['personnummer'])){
      header("Location: /individualhtml.php?personnummer=$personnummer"); 
    }
    else {
        $form = "<form name='send' action='individualhtml.php' method='POST'>
                <input type='text' name='personnummer' value=''/>
                <input type='submit' name='send' value='send' />
                </form>";
    }
    print "<h1>" . $personnummer . "</h1>";
    print $form;

?>
