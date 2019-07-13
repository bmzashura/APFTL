       <!-- Begin Page Content -->


       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Election PFN</h1>
           <div class="row">
               <div class="col-xl-3 col-md-6 mb-4">
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


               <div class="col-xl-3 col-md-6 mb-4">
                   <div class="card border-left-success shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Ne'ebe Selesaun Dokumentus</div>
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

               <div class="col-xl-3 col-md-6 mb-4">
                   <div class="card border-left-success shadow h-100 py-2">
                       <div class="card-body">
                           <div class="row no-gutters align-items-center">
                               <div class="col mr-2">
                                   <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Votu</div>
                                   <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $validu + $invalidu; ?></div>
                               </div>
                               <div class="col-auto">
                                   <i class="fas fa-award fa-2x text-gray-300"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>


               <!-- Content Row Dili -->
               <div class="row">

                   <div class="col-xl-8 col-lg-7">

                       <!-- Bar Chart Dili -->
                       <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">Chart Dili</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-bar">
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
                                   <canvas id="dili"></canvas>
                                   <script>
                                       var ctx1 = document.getElementById('dili').getContext('2d');
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
                                               var dili = new Chart(ctx1, {
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
                   </div>

                   <!-- Donut Chart Dili -->
                   <div class="col-xl-4 col-lg-5">
                       <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">example</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-pie pt-4">
                                   <canvas id="diliPie"></canvas>
                                   <script>
                                       var ctz1 = document.getElementById('diliPie').getContext('2d');
                                       var diliPie = new Chart(ctz1, {
                                           type: 'pie',
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

               <!-- Content Row Covalima -->
               <div class="row">

                   <div class="col-xl-8 col-lg-7">
                       <!-- Bar Chart Covalima -->
                       <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">Chart Covalima</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-bar">
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
                                   <canvas id="covalima"></canvas>
                                   <script>
                                       var ctx2 = document.getElementById('covalima').getContext('2d');
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
                                               var covalima = new Chart(ctx2, {
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
                   </div>
                   <!-- Donut Chart Covalima -->
                   <div class="col-xl-4 col-lg-5">
                       <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">example</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-pie pt-4">
                                   <canvas id="covalimaPie"></canvas>
                                   <script>
                                       var ctz2 = document.getElementById('covalimaPie').getContext('2d');
                                       var covalimaPie = new Chart(ctz2, {
                                           type: 'pie',
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

               <!-- Content Row Baucau -->
               <div class="row">

                   <div class="col-xl-8 col-lg-7">
                       <!-- Bar Chart Baucau -->
                       <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">Chart Baucau</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-bar">
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
                                   <canvas id="baucau"></canvas>
                                   <script>
                                       var ctx3 = document.getElementById('baucau').getContext('2d');
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
                                               var baucau = new Chart(ctx3, {
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
                   <!-- Donut Chart Baucau -->
                   <div class="col-xl-4 col-lg-5">
                       <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">example</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-pie pt-4">
                                   <canvas id="baucauPie"></canvas>
                                   <script>
                                       var ctz3 = document.getElementById('baucauPie').getContext('2d');
                                       var baucauPie = new Chart(ctz3, {
                                           type: 'pie',
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

               <!-- Content Row Bobonaro -->
               <div class="row">

                   <div class="col-xl-8 col-lg-7">
                       <!-- Bar Chart Bobonaro -->
                       <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">Chart Bobonaro</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-bar">
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
                                   <canvas id="bobonaro"></canvas>
                                   <script>
                                       var ctx4 = document.getElementById('bobonaro').getContext('2d');
                                       var data_bobonaro = [];
                                       var data_register4 = [];
                                       var data_selected4 = [];
                                       var data_candidate4 = [];
                                       $.post("<?= base_url('election/getbobonaro') ?>",
                                           function(databobonaro) {
                                               var obj = JSON.parse(databobonaro);
                                               $.each(obj, function(test, item) {
                                                   data_bobonaro.push(item.bobonaro);
                                                   data_register4.push(item.register4);
                                                   data_selected4.push(item.selected4);
                                                   data_candidate4.push(item.candidate4);
                                               });
                                               var bobonaro = new Chart(ctx4, {
                                                   type: 'bar',
                                                   data: {
                                                       labels: data_baucau,
                                                       datasets: [{
                                                               label: 'Register',
                                                               data: data_register4,
                                                               backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                               borderColor: 'rgba(6, 166, 10, 1)',
                                                               borderWidth: 1
                                                           },
                                                           {
                                                               label: 'Selected',
                                                               data: data_selected4,
                                                               backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                               borderColor: 'rgba(255, 99, 132, 1)',
                                                               borderWidth: 1
                                                           },
                                                           {
                                                               label: 'Candidate',
                                                               data: data_candidate4,
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
                   <!-- Donut Chart Bobonaro -->
                   <div class="col-xl-4 col-lg-5">
                       <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">example</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-pie pt-4">
                                   <canvas id="bobonaroPie"></canvas>
                                   <script>
                                       var ctz4 = document.getElementById('bobonaroPie').getContext('2d');
                                       var bobonaroPie = new Chart(ctz4, {
                                           type: 'pie',
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
               <!-- Content Row Liquiçá -->
               <div class="row">

                   <div class="col-xl-8 col-lg-7">
                       <!-- Bar Chart Liquiçá -->
                       <div class="card shadow mb-4">
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">Chart Liquiçá</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-bar">
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
                                   <canvas id="liquica"></canvas>
                                   <script>
                                       var ctx5 = document.getElementById('liquica').getContext('2d');
                                       var data_liquica = [];
                                       var data_register5 = [];
                                       var data_selected5 = [];
                                       var data_candidate5 = [];
                                       $.post("<?= base_url('election/getliquica') ?>",
                                           function(dataliquica) {
                                               var obj = JSON.parse(dataliquica);
                                               $.each(obj, function(test, item) {
                                                   data_liquica.push(item.liquica);
                                                   data_register5.push(item.register5);
                                                   data_selected5.push(item.selected5);
                                                   data_candidate5.push(item.candidate5);
                                               });
                                               var liquica = new Chart(ctx5, {
                                                   type: 'bar',
                                                   data: {
                                                       labels: data_liquica,
                                                       datasets: [{
                                                               label: 'Register',
                                                               data: data_register5,
                                                               backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                               borderColor: 'rgba(6, 166, 10, 1)',
                                                               borderWidth: 1
                                                           },
                                                           {
                                                               label: 'Selected',
                                                               data: data_selected5,
                                                               backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                               borderColor: 'rgba(255, 99, 132, 1)',
                                                               borderWidth: 1
                                                           },
                                                           {
                                                               label: 'Candidate',
                                                               data: data_candidate5,
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
                   <!-- Donut Chart Bobonaro -->
                   <div class="col-xl-4 col-lg-5">
                       <div class="card shadow mb-4">
                           <!-- Card Header - Dropdown -->
                           <div class="card-header py-3">
                               <h6 class="m-0 font-weight-bold text-primary">example</h6>
                           </div>
                           <div class="card-body">
                               <div class="chart-pie pt-4">
                                   <canvas id="liquicaPie"></canvas>
                                   <script>
                                       var ctz5 = document.getElementById('liquicaPie').getContext('2d');
                                       var bobonaroPie = new Chart(ctz5, {
                                           type: 'pie',
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
       </div>