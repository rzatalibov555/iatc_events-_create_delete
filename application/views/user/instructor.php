<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/preloader'); ?>
<?php $this->load->view('user/includes/header'); ?>
<?php $this->load->view('user/includes/mini_shopping_card'); ?>
<?php $this->load->view('user/includes/mob_header'); ?>

      <main>

         <!-- page title area start -->
         <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="<?php echo base_url('assets/user/'); ?>assets/img/page-title/page-title.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="page__title-wrapper mt-110">
                        <h3 class="page__title">Müəllimlərimiz</h3>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo base_url('index'); ?>">Ana səhifə</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Müəllimlərimiz</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- page title area end -->

         <!-- teacher area start -->
         <section class="teacher__area pt-115 pb-110">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3">
                     <div class="section__title-wrapper text-center mb-60">
                        <h2 class="section__title">Bizim <br>
                           Məşhur <span class="yellow-bg"> Müəllimlərimiz <img src="<?php echo base_url('assets/user/'); ?>assets/img/shape/yellow-bg-2.png" alt="">  </span> <br>
                        </h2>
<!--                        <p></p>-->
                     </div>
                  </div>
               </div>
               <div class="row">

                   <?php foreach ($all_teachers as $all_teachers_key){ ?>
                       <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                           <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">
                               <div class="teacher__thumb w-img fix">
                                   <a href="<?php echo base_url('instructor_single/'.$all_teachers_key['t_id']); ?>">
                                       <img height="300" src="<?php echo base_url('upload/teachers/'.$all_teachers_key['t_img']); ?>" alt="">
                                   </a>
                               </div>
                               <div class="teacher__content">
                                   <h3 class="teacher__title"><?php echo $all_teachers_key['t_title']; ?></h3>
                                   <br>
                                   <span><?php echo $all_teachers_key['t_position_az']; ?></span>

                                   <div class="teacher__social">
                                       <br>
                                       <ul>
                                           <?php if ($all_teachers_key['t_fb']){ ?>
                                               <li><a target="_blank" href="<?php echo $all_teachers_key['t_fb']; ?>"><i class="social_facebook"></i></a></li>
                                           <?php } ?>

                                           <?php if ($all_teachers_key['t_instagram']){ ?>
                                               <li><a href="<?php echo $all_teachers_key['t_instagram']; ?>"><i class="social_instagram"></i></a></li>
                                            <?php } ?>

                                           <?php if ($all_teachers_key['t_twitter']){ ?>
                                               <li><a href="<?php echo $all_teachers_key['t_twitter']; ?>"><i class="social_twitter"></i></a></li>
                                            <?php } ?>

                                           <?php if ($all_teachers_key['t_linkedin']){ ?>
                                               <li><a href="<?php echo $all_teachers_key['t_linkedin']; ?>"><i class="social_linkedin"></i></a></li>
                                           <?php } ?>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php } ?>



