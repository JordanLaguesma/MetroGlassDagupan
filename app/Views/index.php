<!--
=========================================================
* Soft UI Design System - v1.0.9
=========================================================

* Product Page:  https://www.creative-tim.com/product/soft-ui-design-system 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?= $this->include('layouts/customer/header'); ?>

<body class="sign-in-illustration">
  <section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">Sign In</h4>
                <p class="mb-0">Enter your email and password to sign in</p>
              </div>
              <div class="card-body">
                <form action="<?= site_url('auth'); ?>" method="POST" role="form">
                  <div class="mb-3">
                    <input type="text" name="authusem" id="authusem" class="form-control form-control-lg" placeholder="Username / Email" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <input type="password" name="authpass" id="authpass" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Don't have an account?
                  <a href="#" id="regForm" data-bs-toggle="modal" data-bs-target="#mIR" class="text-primary text-gradient font-weight-bold">Sign up</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="<?= base_url('assets_customers/img/shapes/pattern-lines.svg'); ?>" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-100 position-relative z-index-2" src="<?= base_url('assets_customers/img/illustrations/chat.png'); ?>">
              </div>
              <h4 class="mt-5 text-white font-weight-bolder">"Attention is the new currency"</h4>
              <p class="text-white">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?= $this->include('modals/register'); ?>
  <?= $this->include('layouts/customer/script'); ?>
  <script>
    // Register User (Admin/Beta)
    $(document).ready(function() {
      $('#newUser').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
          url: '<?= site_url('index/save'); ?>',
          type: 'POST',
          data: $(this).serialize(),
          dataType: 'JSON',
          success: function(data) {
            if (data.error == 0) {
              alert('Account created!');
              $('#mIR').modal('hide');
            } else {
              alert('Something went wrong...');
              console.log(data.username_error);
              console.log(data.email_error);
              console.log(data.address_error);
              console.log(data.contact_error);
              console.log(data.password_error);
              console.log(data.confpass_error);
            }
          }
        })
      })
    })
  </script>
</body>

</html>