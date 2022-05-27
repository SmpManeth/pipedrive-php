<div class="tab-pane fade show active" id="v-pills-deals" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Add Deal
   </button>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add Deal</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 ps-3 pe-3">
               <form action="dashboard.php" method="get" class="border">
                  <div class="row">
                     <div class="col-6 left-col-deal p-2 ps-3">
                        <div>
                           <div class="model-item text-muted">
                              <p class="">Contact Person</p>
                              <i class="fa fa-user icon"></i>
                              <input class="input-field input-text" type="text">
                           </div>
                           <div class="model-item text-muted">
                              <p class="">Organizationn</p>
                              <i class="fa fa-building icon"></i>
                              <input class="input-field input-text" type="text">
                           </div>
                           <div class="model-item text-muted">
                              <p class="">Title</p>

                              <input class="input-field" type="text">
                           </div>
                           <div class="model-item text-muted">
                              <p class="">Value</p>

                              <input class="input-field" type="text" style="width: 125px;">
                              <select class="input-field" name="" id="" style="width: 120px; height: 27px; padding: 0px;">
                                 <option class="" value="">Sri Lankan Rupee (LKR)</option>
                              </select>
                           </div>
                           <div class="model-item text-muted">
                              <p class="">Pipeline</p>

                              <input class="input-field" type="text">
                           </div>

                           <div class="model-item text-muted">
                              <p class="">Pipeline Stage</p>

                              <select class="input-field" name="" id="" style="height: 27px; padding: 0px;">
                                 <option class="" value="">Tage One</option>
                              </select>
                           </div>
                           <div class="model-item text-muted">
                              <p class="">Expected Closing Date</p>

                              <input class="input-field" type="date">
                           </div>

                        </div>
                     </div>

                     <div class="col-6 p-2 ps-3">
                        <div class="model-item text-muted">
                           <p class="">Phone</p>

                           <input class="input-field" type="text">
                           <a class="add_field_button text-decoration-none  h6">+Add Phone</a>
                           <div class="input_fields_wrap">



                           </div>


                        </div>
                        <div class="model-item text-muted">
                           <p class="">Email</p>

                           <input class="input-field" type="text">
                           <a class="add_f_button text-decoration-none  h6">+Add Email</a>
                           <div class="input_wrap">



                           </div>


                        </div>


                     </div>

                  </div>
                  <div class="modal-footer">

                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" value="add_deal" id="deal_submit" class="btn btn-primary">Save changes</button>
                  </div>
               </form>

            </div>

         </div>
      </div>
   </div>

   <div class="row d-flex">
      <h2>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi atque perferendis quos fuga modi totam, neque voluptas quis inventore commodi repellat voluptates! Tenetur repudiandae nostrum iste reiciendis excepturi voluptas?
      </h2>
   </div>
   <div class="d-flex flex-row stage-row">
      <!-- stage one -->
      <div class="p-2 stage">

         <div class="stage-box">
            <div class="stage-head-card mb-2">
               <p class="fw-bold stage-name ms-3 mt-2 mt-0 me-0 deal-topic">Stage One</p>
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
         <div class="deal-stage-col ">
            <div class="d-flex flex-column deals-box shadow-sm" draggable="true">
               <p id="deal-name" class=" m-0">Sterling Deal</p>
               <p id="deal-organization" class="text-muted m-0">Sterling</p>
               <div class="d-flex  pt-1">
                  <i class="fa fa-user icon-stage me-1"></i>
                  <p id="deal-price" class=" m-0 text-muted ">LKR100</p>
               </div>

            </div>


         </div>
         <div class="deal-stage-col ">
            <div class="d-flex flex-column deals-box shadow-sm" draggable="true">
               <p id="deal-name" class=" m-0">Sterling Deal</p>
               <p id="deal-organization" class="text-muted m-0">Sterling</p>
               <div class="d-flex  pt-1">
                  <i class="fa fa-user icon-stage me-1"></i>
                  <p id="deal-price" class=" m-0 text-muted ">LKR100</p>
               </div>

            </div>


         </div>
      </div>

      <!-- stage two -->
      <div class="p-2 stage ">

         <div class="stage-box">
            <div class="stage-head-card mb-2">
               <p class="fw-bold stage-name ms-3 mt-2 mt-0 me-0 deal-topic">Stage One</p>
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
         <div class="deal-stage-col ">
            <div class="d-flex flex-column deals-box shadow-sm" draggable="true">
               <p id="deal-name" class=" m-0">Sterling Deal</p>
               <p id="deal-organization" class="text-muted m-0">Sterling</p>
               <div class="d-flex  pt-1">
                  <i class="fa fa-user icon-stage me-1"></i>
                  <p id="deal-price" class=" m-0 text-muted ">LKR100</p>
               </div>

            </div>


         </div>
         <div class="deal-stage-col ">
            <div class="d-flex flex-column deals-box shadow-sm" draggable="true">
               <p id="deal-name" class=" m-0">Sterling Deal</p>
               <p id="deal-organization" class="text-muted m-0">Sterling</p>
               <div class="d-flex  pt-1">
                  <i class="fa fa-user icon-stage me-1"></i>
                  <p id="deal-price" class=" m-0 text-muted ">LKR100</p>
               </div>

            </div>


         </div>
      </div>

      <!-- stage Three -->
      <div class="p-2 stage ">

         <div class="stage-box">
            <div class="stage-head-card mb-2">
               <p class="fw-bold stage-name ms-3 mt-2 mt-0 me-0 deal-topic">Stage One</p>
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
         <div class="deal-stage-col ">
            <div class="d-flex flex-column deals-box shadow-sm" draggable="true">
               <p id="deal-name" class=" m-0">Sterling Deal</p>
               <p id="deal-organization" class="text-muted m-0">Sterling</p>
               <div class="d-flex  pt-1">
                  <i class="fa fa-user icon-stage me-1"></i>
                  <p id="deal-price" class=" m-0 text-muted ">LKR100</p>
               </div>

            </div>


         </div>
      </div>

      <!-- stage Four -->
      <div class="p-2 stage ">

         <div class="stage-box">
            <div class="stage-head-card mb-2">
               <p class="fw-bold stage-name ms-3 mt-2 mt-0 me-0 deal-topic">Stage One</p>
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
         <div class="deal-stage-col ">
            <div class="d-flex flex-column deals-box shadow-sm" draggable="true">
               <p id="deal-name" class=" m-0">Sterling Deal</p>
               <p id="deal-organization" class="text-muted m-0">Sterling</p>
               <div class="d-flex  pt-1">
                  <i class="fa fa-user icon-stage me-1"></i>
                  <p id="deal-price" class=" m-0 text-muted ">LKR100</p>
               </div>

            </div>


         </div>
      </div>
      <!-- stage Five -->
      <div class="p-2 stage ">

         <div class="stage-box">
            <div class="stage-head-card mb-2">
               <p class="fw-bold stage-name ms-3 mt-2 mt-0 me-0 deal-topic">Stage One</p>
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
         <div class="deal-stage-col ">
            <div class="d-flex flex-column deals-box shadow-sm" draggable="true">
               <p id="deal-name" class=" m-0">Sterling Deal</p>
               <p id="deal-organization" class="text-muted m-0">Sterling</p>
               <div class="d-flex  pt-1">
                  <i class="fa fa-user icon-stage me-1"></i>
                  <p id="deal-price" class=" m-0 text-muted ">LKR100</p>
               </div>

            </div>


         </div>
      </div>


   </div>

</div>