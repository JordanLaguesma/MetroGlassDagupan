<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?= $this->include('layouts/admin/header'); ?>

<body class="g-sidenav-show  bg-gray-100">
  <?= $this->include('layouts/admin/dashboard/aside'); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?= $this->include('layouts/admin/dashboard/navbar'); ?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <!-- button type="button" class="btn btn-lg" data-bs-target="#addUser" data-bs-toggle="modal"><i class="fa fa-plus"></i> Add</button -->
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Product Inventory</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table id="tblProducts" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Name</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sizes</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?= $this->include('layouts/admin/dashboard/footer'); ?>
    </div>
  </main>
  <?= $this->include('layouts/admin/dashboard/fixed_plugin'); ?>
  <!--   Core JS Files   -->
  <?= $this->include('layouts/admin/dashboard/script'); ?>
  <script>
    // DataTables
    $('#tblProducts').DataTable({
      "aoColumnDefs": [{
        "bSortable": false,
        "aTargets": [0, 1, 2, 3]
      }],
      "order": [],
      "serverSide": true,
      "searching": false,
      "lengthChange": false,
      "ajax": {
        url: "<?= site_url('admin/dashboard/inventory/read') ?>",
        type: 'POST'
      }
    });
    // CRUD Operations
    $(document).ready(function() {
      // Create
      $('#newUser').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
          url: '<?= site_url('admin/dashboard/users/save'); ?>',
          type: 'POST',
          data: $(this).serialize(),
          dataType: 'JSON',
          success: function(data) {
            if(data.error == 0) {
              alert('User successfully created!');
            } else {
              alert('Something went wrong...');
              console.log(data.username_error);
              console.log(data.email_error);
              console.log(data.position_error);
              console.log(data.password_error);
            }
          }
        })
      });
      // Update

      // Delete
      
    });
    // Window
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <?= $this->include('layouts/admin/script'); ?>
</body>

</html>