<?php
$table = 'deals';
$onedeal = "";

if (isset($_POST['clickme-deal-btn'])) {
 
    $dealid=$_POST['Deal-id'];
    $onedeal = selectOne($table, ['id' => $dealid]);
    

    ?>
<script>

    window.onload = function myFunction() {
    document.getElementById("mybtn").click();
    // alert("Button Clicked");
  }
</script>
    


<?php
} else {
    # code...
}?>
