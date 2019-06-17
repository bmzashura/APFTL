       <!-- Begin Page Content -->


       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Election APFTL</h1>
           <div class="row">


               <div class="col-xl-3 col-md-6 mb-4">
                   <div class="card border-left-primary shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Register</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $register; ?></div>
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
                                   <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Selected</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $selected; ?></div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-award fa-2x text-gray-300"></i>
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
                                   <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Candidatura</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $candidate; ?></div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-award fa-2x text-gray-300"></i>
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
                                   <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Vote</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $validu + $invalidu; ?></div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-award fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Content Row -->
               <div class="row">

                   <div class="col-xl-8 col-lg-7">

                   <!-- Bar Chart -->   
                   <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">Chart Dili</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-bar">
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
                                   <canvas id="myChartbar"></canvas>
                                   <script>
                                       var ctx = document.getElementById('myChartbar').getContext('2d');
                                       var data_dili = [];
                                       var data_register1 = [];
                                       var data_selected1 = [];
                                       var data_candidate1 = [];
                                       $.post("<?= base_url('election/getdili') ?>",
                                           function(datadili) {
                                               var obj = JSON.parse(datadili);
                                               $.each(obj, function(test, item) {
                                                   data_dili.push(item.dili);
                                                   data_register1.push(item.register1);
                                                   data_selected1.push(item.selected1);
                                                   data_candidate1.push(item.candidate1);
                                               });
                                               var myChartbar = new Chart(ctx, {
                                                   type: 'bar',
                                                   data: {
                                                       labels: data_dili,
                                                       datasets: [{
                                                               label: 'Register',
                                                               data: data_register1,
                                                               backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                               borderColor: 'rgba(6, 166, 10, 1)',
                                                               borderWidth: 1
                                                           },
                                                           {
                                                               label: 'Selected',
                                                               data: data_selected1,
                                                               backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                               borderColor: 'rgba(255, 99, 132, 1)',
                                                               borderWidth: 1
                                                           },
                                                           {
                                                               label: 'Candidate',
                                                               data: data_candidate1,
                                                               backgroundColor: 'rgba(7, 98, 150, 0.2)',
                                                               borderColor: 'rgba(7, 98, 150, 1)',
                                                               borderWidth: 1
                                                           }
                                                       ]
                                                   },
                                                   options: {
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
                               Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
                           </div>
                       </div>

                       <!-- Bar Chart -->
                       <div class="card shadow mb-4">
                       <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">Chart Dili</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-bar">
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
                                   <canvas id="myChartbar1"></canvas>
                                   <script>
                                       var ctx3 = document.getElementById('myChartbar1').getContext('2d');
                                       var data_covalima = [];
                                       var data_register2 = [];
                                       var data_selected2 = [];
                                       var data_candidate2 = [];
                                       $.post("<?= base_url('election/getcovalima') ?>",
                                           function(datacovalima) {
                                               var obj = JSON.parse(datacovalima);
                                               $.each(obj, function(test, item) {
                                                   data_covalima.push(item.covalima);
                                                   data_register2.push(item.register2);
                                                   data_selected2.push(item.selected2);
                                                   data_candidate2.push(item.candidate2);
                                               });
                                               var myChartbar1 = new Chart(ctx3, {
                                                   type: 'bar',
                                                   data: {
                                                       labels: data_covalima,
                                                       datasets: [{
                                                               label: 'Register',
                                                               data: data_register2,
                                                               backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                               borderColor: 'rgba(6, 166, 10, 1)',
                                                               borderWidth: 1
                                                           },
                                                           {
                                                               label: 'Selected',
                                                               data: data_selected2,
                                                               backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                               borderColor: 'rgba(255, 99, 132, 1)',
                                                               borderWidth: 1
                                                           },
                                                           {
                                                               label: 'Candidate',
                                                               data: data_candidate2,
                                                               backgroundColor: 'rgba(7, 98, 150, 0.2)',
                                                               borderColor: 'rgba(7, 98, 150, 1)',
                                                               borderWidth: 1
                                                           }
                                                       ]
                                                   },
                                                   options: {
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
                               Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
                           </div>
                       </div>

                        <!-- Bar Chart -->
                        <div class="card shadow mb-4">
                       <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">Chart Dili</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-bar">
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
                                   <canvas id="myChartbar3"></canvas>
                                   <script>
                                       var ctx5 = document.getElementById('myChartbar3').getContext('2d');
                                       var data_baucau = [];
                                       var data_register3 = [];
                                       var data_selected3 = [];
                                       var data_candidate3 = [];
                                       $.post("<?= base_url('election/getbaucau') ?>",
                                           function(databaucau) {
                                               var obj = JSON.parse(databaucau);
                                               $.each(obj, function(test, item) {
                                                   data_baucau.push(item.baucau);
                                                   data_register3.push(item.register3);
                                                   data_selected3.push(item.selected3);
                                                   data_candidate3.push(item.candidate3);
                                               });
                                               var myChartbar3 = new Chart(ctx5, {
                                                   type: 'bar',
                                                   data: {
                                                       labels: data_baucau,
                                                       datasets: [{
                                                               label: 'Register',
                                                               data: data_register3,
                                                               backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                               borderColor: 'rgba(6, 166, 10, 1)',
                                                               borderWidth: 1
                                                           },
                                                           {
                                                               label: 'Selected',
                                                               data: data_selected3,
                                                               backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                               borderColor: 'rgba(255, 99, 132, 1)',
                                                               borderWidth: 1
                                                           },
                                                           {
                                                               label: 'Candidate',
                                                               data: data_candidate3,
                                                               backgroundColor: 'rgba(7, 98, 150, 0.2)',
                                                               borderColor: 'rgba(7, 98, 150, 1)',
                                                               borderWidth: 1
                                                           }
                                                       ]
                                                   },
                                                   options: {
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
                               Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file.
                           </div>

                       </div>
                      
                   </div>

                   <!-- Donut Chart -->
                   <div class="col-xl-4 col-lg-5">
                       <div class="card shadow mb-5">
                           <!-- Card Header - Dropdown -->
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">example</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-pie">
                                   <canvas id="myChartdoughnut"></canvas>
                                   <script>
                                       var ctx2 = document.getElementById('myChartdoughnut').getContext('2d');
                                       var myChartdoughnut = new Chart(ctx2, {
                                           type: 'doughnut',
                                           data: {
                                               labels: ["Valid", "Unvalid"],
                                               datasets: [{
                                                   data: [500, 50], // Specify the data values array

                                                   borderColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color border 
                                                   backgroundColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color background (Points and Fill)
                                                   borderWidth: 1 // Specify bar border width
                                               }]
                                           },
                                           options: {
                                               responsive: true, // Instruct chart js to respond nicely.
                                               maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
                                           }
                                       });
                                   </script>
                               </div>
                               <hr>
                               Styling for the bar chart can be found in the <code>/js/demo/chart-bar-demo.js</code> file.
                           </div>
                       </div>
                   
                    <!-- Donut Chart -->
                   
                       <div class="card shadow mb-5">
                           <!-- Card Header - Dropdown -->
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">example</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-pie">
                                   <canvas id="myChartdoughnut1"></canvas>
                                   <script>
                                       var ctx4 = document.getElementById('myChartdoughnut1').getContext('2d');
                                       var myChartdoughnut1 = new Chart(ctx4, {
                                           type: 'doughnut',
                                           data: {
                                               labels: ["Valid", "Unvalid"],
                                               datasets: [{
                                                   data: [500, 50], // Specify the data values array

                                                   borderColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color border 
                                                   backgroundColor: ['#2196f38c', '#f443368c', '#3f51b570', '#00968896'], // Add custom color background (Points and Fill)
                                                   borderWidth: 1 // Specify bar border width
                                               }]
                                           },
                                           options: {
                                               responsive: true, // Instruct chart js to respond nicely.
                                               maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
                                           }
                                       });
                                   </script>
                               </div>
                               <hr>
                               Styling for the bar chart can be found in the <code>/js/demo/chart-bar-demo.js</code> file.
                           </div>
                       </div>
                   </div>
               </div>

           </div>
           <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->