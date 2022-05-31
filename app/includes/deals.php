<?php
$deals = selectAll('deal');
$stages = selectAll('stages');

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
                              <p class="">Organizationn</p>
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
                                 <option class="" value="">Sri Lankan Rupee (LKR)</option>
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
                              <p class="">Expected Closing Date</p>

                              <input class="input-field" type="date" name="expected_closing_date">
                           </div>

                        </div>
                     </div>

                     <div class="col-6 p-2 ps-3">
                        <div class="model-item text-muted">
                           <p class="">Phone</p>

                           <input class="input-field" type="text" name="phone">
                           <a class="add_field_button text-decoration-none  h6">+Add Phone</a>
                           <div class="input_fields_wrap">



                           </div>


                        </div>
                        <div class="model-item text-muted">
                           <p class="">Email</p>

                           <input class="input-field" type="text" name="email">
                           <a class="add_f_button text-decoration-none  h6">+Add Email</a>
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
      <div class="d-flex filters ms-0.5">
         <div class="btnfilter"> <button type="button">
               <img class="filter-menu-options" src="https://img.icons8.com/ios-glyphs/30/000000/bar-chart.png" />
            </button>
         </div>
         <div class="btnfilter"> <button type="button">
               <img class="filter-menu-options" src="<?php echo $BASE_URL . 'assets/images/stack-48.png' ?>" />
            </button></div>
         <div class="btnfilter"> <button type="button">
               <img class="filter-menu-options" src="https://img.icons8.com/ios-filled/50/000000/money-circulation.png" />
            </button></div>
         <div>
            <!-- Button trigger modal -->
            <button type="button" class=" btn-filter ms-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
               + Deal
            </button>



         </div>

         <div class="deal-total-1 ms-5">
            <p>
               LKR 26,100
            </p>
         </div>
         <div class="deal-total-2 ms-5">
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
               <li><a class="dropdown-item" href="#">Action</a></li>
               <li><a class="dropdown-item" href="#">Another action</a></li>
               <li><a class="dropdown-item" href="#">Something else here</a></li>
               <li>
                  <hr class="dropdown-divider">
               </li>
               <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
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
                     //    dd("Bijja");
                     // }
                  }
               } ?>


            </div>

         </div>

      <?php } ?>




   </div>

</div>