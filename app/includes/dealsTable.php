<div class="tab-pane fade show" id="v-pills-dealsTable" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">



    <button id="downloadexcel" class="btn btn-primary">Export to Excel</button>
    <div class="mb-3">
    <form class="form-horizontal well" action="dashboard.php" method="post" name="upload_excel"
            enctype="multipart/form-data">

        <input class="form-control" type="file" name="file" id="file" class="input-large"><br />
        <input value="Upload" type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">
    </form>
    </div>
    
    <form method="psot" id="import_excel_form" enctype="multipart/form-data"></form>
    <table id="deal-table" class="table">
        <thead>
            <tr>

                <th scope="col">ID</th>
                <th scope="col">Con Pers</th>
                <th scope="col">Org</th>
                <th scope="col">Title</th>
                <th scope="col">Value</th>
                <th scope="col">Pipli</th>
                <th scope="col">Post C D</th>
                <th scope="col">Expe C D</th>
                <th scope="col">Projec Na</th>
                <th scope="col">Status ID</th>
                <th scope="col">User ID</th>
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($allDeals as $deal) { ?>
            <tr>
                <th scope="row"><?php echo $deal['id']; ?></th>
                <td><?php echo $deal['Contact_person_Name']; ?></td>
                <td><?php echo $deal['organization']; ?></td>
                <td><?php echo $deal['title']; ?></td>
                <td><?php echo $deal['value']; ?></td>
                <td><?php echo $deal['pipeline']; ?></td>
                <td><?php echo $deal['prospected_closing_date']; ?></td>
                <td><?php echo $deal['expected_closing_date']; ?></td>
                <td><?php echo $deal['project_name']; ?></td>
                <td><?php echo $deal['status_id']; ?></td>
                <td><?php echo $deal['user_id']; ?></td>
            </tr>

            <?php  } ?>



        </tbody>
    </table>
    <script>
    document.getElementById('downloadexcel').addEventListener('click', function() {
        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("#deal-table"));
    });
    </script>




</div>