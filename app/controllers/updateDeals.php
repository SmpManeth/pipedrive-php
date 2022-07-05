<?php

if (isset($_GET['dealid'])) {
  
   $dealid=$_GET['dealid'];
   $sql = "SELECT
   *
FROM
   deals
INNER JOIN deal_phone_numbers ON deals.id = deal_phone_numbers.deal_id
INNER JOIN deal_email ON deals.id = deal_email.deal_id
WHERE
   deals.id =$dealid ";
 
   $results = mysqli_query($conn, $sql);

}

?>