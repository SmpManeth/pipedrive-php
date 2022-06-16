<div class="tab-pane fade show" id="v-pills-dealsTable" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">



    <button id="downloadexcel" class="btn btn-primary">Export to Excel</button>

    <table id="deal-table" class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Value</th>
                <th scope="col">Pipeline</th>
                <th scope="col">Stage ID</th>
            </tr>
        </thead>
        <tbody>

            <?php

            foreach ($allDeals as $deal) { ?>
            <tr>
                <th scope="row"><?php echo $deal['id']; ?></th>
                <td><?php echo $deal['title']; ?></td>
                <td><?php echo $deal['value']; ?></td>
                <td><?php echo $deal['pipeline']; ?></td>
                <td><?php echo $deal['status_id']; ?></td>
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