<?php
$deals = selectAll('deal');
$stages = selectAll('stages');
$currencies = selectAll('currency');
// dd($currencies);
?>
<div class="tab-pane fade show active" id="v-pills-deals" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">


   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add Deal</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 ps-3 pe-3">
               <form action="dashboard.php" method="get">
                  <div class="row">
                     <div class="col-6 left-col-deal p-2 ps-3">
                        <div>
                           <div class="model-item text-muted">
                              <p class="">Contact Person</p>
                              <i class="fa fa-user icon"></i>
                              <input class="input-field input-text" name="Contact_person_Name" type="text">
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

                              <input class="input-field" type="text" name="value" style="width: 125px;">
                              <select class="input-field" name="currency" id="" style="width: 120px; height: 27px; padding: 0px;">
                              <?php foreach ($currencies as $key => $currency) { ?>
                                    <option class="" value="<?php echo $currency['curr_id'] ?>"><?php echo $currency['currency_name'] ?></option>
                                 <?php   } 
                                 
                                
                                 ?>
      
<
                              </select>
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
                                    <option class="" value="<?php echo $stage['stage_id'] ?>"><?php echo $stage['stage_name'] ?></option>
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

                           <div class="model-item text-muted">
                              <p class="">Visible to</p>
<!-- priya edited -->
                              <select class="input-field" name="Visible_to" id="" style="height: 27px; padding: 0px;">
                                 <?php foreach ($xxx as $key => $xxx) { ?>
                                    <option class="" value="<?php echo $xxx['xxx_id'] ?>"><?php echo $xxx['xxx_name'] ?></option>
                                 <?php   } ?>

                              </select>
     <!-- priya edited -->          
                           </div>

 
                        </div>
                     </div>

                     <div class="col-6 p-2 ps-3">
                        <div class="model-item text-muted">
                           <p class="">Phone</p>

                           <input class="input-field" type="text" name="value" style="width: 150px;">
                              <select class="input-field" name="phone category" id="" style="width: 120px; height: 27px; padding: 0px;">
                              <?php foreach ($xxx as $key => $xxx) { ?>
                                    <option class="" value="<?php echo $xxx['stage_id'] ?>"><?php echo $xxx['xxx_name'] ?></option>
                                 <?php   } ?>

                            <input class="input-field" type="text" name="Add Phone" > 

                           <a class="add_field_button text-decoration-none  h6"> + Add Phone </a>
                           <div class="input_fields_wrap">                    
                          </div>  
                        </div>



                        <div class="model-item text-muted">
                           <p class="">Email</p>


                           <input class="input-field" type="text" name="email">
                           <a class="add_f_button text-decoration-none  h6"> + Add Email </a>
                           <div class="input_wrap">
                           </div>
                        </div>


                     </div>

                  </div>
                  <div class="modal-footer">

                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" value="add_deal" id="deal_submit" name="submit_deal" class="btn btn-primary">Save changes</button>
                  </div>
               </form>
                                 
            </div>
         </div>
      </div>
   </div>

   <!-- filtering heading -->
   <div class="row d-flex filter-head">
      <div class="d-flex filters ms-4">
         <div class="shadow mx-1 btnfilter"> <button type="button">
               <img class="filter-menu-options" src="https://img.icons8.com/ios-glyphs/30/000000/bar-chart.png" />
            </button>
         </div>
         <div class="shadow mx-1 btnfilter"> <button type="button">
               <img class="filter-menu-options" src="<?php echo $BASE_URL . 'assets/images/stack-48.png' ?>" />
            </button></div>
         <div class="shadow mx-1 btnfilter"> <button type="button">
               <img class="filter-menu-options" src="https://img.icons8.com/ios-filled/50/000000/money-circulation.png" />
            </button></div>
         <div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
               Add Deal
            </button>



         </div>

         <div>
            <p>
               LKR 26,100
            </p>
         </div>
         <div>
            <p>
               5 Deals
            </p>
         </div>
         <div class="pipeline-dropdown d-flex">
            <img class="" src="<?php echo $BASE_URL . 'assets/images/bar-chart-30.png' ?>" />
            <select class="pipeline-dropdown-input-text" name="" id="" style="height: 27px; padding: 0px;">
               <option class="" value="">Tage One</option>
               <option class="" value="">Tage 2</option>
            </select>
            <div class="pipeline-edit">
               <img src="<?php echo $BASE_URL . 'assets/images/icons8-quill-pen-48.png' ?>" alt="">
            </div>
            <div class="btn-group">
            <button type="button" class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
               Pipeline
            </button>
            <ul class="dropdown-menu">
               <!-- <a href="#" ><img src="https://img.icons8.com/pastel-glyph/64/000000/pupil-male--v2.png" />Personal Preferences</a> -->
                    <a href="#" class="nav-link lead_buttons" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><img src="https://img.icons8.com/ios/24/000000/settings--v1.png" />Settings
                    </a>
                    <!-- <a href="logout.php"><img src="https://img.icons8.com/ios/50/000000/exit.png" />Log Out</a> -->
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
         </div>
         <div class="dropdown">
            <img onclick="myFunction()" class="dropbtn user" class="" src="data:image/png;base64,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">
            <div id="myDropdown" class="dropdown-content shadow-sm">

                <div class="nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <p class="text-muted pt-2 ps-4 me-3"><?php echo $_SESSION['username']?></p>
                    <a href="#" ><img src="https://img.icons8.com/pastel-glyph/64/000000/pupil-male--v2.png" />Personal Preferences</a>
                    <a href="#" class="nav-link lead_buttons" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><img src="https://img.icons8.com/ios/24/000000/settings--v1.png" />Settings
                    </a>
                    <a href="logout.php"><img src="https://img.icons8.com/ios/50/000000/exit.png" />Log Out</a>

                </div>
            </div>
        </div>
         
         </div>


      </div>

   </div>

   <!-- stages and cards -->
   <div class="d-flex flex-row stage-row ">
      <!-- stage cards -->

      <?php foreach ($stages as $key => $stage) { ?>
         <div class="p-2 stage">

            <!-- stage heading -->
            <div class="stage-box">
               <div class="stage-head-card mb-2">
                  <p class="fw-bold stage-name ms-3 mt-2 mt-0 me-0 deal-topic"><?php echo $stage['stage_name'] ?></p>
                  <div class="d-flex">
                     <p class="text-muted stage-name ms-3 mt-2 mt-0 me-0 deal-p">LKR 23,00000000 :</p>
                     <p class="text-muted stage-name ms-1 mt-2 mt-0 me-0 deal-p">2 Deals</p>
                  </div>
                  <svg class="arrow" width="16" height="56" xmlns="http://www.w3.org/2000/svg">
                     <g fill="none" fill-rule="evenodd">
                        <path class="arrow__right" fill="#F7F7F7" d="M0 0h16v56H0z"></path>
                        <path class="arrow__border" fill="#E5E5E5" d="M1 0l8 28-8 28H0V0z"></path>
                        <path class="arrow__left" fill="#F7F7F7" d="M0 1l8 27-8 27z"></path>
                     </g>
                  </svg>
               </div>
            </div>

            <!-- stage card -->
            <div class="deal-stage-col ">
               
>>>>>>> 1b7924c10a96e6fc37a698039d22d153758cf473

               <!-- single deal caed -->
               <?php foreach ($deals as $key => $deal) {
                  if ($stage['stage_id'] == $deal['pipeline_stage']) { ?>
                     <div class="d-flex flex-column deals-box shadow-sm" draggable="true">
                       
                        <p id="deal-name" class=" m-0"><?php echo $deal['title'] ?></p>
                        <p id="deal-organization" class="text-muted m-0">Sterling</p>
                        <div class="d-flex  pt-1">
                           <i class="fa fa-user icon-stage me-1"></i>
                           <p id="deal-price" class=" m-0 text-muted ">LKR100</p>
                        </div>

                     </div>
               <?php
                     // if ($stage['stage_id'] != $deal['pipeline_stage']) {
                     //   
                     // }
                  }
               } ?>


            </div>

         </div>
            

      <?php } ?> 




   </div>

</div>



