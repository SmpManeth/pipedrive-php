<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Pipeline name + Dashboard</title>
</head>

<body style="background-color:#F7F7F7 ">

    <!-- header and Sidebar -->
    <?php include("app/includes/header.php") ?>

    <div class="d-flex align-items-start sidenav-menu">
        <div class="nav flex-column nav-pills me-3 px-2 sidenav-item" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                Lead Inbox
            </button>
        </div>
        <div class="tab-content sidenav-item" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Next Activity</th>
                            <th scope="col">Labels</th>
                            <th scope="col">Source</th>
                            <th scope="col">Lead created</th>
                            <th scope="col">Owner</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">1</th>
                            <td>test lead</td>
                            <td>No activity</td>
                            <td>Hot</td>
                            <td>Manually created</td>
                            <td>May 24, 2022, 2:26 PM</td>
                            <td>Dasun Sucharith</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/27dd36351b.js" crossorigin="anonymous"></script>
</body>

</html>