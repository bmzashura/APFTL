       <!-- Begin Page Content -->


       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Election PFN</h1>

           <a href="#" id="downloadPdf">Download Report Page as PDF</a>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>
           <script>
               //add event listener to button
               document.getElementById('downloadPdf').addEventListener("click", downloadPDF);

               //donwload pdf from original canvas
               function downloadPDF() {
                   var total = document.querySelector('#totalselected');
                   var totalpie = document.querySelector('#totalselectedPie');
                   var aileu = document.querySelector('#aileuselected');
                   var aileupie = document.querySelector('#aileuselectedPie');
                   var ainaro = document.querySelector('#ainaroselected');
                   var ainaropie = document.querySelector('#ainaroselectedPie');

                   var totalselectedImg = total.toDataURL("image/png", 1.0);
                   var totalselectedpieImg = totalpie.toDataURL("image/png", 1.0);
                   var aileuselectedImg = aileu.toDataURL("image/png", 1.0);
                   var aileuselectedpieImg = aileupie.toDataURL("image/png", 1.0);
                   var ainaroselectedImg = ainaro.toDataURL("image/png", 1.0);
                   var ainaroselectedpieImg = ainaropie.toDataURL("image/png", 1.0);

                   //creates PDF from img
                   var doc = new jsPDF('landscape');
                   doc.setFontSize(20);
                   doc.text(15, 15, "Cool Chart");
                   doc.addImage(totalselectedImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(totalselectedpieImg, 'PNG', 170, 30, 75, 65);
                   doc.addImage(aileuselectedImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(aileuselectedpieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.addImage(ainaroselectedImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(ainaroselectedpieImg, 'PNG', 170, 30, 75, 65);
                   doc.save('all.pdf');
               }
           </script>

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
                               <canvas id="totalselected"></canvas>
                           </div>
                       </div>
                   </div>
               </div>

               <!-- Donut Chart Total -->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Total</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="totalselectedPie"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Content Row Aileu -->
           <div class="row">

               <div class="col-xl-8 col-lg-7">
                   <!-- Bar Chart Aileu -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Aileu</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="aileuselected"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- Donut Chart Aileu -->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Aileu</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="aileuselectedPie"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Content Row Ainaro -->
           <div class="row">

               <div class="col-xl-8 col-lg-7">
                   <!-- Bar Chart Ainaro -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Ainaro</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="ainaroselected"></canvas>
                           </div>
                       </div>

                   </div>

               </div>
               <!-- Donut Chart ainaro -->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Ainaro</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="ainaroselectedPie"></canvas>
                           </div>
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
                               <canvas id="baucauselected"></canvas>
                           </div>
                       </div>

                   </div>

               </div>
               <!-- Donut Chart Baucau -->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Baucau</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="baucauselectedPie"></canvas>
                           </div>
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
                               <canvas id="bobonaroselected"></canvas>
                           </div>
                       </div>

                   </div>

               </div>
               <!-- Donut Chart Bobonaro -->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Bobonaro</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="bobonaroselectedPie"></canvas>
                           </div>
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
                               <canvas id="covalimaselected"></canvas>
                           </div>
                       </div>

                   </div>

               </div>
               <!-- Donut Chart Covalima-->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Covalima</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="covalimaselectedPie"></canvas>
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
                               <canvas id="diliselected"></canvas>
                           </div>
                       </div>

                   </div>

               </div>
               <!-- Donut Chart Dili-->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Dili</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="diliselectedPie"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Content Row Ermera -->
           <div class="row">

               <div class="col-xl-8 col-lg-7">
                   <!-- Bar Chart Ermera -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Ermera</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="ermeraselected"></canvas>
                           </div>
                       </div>

                   </div>

               </div>
               <!-- Donut Chart Ermera-->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Ermera</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="ermeraselectedPie"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Content Row Lautem -->
           <div class="row">

               <div class="col-xl-8 col-lg-7">
                   <!-- Bar Chart Lautem -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Lautem</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="lautemselected"></canvas>
                           </div>
                       </div>

                   </div>

               </div>
               <!-- Donut Chart Lautem-->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Dropdown -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Lautem</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="lautemselectedPie"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Content Row Liquica -->
           <div class="row">

               <div class="col-xl-8 col-lg-7">
                   <!-- Bar Chart Liquica -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Liquica</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="liquicaselected"></canvas>
                           </div>
                       </div>

                   </div>

               </div>
               <!-- Donut Chart Liquica-->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Liquica -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Liquica</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="liquicaselectedPie"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Content Row Manufahi -->
           <div class="row">

               <div class="col-xl-8 col-lg-7">
                   <!-- Bar Chart Manufahi -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Manufahi</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="manufahiselected"></canvas>
                           </div>
                       </div>

                   </div>

               </div>
               <!-- Donut Chart Manufahi-->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Manufahi -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Manufahi</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="manufahiselectedPie"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Content Row Manatuto -->
           <div class="row">

               <div class="col-xl-8 col-lg-7">
                   <!-- Bar Chart Manatuto -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Manatuto</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="manatutoselected"></canvas>
                           </div>
                       </div>

                   </div>

               </div>
               <!-- Donut Chart Manatuto-->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Manatuto -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Manatuto</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="manatutoselectedPie"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Content Row Raeoa -->
           <div class="row">

               <div class="col-xl-8 col-lg-7">
                   <!-- Bar Chart Raeoa -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Raeoa</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="raeoaselected"></canvas>
                           </div>
                       </div>

                   </div>

               </div>
               <!-- Donut Chart Raeoa-->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Raeoa -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Raeoa</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="raeoaselectedPie"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- Content Row Viqueque -->
           <div class="row">

               <div class="col-xl-8 col-lg-7">
                   <!-- Bar Chart Viqueque -->
                   <div class="card shadow mb-4">
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Chart Viqueque</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-bar">
                               <canvas id="viquequeselected"></canvas>
                           </div>
                       </div>

                   </div>

               </div>
               <!-- Donut Chart Viqueque-->
               <div class="col-xl-4 col-lg-5">
                   <div class="card shadow mb-4">
                       <!-- Card Header - Viqueque -->
                       <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Aplikante Viqueque</h6>
                       </div>
                       <div class="card-body">
                           <div class="chart-pie pt-4">
                               <canvas id="viquequeselectedPie"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       </div>

       <!--Chart select-->
       <script src="<?= base_url('assets/') ?>js/election/select/total.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/aileu.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/ainaro.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/baucau.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/bobonaro.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/covalima.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/dili.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/ermera.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/lautem.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/liquica.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/manufahi.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/manatuto.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/raeoa.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/select/viqueque.js"></script>