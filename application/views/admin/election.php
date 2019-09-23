       <!-- Begin Page Content -->


       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Resultadu Elisaun PFN</h1>
           <div class="row">
               <div class="col-xl-4 col-md-6 mb-4">
                   <div class="card border-left-primary shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Aplikante</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $register; ?></div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-users fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>


               <div class="col-xl-4 col-md-6 mb-4">
                   <div class="card border-left-danger shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Selesionadu</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $selected; ?></div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-award fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-xl-4 col-md-6 mb-4">
                   <div class="card border-left-success shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Candidatu/a</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $candidate; ?></div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-award fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>



           <!-- Content Row Aileu -->
           <div class="row mb-2">

               <div class="col-xl-6 col-lg-2">

                   <!-- Bar Chart Aileu -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Aileu</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar mb-0">
                               <canvas id="aileu"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-xl-6 col-lg-2">

                   <!-- Bar Chart Ainaro -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Ainaro</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar mb-0">
                               <canvas id="ainaro"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="row">

               <div class="col-xl-12 col-lg-12">

                   <!-- Bar Chart Baucau -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Baucau</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="baucau"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="row">

               <div class="col-xl-12 col-lg-7">

                   <!-- Bar Chart Bobonaro -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Bobonaro</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="bobonaro"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="row">

               <div class="col-xl-12 col-lg-7">

                   <!-- Bar Chart Covalima -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Covalima</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="covalima"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="row">

               <div class="col-xl-12 col-lg-7">

                   <!-- Bar Chart Dili -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Dili</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="dili"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="row">

               <div class="col-xl-12 col-lg-7">

                   <!-- Bar Chart Ermera -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Ermera</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="ermera"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="row">

               <div class="col-xl-12 col-lg-7">

                   <!-- Bar Chart Lautem -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Lautem</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="lautem"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="row">

               <div class="col-xl-12 col-lg-7">

                   <!-- Bar Chart Liquica -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Liquica</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="liquica"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="row">

               <div class="col-xl-12 col-lg-7">

                   <!-- Bar Chart Manatuto -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Manatuto</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="manatuto"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="row">

               <div class="col-xl-12 col-lg-7">

                   <!-- Bar Chart Manufahi -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Manufahi</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="manufahi"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="row">

               <div class="col-xl-12 col-lg-7">

                   <!-- Bar Chart Raeoa -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Raeoa</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="raeoa"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="row">

               <div class="col-xl-12 col-lg-7">

                   <!-- Bar Chart Viqueque -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Viqueque</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="viqueque"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

           </div>
       </div>

       <!--Chart result-->
       <script src="<?= base_url('assets/') ?>js/election/result/aileu.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/result/ainaro.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/result/baucau.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/result/bobonaro.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/result/covalima.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/result/dili.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/result/ermera.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/result/lautem.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/result/liquica.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/result/manufahi.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/result/manatuto.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/result/raeoa.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/result/viqueque.js"></script>