 <div><p style="font-size: 18px;">Du har gjort: 
            <?php include 'serv.php'; $query = "SELECT count(*) AS total FROM upload"; 
              mysql_select_db('cchub_api');
              $result = mysql_query($query); 
              $values = mysql_fetch_assoc($result); 
              $num_rows = $values['total']; 
              echo $num_rows; 
            ?> frågor till UC</p>
            <div><?php  if ($num_rows == 20) {
                echo ' <p style="font-size: 21px; color: #FF0000;">&#x26a0; Du har uppnåt mjukgräns antal frågor till UC!</p>';
              }
              else if ($num_rows > 21 && $num_rows < 50) {
              echo '<p style="font-size: 21px; color:#FF9900;">Du kommer snart uppnå hårdräns, när det händer du kommer inte kunna göra mera UC frågor för 24 timmar!</p>';
              }
              else if ($num_rows == 50) {
                echo '<p style="font-size: 21px; color:#FF0000;">HÅRD LIMIT UPPNÅT! Du måste vänta 24 timmar för att kunna göra nya creaditupplysningar </p>';
              }
              ?></div>