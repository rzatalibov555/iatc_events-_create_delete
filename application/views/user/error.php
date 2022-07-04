<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/preloader'); ?>
<?php $this->load->view('user/includes/header'); ?>
<?php $this->load->view('user/includes/mini_shopping_card'); ?>
<?php $this->load->view('user/includes/mob_header'); ?>

      <main>

         <!-- error area start -->
         <section class="error__area pt-200 pb-200">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                     <div class="error__item text-center">
                        <div class="error__thumb mb-45">
                           <img src="<?php echo base_url('assets/user/'); ?>assets/img/error/error.png" alt="">
                        </div>
                        <div class="error__content">
                           <h3 class="error__title">Page Not Found!</h3>
                           <p>Please try searching for some other page.</p>
                           <a href="index.html" class="e-btn e-btn-3 e-btn-4">Back To Home</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- error area end -->

      </main>

<?php $this->load->view('user/includes/footer'); ?>
<?php $this->load->view('user/includes/footerStyle'); ?>