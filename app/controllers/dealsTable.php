<?php

$table = 'tbl_task';
$onedeals = "";
$allDeals = selectAll($table);

if (isset($_POST['clickme-deal-btnn'])) {
 
    $dealid=$_POST['id'];
    

    ?>
<script>

    window.onload = function myFunction() {
    document.getElementById("mybtnn").click();
  
    // alert("Button Clicked");
  }
</script>
    


<?php
} else {
    # code...
}?>
