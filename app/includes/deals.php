<?php
$deals = selectAll('deal');
$stages = selectAll('stages');
$currencies = selectAll('currency');
// dd($currencies);
?>
<div class="tab-pane fade show active" id="v-pills-deals" role="tabpanel" aria-labelledby="v-pills-home-tab"
    tabindex="0">


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
                                        <!--  priya edited -->

                                        <input class="input-field" type="text" name="value" style="width: 125px;">
                                        <select class="input-field" name="currency" id=""
                                            style="width: 120px; height: 27px; padding: 0px;">
                                            <?php foreach ($currencies as $key => $currency) { ?>
                                            <option class="" value="<?php echo $currency['curr_id'] ?>">
                                                <?php echo $currency['currency_name'] ?></option>
                                            <?php   }


                                 ?>
                                            <!-- priya edited -->

                                        </select>
                                    </div>


                                    <div class="model-item text-muted">
                                        <p class="">Pipeline</p>
                                        <select class="input-field" name="pipeline" id=""
                                            style="height: 27px; padding: 0px;">
                                            <option class="" value="Pipeline_One">Pipeline One</option>
                                            <option class="" value="Pipeline_Two">Pipeline Two</option>
                                        </select>
                                    </div>

                                    <div class="model-item text-muted">
                                        <p class="">Pipeline Stage</p>

                                        <select class="input-field" name="pipeline_stage" id=""
                                            style="height: 27px; padding: 0px;">
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

                                    <div class="model-item text-muted">
                                        <p class="">Visible to</p>

                                        <select class="input-field" name="Visible_to" id=""
                                            style="height: 27px; padding: 0px;">
                                            <?php foreach ($xxx as $key => $xxx) { ?>
                                            <option class="" value="<?php echo $xxx['xxx_id'] ?>">
                                                <?php echo $xxx['xxx_name'] ?></option>
                                            <?php   } ?>

                                        </select>
                                    </div>


                                </div>
                            </div>

                            <div class="col-6 p-2 ps-3">
                                <div class="model-item text-muted">
                                    <p class="">Phone</p>

                                    <input class="input-field" type="text" name="value" style="width: 150px;">
                                    <select class="input-field" name="phone category" id=""
                                        style="width: 120px; height: 27px; padding: 0px;">
                                        <?php foreach ($xxx as $key => $xxx) { ?>
                                        <option class="" value="<?php echo $xxx['stage_id'] ?>">
                                            <?php echo $xxx['xxx_name'] ?></option>
                                        <?php   } ?>

                                        <input class="input-field" type="text" name="Add Phone">

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
                            <button type="submit" value="add_deal" id="deal_submit" name="submit_deal"
                                class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- filtering heading -->
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
                    <img class="filter-menu-options"
                        src="https://img.icons8.com/ios-filled/50/000000/money-circulation.png" />
                </button></div>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary-deal" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
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
                    5 Deals
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
            <div class="group_2">
                <button class="btn btn-primary-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Small button
                </button>
                <ul class="dropdown-menu">
                    <form
                        class="form-inline d-flex justify-content-center md-form form-sm active-pink active-pink-2 mt-2">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                            aria-label="Search">
                    </form>
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
                  //   
                  // }
               }
            } ?>


        </div>

    </div>


    <?php } ?>




</div>

</div>