       <!-- Begin Page Content -->


       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">My Profile</h1>

           <div class="card mb-3" style="max-width: 540px;">
               <div class="row no-gutters">
                   <div class="col-md-4">
                       <img src="<?= base_url('/assets/img/profile/') . $user['image'] ?>" class="card-img">
                   </div>
                   <div class="col-md-8">
                       <div class="card-body">
                           <h5 class="card-title"><?= $user['f_name'] . '&nbsp' . $user['l_name']; ?></h5>
                           <p class="card-text"><?= $user['email']; ?></p>
                           <p class="card-text"><small class="text-muted">Member Since <?= date('d F Y', $user['date_created']); ?></small></p>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Charts</h1>

           <!-- Content Row -->
           <div class="row">

               <div class="col-xl-8 col-lg-7">

                   <!-- Area Chart -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-area">
                               <canvas id="myAreaChart"></canvas>
                           </div>
                           <hr>
                           Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
                       </div>
                   </div>

                   <!-- Bar Chart -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="myBarChart"></canvas>
                           </div>
                           <hr>
                           Styling for the bar chart can be found in the <code>/js/demo/chart-bar-demo.js</code> file.
                       </div>
                   </div>

               </div>

               <!-- Donut Chart -->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                       </div>
                       <!-- Card Body -->
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="myPieChart"></canvas>
                           </div>
                           <hr>
                           Styling for the donut chart can be found in the <code>/js/demo/chart-pie-demo.js</code> file.
                       </div>
                   </div>
               </div>
           </div>

       </div>
       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->