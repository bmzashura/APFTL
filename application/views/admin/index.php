       <!-- Begin Page Content -->


       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Dashborad APFTL</h1>
           <div class="row">


               <div class="col-xl-3 col-md-6 mb-4">
                   <div class="card border-left-primary shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Participant</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $sum; ?></div>
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
                                           <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo round(($feto / $sum) * 100) . '%' ?></div>
                                       </div>
                                       <div class="col">
                                           <div class="progress progress-sm mr-2">
                                               <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo round(($feto / $sum) * 100) . '%' ?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                                           <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo round(($mane / $sum) * 100) . '%' ?></div>
                                       </div>
                                       <div class="col">
                                           <div class="progress progress-sm mr-2">
                                               <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo round(($mane / $sum) * 100) . '%' ?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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

           <!-- Content Row -->
           <div class="row">
               <div class="col-xl-12 col-lg-2">
                   <div class="card shadow mb-8">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Total Participant</h6>
                       </div>
                       <div class="card-body ">
                           <div class="chart-bar">
                               <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                               <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
                               <canvas id="myChartbar"></canvas>
                               <script>
                                   var ctx = document.getElementById('myChartbar').getContext('2d');
                                   var data_distric = [];
                                   var data_total = [];
                                   var data_feto = [];
                                   var data_mane = [];
                                   $.post("<?= base_url('admin/gettotal') ?>",
                                       function(datatotal) {
                                           var obj = JSON.parse(datatotal);
                                           $.each(obj, function(test, item) {
                                               data_distric.push(item.distric);
                                               data_total.push(item.total);
                                               data_feto.push(item.feto);
                                               data_mane.push(item.mane);
                                           });
                                           var myChartbar = new Chart(ctx, {
                                               type: 'bar',
                                               data: {
                                                   labels: data_distric,
                                                   datasets: [{
                                                           label: 'Total',
                                                           data: data_total,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Feto',
                                                           data: data_feto,
                                                           backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                           borderColor: 'rgba(255, 99, 132, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Mane',
                                                           data: data_mane,
                                                           backgroundColor: 'rgba(7, 98, 150, 0.2)',
                                                           borderColor: 'rgba(7, 98, 150, 1)',
                                                           borderWidth: 1
                                                       }
                                                   ]
                                               },
                                               options: {
                                                   responsive: true, // Instruct chart js to respond nicely.
                                                   maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height
                                                   scales: {
                                                       yAxes: [{
                                                           ticks: {
                                                               beginAtZero: true
                                                           }
                                                       }]
                                                   }
                                               }
                                           });
                                       });
                               </script>
                           </div>
                           <hr>
                       </div>
                   </div>
               </div>
           </div>


           <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->