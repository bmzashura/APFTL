       <!-- Begin Page Content -->


       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Election PFN</h1>

           <!-- Content Row Total -->
           <div class="row">

               <div class="col-xl-8 col-lg-7">

                   <!-- Bar Chart Total -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Total</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                               <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
                               <canvas id="total"></canvas>
                               <script>
                                   var ctx1 = document.getElementById('total').getContext('2d');
                                   var selected_total = [];
                                   var selected_femaletotal = [];
                                   var selected_maletotal = [];
                                   $.post("<?= base_url('election_selected/selectedtotal') ?>",
                                       function(selectedtotal) {
                                           var obj = JSON.parse(selectedtotal);
                                           $.each(obj, function(test, item) {
                                               selected_total.push(item.total);
                                               selected_femaletotal.push(item.femaletotal);
                                               selected_maletotal.push(item.maletotal);
                                           });
                                           var total = new Chart(ctx1, {
                                               type: 'bar',
                                               data: {
                                                   labels: selected_total,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: selected_femaletotal,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: selected_maletotal,
                                                           backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                           borderColor: 'rgba(255, 99, 132, 1)',
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

               <!-- Donut Chart Total -->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">example</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="totalPie"></canvas>
                               <script>
                                   var ctz1 = document.getElementById('totalPie').getContext('2d');
                                   var selected_femaleall = [];
                                   var selected_maleall = [];
                                   $.post("<?= base_url('election_selected/selectedall') ?>",
                                       function(selectedall) {
                                           var obj = JSON.parse(selectedall);
                                           $.each(obj, function(test, item) {
                                               selected_femaleall.push(item.femaleall);
                                               selected_maleall.push(item.maleall);
                                           });
                                           var totalPie = new Chart(ctz1, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [selected_femaleall, selected_maleall], // Specify the data values array

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
                                       });
                               </script>
                           </div>
                           <hr>
                           Styling for the bar chart can be found in the <code>/js/demo/chart-bar-demo.js</code> file.
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
                                   var ctx2 = document.getElementById('dili').getContext('2d');
                                   var selected_dili = [];
                                   var selected_femaledili = [];
                                   var selected_maledili = [];
                                   $.post("<?= base_url('election_selected/selecteddili') ?>",
                                       function(selecteddili) {
                                           var obj = JSON.parse(selecteddili);
                                           $.each(obj, function(test, item) {
                                               selected_dili.push(item.dili);
                                               selected_femaledili.push(item.femaledili);
                                               selected_maledili.push(item.maledili);
                                           });
                                           var dili = new Chart(ctx2, {
                                               type: 'bar',
                                               data: {
                                                   labels: selected_dili,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: selected_femaledili,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: selected_maledili,
                                                           backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                           borderColor: 'rgba(255, 99, 132, 1)',
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
                                   var ctz2 = document.getElementById('diliPie').getContext('2d');
                                   var selected_femalediliall = [];
                                   var selected_malediliall = [];
                                   $.post("<?= base_url('election_selected/selecteddiliall') ?>",
                                       function(selectedall) {
                                           var obj = JSON.parse(selectedall);
                                           $.each(obj, function(test, item) {
                                               selected_femalediliall.push(item.femalediliall);
                                               selected_malediliall.push(item.malediliall);
                                           });
                                           var diliPie = new Chart(ctz2, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [selected_femalediliall, selected_malediliall], // Specify the data values array

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
                                   var ctx3 = document.getElementById('covalima').getContext('2d');
                                   var selected_covalima = [];
                                   var selected_femalecovalima = [];
                                   var selected_malecovalima = [];
                                   $.post("<?= base_url('election_selected/selectedcovalima') ?>",
                                       function(selectedcovalima) {
                                           var obj = JSON.parse(selectedcovalima);
                                           $.each(obj, function(test, item) {
                                               selected_covalima.push(item.covalima);
                                               selected_femalecovalima.push(item.femalecovalima);
                                               selected_malecovalima.push(item.malecovalima);
                                           });
                                           var covalima = new Chart(ctx3, {
                                               type: 'bar',
                                               data: {
                                                   labels: selected_covalima,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: selected_femalecovalima,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: selected_malecovalima,
                                                           backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                           borderColor: 'rgba(255, 99, 132, 1)',
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
                                   var ctz3 = document.getElementById('covalimaPie').getContext('2d');
                                   var selected_femalecovalimaall = [];
                                   var selected_malecovalimaall = [];
                                   $.post("<?= base_url('election_selected/selectedcovalimaall') ?>",
                                       function(selectedcovalimaall) {
                                           var obj = JSON.parse(selectedcovalimaall);
                                           $.each(obj, function(test, item) {
                                               selected_femalecovalimaall.push(item.femalecovalimaall);
                                               selected_malecovalimaall.push(item.malecovalimaall);
                                           });
                                           var covalimaPie = new Chart(ctz3, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [selected_femalecovalimaall, selected_malecovalimaall], // Specify the data values array

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
                                   var ctx4 = document.getElementById('baucau').getContext('2d');
                                   var selected_baucau = [];
                                   var selected_femalebaucau = [];
                                   var selected_malebaucau = [];
                                   $.post("<?= base_url('election_selected/selectedbaucau') ?>",
                                       function(selectedbaucau) {
                                           var obj = JSON.parse(selectedbaucau);
                                           $.each(obj, function(test, item) {
                                               selected_baucau.push(item.baucau);
                                               selected_femalebaucau.push(item.femalebaucau);
                                               selected_malebaucau.push(item.malebaucau);
                                           });
                                           var baucau = new Chart(ctx4, {
                                               type: 'bar',
                                               data: {
                                                   labels: selected_baucau,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: selected_femalebaucau,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: selected_malebaucau,
                                                           backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                           borderColor: 'rgba(255, 99, 132, 1)',
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
                                   var ctz4 = document.getElementById('baucauPie').getContext('2d');
                                   var selected_femalebaucauall = [];
                                   var selected_malebaucauall = [];
                                   $.post("<?= base_url('election_selected/selectedbaucauall') ?>",
                                       function(selectedbaucauall) {
                                           var obj = JSON.parse(selectedbaucauall);
                                           $.each(obj, function(test, item) {
                                               selected_femalebaucauall.push(item.femalebaucauall);
                                               selected_malebaucauall.push(item.malebaucauall);
                                           });
                                           var baucauPie = new Chart(ctz4, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [selected_femalebaucauall, selected_malebaucauall], // Specify the data values array

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
                   <!-- Bar Chart Baucau -->
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
                                   var ctx5 = document.getElementById('bobonaro').getContext('2d');
                                   var selected_bobonaro = [];
                                   var selected_femalebobonaro = [];
                                   var selected_malebobonaro = [];
                                   $.post("<?= base_url('election_selected/selectedbobonaro') ?>",
                                       function(selectedbobonaro) {
                                           var obj = JSON.parse(selectedbobonaro);
                                           $.each(obj, function(test, item) {
                                               selected_bobonaro.push(item.bobonaro);
                                               selected_femalebobonaro.push(item.femalebobonaro);
                                               selected_malebobonaro.push(item.malebobonaro);
                                           });
                                           var bobonaro = new Chart(ctx5, {
                                               type: 'bar',
                                               data: {
                                                   labels: selected_bobonaro,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: selected_femalebobonaro,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: selected_malebobonaro,
                                                           backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                           borderColor: 'rgba(255, 99, 132, 1)',
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
                                   var ctz5 = document.getElementById('bobonaroPie').getContext('2d');
                                   var selected_femalebobonaroall = [];
                                   var selected_malebobonaroall = [];
                                   $.post("<?= base_url('election_selected/selectedbobonaroall') ?>",
                                       function(selectedbobonaroall) {
                                           var obj = JSON.parse(selectedbobonaroall);
                                           $.each(obj, function(test, item) {
                                               selected_femalebobonaroall.push(item.femalebobonaroall);
                                               selected_malebobonaroall.push(item.malebobonaroall);
                                           });
                                           var bobonaroPie = new Chart(ctz5, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [selected_femalebobonaroall, selected_malebobonaroall], // Specify the data values array

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
                                   var ctx6 = document.getElementById('liquica').getContext('2d');
                                   var selected_liquica = [];
                                   var selected_femaleliquica = [];
                                   var selected_maleliquica = [];
                                   $.post("<?= base_url('election_selected/selectedliquica') ?>",
                                       function(selectedliquica) {
                                           var obj = JSON.parse(selectedliquica);
                                           $.each(obj, function(test, item) {
                                               selected_liquica.push(item.liquica);
                                               selected_femaleliquica.push(item.femaleliquica);
                                               selected_maleliquica.push(item.maleliquica);
                                           });
                                           var liquica = new Chart(ctx6, {
                                               type: 'bar',
                                               data: {
                                                   labels: selected_liquica,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: selected_femaleliquica,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: selected_maleliquica,
                                                           backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                           borderColor: 'rgba(255, 99, 132, 1)',
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
               <!-- Donut Chart Liquiçá -->
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
                                   var ctz6 = document.getElementById('liquicaPie').getContext('2d');
                                   var selected_femaleliquicaall = [];
                                   var selected_maleliquicaall = [];
                                   $.post("<?= base_url('election_selected/selectedliquicaall') ?>",
                                       function(selectedliquicaall) {
                                           var obj = JSON.parse(selectedliquicaall);
                                           $.each(obj, function(test, item) {
                                               selected_femaleliquicaall.push(item.femaleliquicaall);
                                               selected_maleliquicaall.push(item.maleliquicaall);
                                           });
                                           var liquicaPie = new Chart(ctz6, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [selected_femaleliquicaall, selected_maleliquicaall], // Specify the data values array

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