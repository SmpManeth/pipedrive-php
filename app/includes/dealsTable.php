<?php 

include("../../path.php");
include($ROOT_PATH . "/app/controllers/users.php");
include($ROOT_PATH . "/app/controllers/deals.php");
include($ROOT_PATH . "/app/controllers/dealsDetails.php");
include($ROOT_PATH . "/app/controllers/dealsTable.php");
include($ROOT_PATH . "/app/controllers/import.php");
$connect = mysqli_connect("localhost", "root", "", "pipeline");

$sql = "SELECT * FROM deals INNER JOIN deal_phone_numbers ON deals.id = deal_phone_numbers.deal_id INNER JOIN deal_email ON deals.id = deal_email.deal_id";
$dealid;
$results = mysqli_query($connect, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSS only -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
<script>
    function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}
function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}
</script>

    <title>Sterling Pipline</title>

</head>

<body style="background-color:#F7F7F7 ">


    <!-- header and Sidebar -->
    <?php include($ROOT_PATH . "/app/includes/header.php") ?>
    <div class="tab-pane fade show table-cont">

        <div class="mb-3">
            <form class="form-horizontal well" action="dealsTable.php" method="post" name="upload_excel"
                enctype="multipart/form-data">

                <input class="form-control bar" type="file" name="file" id="file" class="input-large" required>
                <input value="Upload CSV Files" type="submit" id="submit" name="Import"
                    class="btn btn-primary button-loading" data-loading-text="Loading...">
            </form>
        </div>
        <form method="post" id="import_excel_form" enctype="multipart/form-data"></form>
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
                    <th class="th-sm">Status Id
                    </th>
                    <th class="th-sm">Comment
                    </th>
                    <th class="th-sm">
                    </th>
                </tr>
            </thead>
            <tbody id="myTable">

                <?php
      if (mysqli_num_rows($results) > 0) { ?>
                <?php foreach ($results as $key => $onerow) {?>

                <tr>
                    <th scope="row"><?php echo "Deal " . ($key + 1) ?></th>
                    <td class="pt-3-half"><?php echo $onerow["organization"]; ?> </td>
                    <td class="pt-3-half"><?php echo $onerow["Contact_person_Name"]; ?> </td>
                    <td class="pt-3-half"><?php echo $onerow["Email_Address"]; ?> </td>
                    <td class="pt-3-half"><?php echo $onerow["Address"]; ?> </td>
                    <td class="pt-3-half"><?php echo $onerow["Phone_No"]; ?> </td>
                    <td class="pt-3-half"><?php echo $onerow["prospected_closing_date"]; ?> </td>
                    <td class="pt-3-half"><?php echo $onerow["expected_closing_date"]; ?> </td>
                    <td class="pt-3-half"><?php echo $onerow["status_id"]; ?> </td>
                    <td class="pt-3-half"><?php echo $onerow["deal_comment"]; ?> </td>
                    <td hidden class="pt-3-half"><?php echo $onerow["id"]; ?> </td>
                    <td>
                        <div class="shadow btnfilter">
                            <a
                                href="<?php echo $BASE_URL . 'updateDeals.php'?>?dealid=<?php echo $onerow['id']?>">
                                <img class="filter-menu-options"
                                    src="<?php echo $BASE_URL . 'assets/images/stack-48.png' ?>" />
                            </a>
                        </div>
                    </td>
                    <?php
          }
        }
          ?>
            </tbody>
        </table>
        <button onclick="exportTableToCSV('deals_list.csv')" class="btn btn-primary excel-expoter-btn">Export to CSV</button><br />
    </div>
    </div>
    <!-- <script>
    // data export functionality

    document.getElementById('downloadexcel').addEventListener('click', function() {
        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("#deal-table"));
    });
    </script> -->
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
    // Serach function in data table
    </script>
    <?php include($ROOT_PATH . "/app/includes/footer.php") ?>

</body>

</html>