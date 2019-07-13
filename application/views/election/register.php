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
                                   var register_total = [];
                                   var register_femaletotal = [];
                                   var register_maletotal = [];
                                   $.post("<?= base_url('election_register/registertotal') ?>",
                                       function(registertotal) {
                                           var obj = JSON.parse(registertotal);
                                           $.each(obj, function(test, item) {
                                               register_total.push(item.total);
                                               register_femaletotal.push(item.femaletotal);
                                               register_maletotal.push(item.maletotal);
                                           });
                                           var total = new Chart(ctx1, {
                                               type: 'bar',
                                               data: {
                                                   labels: register_total,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: register_femaletotal,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: register_maletotal,
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
                                   var register_femaleall = [];
                                   var register_maleall = [];
                                   $.post("<?= base_url('election_register/registerall') ?>",
                                       function(registerall) {
                                           var obj = JSON.parse(registerall);
                                           $.each(obj, function(test, item) {
                                               register_femaleall.push(item.femaleall);
                                               register_maleall.push(item.maleall);
                                           });
                                           var totalPie = new Chart(ctz1, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [register_femaleall, register_maleall], // Specify the data values array

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
                                   var register_dili = [];
                                   var register_femaledili = [];
                                   var register_maledili = [];
                                   $.post("<?= base_url('election_register/registerdili') ?>",
                                       function(registerdili) {
                                           var obj = JSON.parse(registerdili);
                                           $.each(obj, function(test, item) {
                                               register_dili.push(item.dili);
                                               register_femaledili.push(item.femaledili);
                                               register_maledili.push(item.maledili);
                                           });
                                           var dili = new Chart(ctx2, {
                                               type: 'bar',
                                               data: {
                                                   labels: register_dili,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: register_femaledili,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: register_maledili,
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
                                   var register_femalediliall = [];
                                   var register_malediliall = [];
                                   $.post("<?= base_url('election_register/registerdiliall') ?>",
                                       function(registerall) {
                                           var obj = JSON.parse(registerall);
                                           $.each(obj, function(test, item) {
                                               register_femalediliall.push(item.femalediliall);
                                               register_malediliall.push(item.malediliall);
                                           });
                                           var diliPie = new Chart(ctz2, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [register_femalediliall, register_malediliall], // Specify the data values array

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
                                   var register_covalima = [];
                                   var register_femalecovalima = [];
                                   var register_malecovalima = [];
                                   $.post("<?= base_url('election_register/registercovalima') ?>",
                                       function(registercovalima) {
                                           var obj = JSON.parse(registercovalima);
                                           $.each(obj, function(test, item) {
                                               register_covalima.push(item.covalima);
                                               register_femalecovalima.push(item.femalecovalima);
                                               register_malecovalima.push(item.malecovalima);
                                           });
                                           var covalima = new Chart(ctx3, {
                                               type: 'bar',
                                               data: {
                                                   labels: register_covalima,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: register_femalecovalima,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: register_malecovalima,
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
                                   var register_femalecovalimaall = [];
                                   var register_malecovalimaall = [];
                                   $.post("<?= base_url('election_register/registercovalimaall') ?>",
                                       function(registercovalimaall) {
                                           var obj = JSON.parse(registercovalimaall);
                                           $.each(obj, function(test, item) {
                                               register_femalecovalimaall.push(item.femalecovalimaall);
                                               register_malecovalimaall.push(item.malecovalimaall);
                                           });
                                           var covalimaPie = new Chart(ctz3, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [register_femalecovalimaall, register_malecovalimaall], // Specify the data values array

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
                                   var register_baucau = [];
                                   var register_femalebaucau = [];
                                   var register_malebaucau = [];
                                   $.post("<?= base_url('election_register/registerbaucau') ?>",
                                       function(registerbaucau) {
                                           var obj = JSON.parse(registerbaucau);
                                           $.each(obj, function(test, item) {
                                               register_baucau.push(item.baucau);
                                               register_femalebaucau.push(item.femalebaucau);
                                               register_malebaucau.push(item.malebaucau);
                                           });
                                           var baucau = new Chart(ctx4, {
                                               type: 'bar',
                                               data: {
                                                   labels: register_baucau,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: register_femalebaucau,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: register_malebaucau,
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
                                   var register_femalebaucauall = [];
                                   var register_malebaucauall = [];
                                   $.post("<?= base_url('election_register/registerbaucauall') ?>",
                                       function(registerbaucauall) {
                                           var obj = JSON.parse(registerbaucauall);
                                           $.each(obj, function(test, item) {
                                               register_femalebaucauall.push(item.femalebaucauall);
                                               register_malebaucauall.push(item.malebaucauall);
                                           });
                                           var baucauPie = new Chart(ctz4, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [register_femalebaucauall, register_malebaucauall], // Specify the data values array

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
                                   var register_bobonaro = [];
                                   var register_femalebobonaro = [];
                                   var register_malebobonaro = [];
                                   $.post("<?= base_url('election_register/registerbobonaro') ?>",
                                       function(registerbobonaro) {
                                           var obj = JSON.parse(registerbobonaro);
                                           $.each(obj, function(test, item) {
                                               register_bobonaro.push(item.bobonaro);
                                               register_femalebobonaro.push(item.femalebobonaro);
                                               register_malebobonaro.push(item.malebobonaro);
                                           });
                                           var bobonaro = new Chart(ctx5, {
                                               type: 'bar',
                                               data: {
                                                   labels: register_bobonaro,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: register_femalebobonaro,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: register_malebobonaro,
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
                                   var register_femalebobonaroall = [];
                                   var register_malebobonaroall = [];
                                   $.post("<?= base_url('election_register/registerbobonaroall') ?>",
                                       function(registerbobonaroall) {
                                           var obj = JSON.parse(registerbobonaroall);
                                           $.each(obj, function(test, item) {
                                               register_femalebobonaroall.push(item.femalebobonaroall);
                                               register_malebobonaroall.push(item.malebobonaroall);
                                           });
                                           var bobonaroPie = new Chart(ctz5, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [register_femalebobonaroall, register_malebobonaroall], // Specify the data values array

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
                                   var register_liquica = [];
                                   var register_femaleliquica = [];
                                   var register_maleliquica = [];
                                   $.post("<?= base_url('election_register/registerliquica') ?>",
                                       function(registerliquica) {
                                           var obj = JSON.parse(registerliquica);
                                           $.each(obj, function(test, item) {
                                               register_liquica.push(item.liquica);
                                               register_femaleliquica.push(item.femaleliquica);
                                               register_maleliquica.push(item.maleliquica);
                                           });
                                           var liquica = new Chart(ctx6, {
                                               type: 'bar',
                                               data: {
                                                   labels: register_liquica,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: register_femaleliquica,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: register_maleliquica,
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
                                   var register_femaleliquicaall = [];
                                   var register_maleliquicaall = [];
                                   $.post("<?= base_url('election_register/registerliquicaall') ?>",
                                       function(registerliquicaall) {
                                           var obj = JSON.parse(registerliquicaall);
                                           $.each(obj, function(test, item) {
                                               register_femaleliquicaall.push(item.femaleliquicaall);
                                               register_maleliquicaall.push(item.maleliquicaall);
                                           });
                                           var liquicaPie = new Chart(ctz6, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [register_femaleliquicaall, register_maleliquicaall], // Specify the data values array

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