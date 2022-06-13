<?php
require_once "ProjectManagement.php";
$deals = selectAll('deal');
$stages = selectAll('stages');
$currencies = selectAll('currency');
$mob_type = selectAll('phone_type');

$projectName = "";
$projectManagement = new ProjectManagement();
$statusResult = selectAll('tbl_status');
$stages = array();


?>
<div class="tab-pane fade show active" id="v-pills-deals" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header " style="background-color:#dee2e6">
               <h5 class="modal-title" id="exampleModalLabel">Add Deal</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 ps-3 pe-3">
               <form action="dashboard.php" method="post" enctype="multipart/form-data" name="add-deal-form" onsubmit="return validateAddDealForm()">
                  <div class="row">
                     <div class="col-6 p-2 ps-3">
                        <div <div class="model-item text-muted">
                           <p class="">Contact Person</p>
                           <i class="fa fa-user icon"></i>
                           <input class="input-field input-text" name="Contact_person_Name" id="Contact_person_Name" type="text">
                           <label id="Contact_person_Name_error" style="font-size: 12px; color: red"></label>
                        </div>
                        <div class="model-item text-muted">
                           <p class="">Organization</p>
                           <i class="fa fa-building icon"></i>
                           <input class="input-field input-text" name="organization" type="text">
                        </div>
                        <div class="model-item text-muted">
                           <p class="">Title</p>
                           <input class="input-field" name="title" type="text">
                        </div>
                        <div class="model-item text-muted">
                           <p class="">Value</p>
                           <input class="input-field" type="text" name="value" id="Value_No" style="width: 125px;">
                           <select class="input-field" name="currency" id="" style="width: 120px; height: 27px; padding: 0px;">
                              <?php foreach ($currencies as $key => $currency) { ?>
                                 <option class="" value="<?php echo $currency['curr_id'] ?>">
                                    <?php echo $currency['currency_name'] ?></option>

                              <?php
                              }
                              ?>
                           </select>
                           <label id="Value_error" style="font-size: 12px; color: red"></label>
                        </div>
                        <div class="model-item text-muted">
                           <p class="">Pipeline</p>
                           <select class="input-field" name="pipeline" id="" style="height: 27px; padding: 0px;">
                              <option class="" value="Pipeline_One">Pipeline One</option>
                              <option class="" value="Pipeline_Two">Pipeline Two</option>
                           </select>
                        </div>
                        <div class="model-item text-muted">
                           <p class="">Pipeline Stage</p>
                           <select class="input-field" name="pipeline_stage" id="" style="height: 27px; padding: 0px;">
                              <?php foreach ($stages as $key => $stage) { ?>
                                 <option class="" value="<?php echo $stage['stage_id'] ?>">
                                    <?php echo $stage['stage_name'] ?></option>
                              <?php   } ?>
                           </select>
                        </div>
                        <div class="model-item text-muted">
                           <p class="">Prospected Closing Date</p>
                           <input class="input-field" type="date" name="prospected_closing_date">
                        </div>
                        <div class="model-item text-muted">
                           <p class="">Expected Closing Date</p>
                           <input class="input-field" type="date" name="expected_closing_date">
                        </div>
                     </div>
                     <div class="col-6 p-2 ps-9">
                        <div class="model-item text-muted">
                           <h11 class="modal-title" style="color:black"> PERSON </h11>
                           <p class="">Phone</p>
                           <input class="input-field" name="Phone_No" id="Phone_No" type="text" maxlength="10" style="width: 150px;" size="27" class="rounded-lg float-right ml-2 mr-3">
                           <select class="input-field" name="phone category" id4er="" style="width: 120px; height: 27px; padding: 0px;">
                              <?php foreach ($mob_type as $key => $phone_type) { ?>
                                 <option class="" value="<?php echo $phone_type['pho_type_id'] ?>">
                                    <?php echo $phone_type['type_name'] ?></option>
                              <?php
                              }
                              ?>
                           </select>
                           <label id="Phone_No_error" style="font-size: 12px; color: red"></label>
                           <br>
                           <div class="input_fields_wrap" style="margin-top:6px;">
                           </div>
                           <a class="add_field_button text-decoration-none  h6"> + Add Phone </a>
                        </div>

                        <div class="model-item text-muted">
                           <p class="">EmailAddress</p>
                           <input class="input-field" name="Email_Address" id="Email_Address" type="text" style="width: 275px;">
                           <label id="Email_Address_error" style="font-size: 12px; color: red"></label>
                           <br>
                           <div class="input_wrap" style="margin-top:6px;"></div>
                           <a class="add_f_button text-decoration-none  h6"> + Add Email </a>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer" padding=>
                     <input type="reset" name="reset" value="Close" class="btn btn-primary" data-bs-dismiss="modal">
                     <input type="submit" name="submit_deal" value="Save" class="btn btn-primary">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="row d-flex filter-head">
      <div class="d-flex filters">
         <div class="shadow btnfilter "> <button type="button">
               <img class="filter-menu-options" src="https://img.icons8.com/ios-glyphs/30/000000/bar-chart.png" />
            </button>
         </div>
         <div class="shadow btnfilter"> <button type="button">
               <img class="filter-menu-options" src="<?php echo $BASE_URL . 'assets/images/stack-48.png' ?>" />
            </button></div>
         <div class="shadow btnfilter"> <button type="button">
               <img class="filter-menu-options" src="https://img.icons8.com/ios-filled/50/000000/money-circulation.png" />
            </button></div>
         <div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary-deal" data-bs-toggle="modal" data-bs-target="#exampleModal">
               + Deal
            </button>
         </div>
         <div>
         </div>
         <div class="lkr_tag">
            <p>
               LKR 26,100
            </p>
         </div>
         <div class="deals_tag">
            <p>
               Deals 5
            </p>
         </div>
         <div class="group_1">
            <button class="btn btn-primary-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
               Pipeline
            </button>
            <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="#">Pipeline</a></li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li><a class="dropdown-item" href="#">+ New Pipline</a></li>
               <li><a class="dropdown-item" href="#">+ Edit Pipline</a></li>
            </ul>
         </div>
         <!--everyone dropdown list start-->
         <div class="group_2 dropdown">
            <button type="button" onclick="myFunction1()" class="btn btn-primary-every">
               Everyone
            </button>
            <div id="myDropdown1" class="dropdown-content1 shadow-sm">
               <!--everyone button edit start dhanushka -->
               <div class="nav everyone" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <div class="tab">
                     <button class="tablinks" onclick="openCity(event, 'London')">Favorites</button>
                     <button class="tablinks" onclick="openCity(event, 'Paris')">owners</button>
                     <button class="tablinks" onclick="openCity(event, 'Tokyo')">Filters</button>
                  </div>
                  <!-- Tab content -->
                  <div id="London" class="tabcontent">
                     <h3>Favorites</h3>
                     <h6>Owners</h6>
                     <a href="#">add new filter</a>
                  </div>
                  <div id="Paris" class="tabcontent">
                     <h3>Owners</h3>
                     <h6>Everyone</h6>
                     <a href="#">add new filter</a>
                  </div>
                  <div id="Tokyo" class="tabcontent">
                     <h3>Filters</h3>
                     <a href="#">All deleted deals</a>
                     <a href="#">All lost deals</a>
                     <a href="#">All open deals</a>
                     <a href="#">All won deals</a>
                     <a href="#">More than 3 months old deals</a>
                     <a href="#">Rotten deals</a>
                  </div>
               </div>
               <!--everyone button edit start dhanushka -->
            </div>
         </div>
         <!--everyone dropdown list end-->
      </div>
   </div>

   <div class="d-flex flex-row stage-row ">
      <!-- stage cards -->

      <div class="task-board">
        <?php
        foreach ($statusResult as $statusRow) {
            $taskResult = $projectManagement->getProjectTaskByStatus($statusRow["id"], $projectName);
        ?>
            <div class="status-card">
                <div class="card-header">
                    <span class="card-header-text"><?php echo $statusRow["status_name"]; ?></span>
                </div>
                <ul class="sortable ui-sortable" id="sort<?php echo $statusRow["id"]; ?>" data-status-id="<?php echo $statusRow["id"]; ?>">
                    <?php
                    if (!empty($taskResult)) {
                        foreach ($taskResult as $taskRow) {
                    ?>

                            <li class="text-row ui-sortable-handle" data-task-id="<?php echo $taskRow["id"]; ?>"><?php echo $taskRow["title"]; ?></li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        <?php
        }
        ?>
    </div>

      <div class="floating-button">
         <a href="#" class="material-icons"><i class="fa fa-plus"></i></a>
      </div>



   </div>
   <div class="tab-pane fade show active" id="v-pills-deals" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
      <div class="task-board">

      </div>
   </div>








</div>