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
                                   var candidate_total = [];
                                   var candidate_femaletotal = [];
                                   var candidate_maletotal = [];
                                   $.post("<?= base_url('election_candidate/candidatetotal') ?>",
                                       function(candidatetotal) {
                                           var obj = JSON.parse(candidatetotal);
                                           $.each(obj, function(test, item) {
                                               candidate_total.push(item.total);
                                               candidate_femaletotal.push(item.femaletotal);
                                               candidate_maletotal.push(item.maletotal);
                                           });
                                           var total = new Chart(ctx1, {
                                               type: 'bar',
                                               data: {
                                                   labels: candidate_total,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: candidate_femaletotal,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: candidate_maletotal,
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
                                   var candidate_femaleall = [];
                                   var candidate_maleall = [];
                                   $.post("<?= base_url('election_candidate/candidateall') ?>",
                                       function(candidateall) {
                                           var obj = JSON.parse(candidateall);
                                           $.each(obj, function(test, item) {
                                               candidate_femaleall.push(item.femaleall);
                                               candidate_maleall.push(item.maleall);
                                           });
                                           var totalPie = new Chart(ctz1, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [candidate_femaleall, candidate_maleall], // Specify the data values array

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
                                   var candidate_dili = [];
                                   var candidate_femaledili = [];
                                   var candidate_maledili = [];
                                   $.post("<?= base_url('election_candidate/candidatedili') ?>",
                                       function(candidatedili) {
                                           var obj = JSON.parse(candidatedili);
                                           $.each(obj, function(test, item) {
                                               candidate_dili.push(item.dili);
                                               candidate_femaledili.push(item.femaledili);
                                               candidate_maledili.push(item.maledili);
                                           });
                                           var dili = new Chart(ctx2, {
                                               type: 'bar',
                                               data: {
                                                   labels: candidate_dili,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: candidate_femaledili,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: candidate_maledili,
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
                                   var candidate_femalediliall = [];
                                   var candidate_malediliall = [];
                                   $.post("<?= base_url('election_candidate/candidatediliall') ?>",
                                       function(candidateall) {
                                           var obj = JSON.parse(candidateall);
                                           $.each(obj, function(test, item) {
                                               candidate_femalediliall.push(item.femalediliall);
                                               candidate_malediliall.push(item.malediliall);
                                           });
                                           var diliPie = new Chart(ctz2, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [candidate_femalediliall, candidate_malediliall], // Specify the data values array

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
                                   var candidate_covalima = [];
                                   var candidate_femalecovalima = [];
                                   var candidate_malecovalima = [];
                                   $.post("<?= base_url('election_candidate/candidatecovalima') ?>",
                                       function(candidatecovalima) {
                                           var obj = JSON.parse(candidatecovalima);
                                           $.each(obj, function(test, item) {
                                               candidate_covalima.push(item.covalima);
                                               candidate_femalecovalima.push(item.femalecovalima);
                                               candidate_malecovalima.push(item.malecovalima);
                                           });
                                           var covalima = new Chart(ctx3, {
                                               type: 'bar',
                                               data: {
                                                   labels: candidate_covalima,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: candidate_femalecovalima,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: candidate_malecovalima,
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
                                   var candidate_femalecovalimaall = [];
                                   var candidate_malecovalimaall = [];
                                   $.post("<?= base_url('election_candidate/candidatecovalimaall') ?>",
                                       function(candidatecovalimaall) {
                                           var obj = JSON.parse(candidatecovalimaall);
                                           $.each(obj, function(test, item) {
                                               candidate_femalecovalimaall.push(item.femalecovalimaall);
                                               candidate_malecovalimaall.push(item.malecovalimaall);
                                           });
                                           var covalimaPie = new Chart(ctz3, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [candidate_femalecovalimaall, candidate_malecovalimaall], // Specify the data values array

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
                                   var candidate_baucau = [];
                                   var candidate_femalebaucau = [];
                                   var candidate_malebaucau = [];
                                   $.post("<?= base_url('election_candidate/candidatebaucau') ?>",
                                       function(candidatebaucau) {
                                           var obj = JSON.parse(candidatebaucau);
                                           $.each(obj, function(test, item) {
                                               candidate_baucau.push(item.baucau);
                                               candidate_femalebaucau.push(item.femalebaucau);
                                               candidate_malebaucau.push(item.malebaucau);
                                           });
                                           var baucau = new Chart(ctx4, {
                                               type: 'bar',
                                               data: {
                                                   labels: candidate_baucau,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: candidate_femalebaucau,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: candidate_malebaucau,
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
                                   var candidate_femalebaucauall = [];
                                   var candidate_malebaucauall = [];
                                   $.post("<?= base_url('election_candidate/candidatebaucauall') ?>",
                                       function(candidatebaucauall) {
                                           var obj = JSON.parse(candidatebaucauall);
                                           $.each(obj, function(test, item) {
                                               candidate_femalebaucauall.push(item.femalebaucauall);
                                               candidate_malebaucauall.push(item.malebaucauall);
                                           });
                                           var baucauPie = new Chart(ctz4, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [candidate_femalebaucauall, candidate_malebaucauall], // Specify the data values array

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
                                   var candidate_bobonaro = [];
                                   var candidate_femalebobonaro = [];
                                   var candidate_malebobonaro = [];
                                   $.post("<?= base_url('election_candidate/candidatebobonaro') ?>",
                                       function(candidatebobonaro) {
                                           var obj = JSON.parse(candidatebobonaro);
                                           $.each(obj, function(test, item) {
                                               candidate_bobonaro.push(item.bobonaro);
                                               candidate_femalebobonaro.push(item.femalebobonaro);
                                               candidate_malebobonaro.push(item.malebobonaro);
                                           });
                                           var bobonaro = new Chart(ctx5, {
                                               type: 'bar',
                                               data: {
                                                   labels: candidate_bobonaro,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: candidate_femalebobonaro,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: candidate_malebobonaro,
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
                                   var candidate_femalebobonaroall = [];
                                   var candidate_malebobonaroall = [];
                                   $.post("<?= base_url('election_candidate/candidatebobonaroall') ?>",
                                       function(candidatebobonaroall) {
                                           var obj = JSON.parse(candidatebobonaroall);
                                           $.each(obj, function(test, item) {
                                               candidate_femalebobonaroall.push(item.femalebobonaroall);
                                               candidate_malebobonaroall.push(item.malebobonaroall);
                                           });
                                           var bobonaroPie = new Chart(ctz5, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [candidate_femalebobonaroall, candidate_malebobonaroall], // Specify the data values array

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
                                   var candidate_liquica = [];
                                   var candidate_femaleliquica = [];
                                   var candidate_maleliquica = [];
                                   $.post("<?= base_url('election_candidate/candidateliquica') ?>",
                                       function(candidateliquica) {
                                           var obj = JSON.parse(candidateliquica);
                                           $.each(obj, function(test, item) {
                                               candidate_liquica.push(item.liquica);
                                               candidate_femaleliquica.push(item.femaleliquica);
                                               candidate_maleliquica.push(item.maleliquica);
                                           });
                                           var liquica = new Chart(ctx6, {
                                               type: 'bar',
                                               data: {
                                                   labels: candidate_liquica,
                                                   datasets: [{
                                                           label: 'Female',
                                                           data: candidate_femaleliquica,
                                                           backgroundColor: 'rgba(6, 166, 10, 0.2)',
                                                           borderColor: 'rgba(6, 166, 10, 1)',
                                                           borderWidth: 1
                                                       },
                                                       {
                                                           label: 'Male',
                                                           data: candidate_maleliquica,
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
                                   var candidate_femaleliquicaall = [];
                                   var candidate_maleliquicaall = [];
                                   $.post("<?= base_url('election_candidate/candidateliquicaall') ?>",
                                       function(candidateliquicaall) {
                                           var obj = JSON.parse(candidateliquicaall);
                                           $.each(obj, function(test, item) {
                                               candidate_femaleliquicaall.push(item.femaleliquicaall);
                                               candidate_maleliquicaall.push(item.maleliquicaall);
                                           });
                                           var liquicaPie = new Chart(ctz6, {
                                               type: 'pie',
                                               data: {
                                                   labels: ["Female", "Male"],
                                                   datasets: [{
                                                       data: [candidate_femaleliquicaall, candidate_maleliquicaall], // Specify the data values array

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