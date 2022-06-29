<?php 
$connect = mysqli_connect("localhost", "root", "", "pipeline");

$sql = "SELECT * FROM deals INNER JOIN deal_phone_numbers ON deals.id = deal_phone_numbers.deal_id INNER JOIN deal_email ON deals.id = deal_email.deal_id";

$results = mysqli_query($connect, $sql);


?>

<div class="tab-pane fade show" id="v-pills-dealsTable" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

    <div class="mb-3">
    <form class="form-horizontal well" action="dashboard.php" method="post" name="upload_excel"
            enctype="multipart/form-data">

        <input class="form-control bar" type="file" name="file" id="file" class="input-large" required>
        <input value="Upload CSV Files" type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">
    </form>
    </div>
    <form method="psot" id="import_excel_form" enctype="multipart/form-data"></form>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <table id="deal-table" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Deal ID
      </th>
      <th class="th-sm">Organization
      </th>
      <th class="th-sm">Contact Person
      </th>
      <th class="th-sm">Email
      </th>
      <th class="th-sm">Address
      </th>
      <th class="th-sm">Mobile Number
      </th>
      <th class="th-sm">Pro.Closing Date
      </th>
      <th class="th-sm">Exp.Closing Date
      </th>
    </tr>
  </thead>
        <tbody id="myTable">
       
            <?php 
            if (mysqli_num_rows($results) > 0)
            {
                foreach ($results as $key => $onerow) { ?>
                
                <tr> <th scope="row"><?php echo "Deal " .( $key + 1) ?></th>
                <td><?php echo $onerow['organization']; ?> </td>
                <td><?php echo $onerow['Contact_person_Name']; ?> </td>
                <td><?php echo $onerow["Email_Address"]; ?> </td>
                <td><?php echo $onerow["Address"]; ?> </td>
                <td><?php echo $onerow["Phone_No"]; ?> </td>
                <td><?php echo $onerow["prospected_closing_date"]; ?> </td>
                <td><?php echo $onerow["expected_closing_date"]; ?> </td>

                <?php
                }
          
        }
            ?>
        </tbody>
    </table>
    <button id="downloadexcel" class="btn btn-primary excel-expoter-btn">Export to CSV</button><br />
    <script>  
        // data export functionality
    document.getElementById('downloadexcel').addEventListener('click', function() {
        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("#deal-table"));
    });
    </script>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div>

