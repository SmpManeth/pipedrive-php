    <!-- header -->
    <div class="navbar shadow-sm" style="background-color:#FFFFFF ;">
        <div>
            <p class=" ps-4 pt-2 fw-bold head-text">
                <a class="text-decoration-none text-muted" href="dashboard.php">Deals</a>
            </p>
        </div>
        <div class="search-container">
            <form action="#">
                <input type="text" placeholder="   Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-plus"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#"><i class="fa-solid fa-bullseye"> Lead</i></a>
                <a class="dropdown-item" href="#"><i class="fa-solid fa-dollar-sign"> Deal</i></a>
                <a class="dropdown-item" href="#"><i class="fa-solid fa-calendar"> Activity</i></a>
                <a class="dropdown-item" href="#"><i class="fa-solid fa-user"> Person</i></a>
                <a class="dropdown-item" href="#"><i class="fa-solid fa-building"> Organization</i></a>
                <a class="dropdown-item" href="#"><i class="fa-solid fa-note-sticky"> Note</i></a>
                <a class="dropdown-item" href="#"><i class="fa-solid fa-floppy-disk"> product</i></a>
            </div>
        </div>
        
        <div>
            <img class="adduser" src="data:image/png;base64,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">
        </div>
        <div>

        </div>
        <div class="dropdown">
            <img onclick="myFunction()" class="dropbtn user" class="" src="data:image/png;base64,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">
            <div id="myDropdown" class="dropdown-content shadow-sm">

                <div class="nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <<<<<<< HEAD <p class="text-muted pt-3 ps-4 me-3"><?php echo $_SESSION['username'] ?></p>
                        <a href="#"><img src="https://img.icons8.com/pastel-glyph/64/000000/pupil-male--v2.png" />Personal Preferences</a>
                        =======
                        <p class="text-muted pt-2 ps-4 me-3"><?php echo $_SESSION['username'] ?></p>
                        <a href="#"><img src="https://img.icons8.com/pastel-glyph/64/000000/pupil-male--v2.png" />Personal Preferences</a>
                        >>>>>>> 89f6f54d04a34cc84ce42ac7060864d2b0864ccb
                        <a href="#" class="nav-link lead_buttons" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><img src="https://img.icons8.com/ios/24/000000/settings--v1.png" />Settings
                        </a>
                        <a href="logout.php"><img src="https://img.icons8.com/ios/50/000000/exit.png" />Log Out</a>

                </div>
            </div>
        </div>

    </div>
    <!-- side bar -->
    <div class=" d-flex side-bar fixed-top ">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link lead_buttons active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-leads" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                Leads
            </button>
            <br>
            <button class="nav-link lead_buttons" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-deals" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                Deals
            </button>
            <br>
            <button class="nav-link lead_buttons" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-deals" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
            Activity
            </button>
            <br>
            <button class="nav-link lead_buttons" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-deals" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
            Person
            </button>
            <br>
            <button class="nav-link lead_buttons" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-deals" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
            Organization
            </button>
            <br>
            <button class="nav-link lead_buttons" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-deals" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
            Note
            </button>
            <br>
            <button class="nav-link lead_buttons" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-deals" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
            product
            </button>
        </div>
    </div>