<!--                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                     <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">-->
<!--                        <div class="teacher__thumb w-img fix">-->
<!--                           <a href="--><?php //echo base_url('instructor_single/1'); ?><!--">-->
<!--                              <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/teacher/teacher-2.jpg" alt="">-->
<!--                           </a>-->
<!--                        </div>-->
<!--                        <div class="teacher__content">-->
<!--                           <h3 class="teacher__title">Kelly Franklin,</h3> -->
<!--                           <span>Desginer</span>-->
<!---->
<!--                           <div class="teacher__social">-->
<!--                              <ul>-->
<!--                                 <li><a href="#"><i class="social_facebook"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_twitter"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_vimeo"></i></a></li>-->
<!--                              </ul>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                     <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">-->
<!--                        <div class="teacher__thumb w-img fix">-->
<!--                           <a href="#">-->
<!--                              <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/teacher/teacher-3.jpg" alt="">-->
<!--                           </a>-->
<!--                        </div>-->
<!--                        <div class="teacher__content">-->
<!--                           <h3 class="teacher__title">Hilary Ouse,</h3> -->
<!--                           <span>Markater</span>-->
<!---->
<!--                           <div class="teacher__social">-->
<!--                              <ul>-->
<!--                                 <li><a href="#"><i class="social_facebook"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_twitter"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_vimeo"></i></a></li>-->
<!--                              </ul>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                     <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">-->
<!--                        <div class="teacher__thumb w-img fix">-->
<!--                           <a href="#">-->
<!--                              <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/teacher/teacher-5.jpg" alt="">-->
<!--                           </a>-->
<!--                        </div>-->
<!--                        <div class="teacher__content">-->
<!--                           <h3 class="teacher__title">Lillian Walsh,</h3> -->
<!--                           <span>CO Founder</span>-->
<!---->
<!--                           <div class="teacher__social">-->
<!--                              <ul>-->
<!--                                 <li><a href="#"><i class="social_facebook"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_twitter"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_vimeo"></i></a></li>-->
<!--                              </ul>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                     <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">-->
<!--                        <div class="teacher__thumb w-img fix">-->
<!--                           <a href="#">-->
<!--                              <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/teacher/teacher-4.jpg" alt="">-->
<!--                           </a>-->
<!--                        </div>-->
<!--                        <div class="teacher__content">-->
<!--                           <h3 class="teacher__title">Shahnewaz,</h3> -->
<!--                           <span>Web Developer</span>-->
<!---->
<!--                           <div class="teacher__social">-->
<!--                              <ul>-->
<!--                                 <li><a href="#"><i class="social_facebook"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_twitter"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_vimeo"></i></a></li>-->
<!--                              </ul>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">-->
<!--                     <div class="teacher__item text-center grey-bg-5 transition-3 mb-30">-->
<!--                        <div class="teacher__thumb w-img fix">-->
<!--                           <a href="#">-->
<!--                              <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/teacher/teacher-6.jpg" alt="">-->
<!--                           </a>-->
<!--                        </div>-->
<!--                        <div class="teacher__content">-->
<!--                           <h3 class="teacher__title">Nicola Tesla,</h3> -->
<!--                           <span>Engineer</span>-->
<!---->
<!--                           <div class="teacher__social">-->
<!--                              <ul>-->
<!--                                 <li><a href="#"><i class="social_facebook"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_twitter"></i></a></li>-->
<!--                                 <li><a href="#"><i class="social_vimeo"></i></a></li>-->
<!--                              </ul>-->
<!--                           </div>-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
               </div>
            </div>
         </section>
         <!-- teacher area end -->

         <!-- banner area start -->
<!--         <section class="banner__area pb-80">-->
<!--            <div class="container">-->
<!--               <div class="row">-->
<!--                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">-->
<!--                     <div class="banner__item p-relative mb-40" data-background="--><?php //echo base_url('assets/user/'); ?><!--assets/img/banner/banner-bg-1.jpg">-->
<!--                        <div class="banner__content">-->
<!--                           <span>Free</span>-->
<!--                           <h3 class="banner__title">-->
<!--                              <a href="course-details.php">Germany Foundation <br> Document</a>-->
<!--                           </h3>-->
<!--                           <a href="course-grid.php" class="e-btn e-btn-2">View Courses</a>-->
<!--                        </div>-->
<!--                        <div class="banner__thumb d-none d-sm-block d-md-none d-lg-block">-->
<!--                           <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/banner/banner-img-1.png" alt="">-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">-->
<!--                     <div class="banner__item p-relative mb-40" data-background="--><?php //echo base_url('assets/user/'); ?><!--assets/img/banner/banner-bg-2.jpg">-->
<!--                        <div class="banner__content">-->
<!--                           <span class="orange">new</span>-->
<!--                           <h3 class="banner__title">-->
<!--                              <a href="course-details.php">Online Courses <br>From Eduka University</a>-->
<!--                           </h3>-->
<!--                           <a href="course-grid.php" class="e-btn e-btn-2">Find Out More</a>-->
<!--                        </div>-->
<!--                        <div class="banner__thumb banner__thumb-2 d-none d-sm-block d-md-none d-lg-block">-->
<!--                           <img src="--><?php //echo base_url('assets/user/'); ?><!--assets/img/banner/banner-img-2.png" alt="">-->
<!--                        </div>-->
<!--                     </div>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </section>-->
         <!-- banner area end -->
      </main>

<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>