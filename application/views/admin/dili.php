       <!-- Begin Page Content -->


       <div class="container-fluid">

           <div class="text-right">
               <button class="btn btn-primary btn-sm dropdown-toggle mb-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   municipio
               </button>
               <div class="dropdown-menu">
                   <a class="dropdown-item" href="<?php echo site_url('admin'); ?>">hot-hotu</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/aileu'); ?>">Aileu</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/ainaro'); ?>">Ainaro</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/baucau'); ?>">Baucau</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/bobonaro'); ?>">Bobonaro</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/covalima'); ?>">Covalima</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/dili'); ?>">Dili</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/ermera'); ?>">Ermera</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/lautem'); ?>">Lautem</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/liquica'); ?>">Liquica</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/manatuto'); ?>">Manatuto</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/manufahi'); ?>">manufahi</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/raeoa'); ?>">Raeoa</a>
                   <a class="dropdown-item" href="<?php echo site_url('admin/viqueque'); ?>">Viqueque</a>
               </div>
           </div>



           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800"><?php echo $title ?></h1>
           <div class="row">


               <div class="col-xl-3 col-md-6 mb-4">
                   <div class="card border-left-primary shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Partisipante</div>
                                   <?php if ($sum != null) : ?>
                                       <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $sum; ?></div>
                                   <?php else : ?>
                                       <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                   <?php endif; ?>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-users fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>


               <div class="col-xl-3 col-md-6 mb-4">
                   <div class="card border-left-success shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Programa</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $program; ?></div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-award fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>


               <div class="col-xl-3 col-md-6 mb-4">
                   <div class="card border-left-danger shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Partisipante Feto</div>
                                   <div class="row no-gutters align-items-center">
                                       <div class="col-auto">
                                           <?php if ($feto != null) : ?>
                                               <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo round(($feto / $sum) * 100) . '%' ?></div>
                                           <?php else : ?>
                                               <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0%</div>
                                           <?php endif; ?>
                                       </div>
                                       <div class="col">
                                           <div class="progress progress-sm mr-2">
                                               <?php if ($feto != null) : ?>
                                                   <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo round(($feto / $sum) * 100) . '%' ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                               <?php else : ?>
                                                   <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                               <?php endif; ?>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-venus fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-xl-3 col-md-6 mb-4">
                   <div class="card border-left-info shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Partisipante Mane</div>
                                   <div class="row no-gutters align-items-center">
                                       <div class="col-auto">
                                           <?php if ($mane != null) : ?>
                                               <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo round(($mane / $sum) * 100) . '%' ?></div>
                                           <?php else : ?>
                                               <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0%</div>
                                           <?php endif; ?>
                                       </div>
                                       <div class="col">
                                           <div class="progress progress-sm mr-2">
                                               <?php if ($mane != null) : ?>
                                                   <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo round(($mane / $sum) * 100) . '%' ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                               <?php else : ?>
                                                   <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                               <?php endif; ?>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-mars fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <div class="row mb-3">
           <div class="col-xl-7 col-lg-7">
                   <div class="card shadow ">
                       <div class="card-header py-3  bg-primary">
                           <h6 class="m-0 font-weight-bold text-white">Total Partisipante tuir Kategoria kada Tinan</h6>
                       </div>
                       <div class="card-body ">
                           <div class="chart-bar">
                               <canvas id="totalcat"></canvas>
                           </div>
                           <hr>
                       </div>
                   </div>
               </div>
               <div class="col-xl-5 col-lg-5">
                   <div class="card shadow flex-fill">
                       <div class="card-header py-3 bg-primary">
                           <h6 class="m-0 font-weight-bold text-white">Total Partisipante tuir Kategoria </h6>
                       </div>
                       <div class="card-body flex-fill">
                           <div class="chart-pie">
                               <canvas id="totalpersen"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Content Row -->
           <div class="row mb-3">

               <div class="col-xl-12 col-lg-12 ">
                   <div class="card shadow ">
                       <div class="card-header py-3 bg-primary">
                           <h6 class="m-0 font-weight-bold text-white">Total Partisipante tuir Tinan</h6>
                       </div>
                       <div class="card-body ">
                           <div class="chart-bar">
                               <canvas id="totalyear"></canvas>
                           </div>
                           <hr>
                       </div>
                   </div>
               </div>
           </div>

 


           <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->


       <script src="<?= base_url('assets/') ?>js/programa/dili/year.js"></script>
       <script src="<?= base_url('assets/') ?>js/programa/dili/cat.js"></script>