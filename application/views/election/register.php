       <!-- Begin Page Content -->


       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Registrasaun  PFN</h1>

           <a href="#" id="registerPdf" class="btn btn-primary mb-2">Download PDF</a>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>
           <script>
               //add event listener to button
               document.getElementById('registerPdf').addEventListener("click", downloadPDF);

               //donwload pdf from original canvas
               function downloadPDF() {
                   var total = document.querySelector('#total');
                   var totalpie = document.querySelector('#totalPie');
                   var aileu = document.querySelector('#aileu');
                   var aileupie = document.querySelector('#aileuPie');
                   var ainaro = document.querySelector('#ainaro');
                   var ainaropie = document.querySelector('#ainaroPie');
                   var baucau = document.querySelector('#baucau');
                   var baucaupie = document.querySelector('#baucauPie');
                   var bobonaro = document.querySelector('#bobonaro');
                   var bobonaropie = document.querySelector('#bobonaroPie');
                   var covalima = document.querySelector('#covalima');
                   var covalimapie = document.querySelector('#covalimaPie');
                   var dili = document.querySelector('#dili');
                   var dilipie = document.querySelector('#diliPie');
                   var ermera = document.querySelector('#ermera');
                   var ermerapie = document.querySelector('#ermeraPie');
                   var lautem = document.querySelector('#lautem');
                   var lautempie = document.querySelector('#lautemPie');
                   var liquica = document.querySelector('#liquica');
                   var liquicapie = document.querySelector('#liquicaPie');
                   var manufahi = document.querySelector('#manufahi');
                   var manufahipie = document.querySelector('#manufahiPie');
                   var manatuto = document.querySelector('#manatuto');
                   var manatutopie = document.querySelector('#manatutoPie');
                   var raeoa = document.querySelector('#raeoa');
                   var raeoapie = document.querySelector('#raeoaPie');
                   var viqueque = document.querySelector('#viqueque');
                   var viquequepie = document.querySelector('#viquequePie');

                   var totalImg = total.toDataURL("image/png", 1.0);
                   var totalpieImg = totalpie.toDataURL("image/png", 1.0);
                   var aileuImg = aileu.toDataURL("image/png", 1.0);
                   var aileupieImg = aileupie.toDataURL("image/png", 1.0);
                   var ainaroImg = ainaro.toDataURL("image/png", 1.0);
                   var ainaropieImg = ainaropie.toDataURL("image/png", 1.0);
                   var baucauImg = baucau.toDataURL("image/png", 1.0);
                   var baucaupieImg = baucaupie.toDataURL("image/png", 1.0);
                   var bobonaroImg = bobonaro.toDataURL("image/png", 1.0);
                   var bobonaropieImg = bobonaropie.toDataURL("image/png", 1.0);
                   var covalimaImg = covalima.toDataURL("image/png", 1.0);
                   var covalimapieImg = covalimapie.toDataURL("image/png", 1.0);
                   var diliImg = dili.toDataURL("image/png", 1.0);
                   var dilipieImg = dilipie.toDataURL("image/png", 1.0);
                   var ermeraImg = ermera.toDataURL("image/png", 1.0);
                   var ermerapieImg = ermerapie.toDataURL("image/png", 1.0);
                   var lautemImg = lautem.toDataURL("image/png", 1.0);
                   var lautempieImg = lautempie.toDataURL("image/png", 1.0);
                   var liquicaImg = liquica.toDataURL("image/png", 1.0);
                   var liquicapieImg = liquicapie.toDataURL("image/png", 1.0);
                   var manufahiImg = manufahi.toDataURL("image/png", 1.0);
                   var manufahipieImg = manufahipie.toDataURL("image/png", 1.0);
                   var manatutoImg = manatuto.toDataURL("image/png", 1.0);
                   var manatutopieImg = manatutopie.toDataURL("image/png", 1.0);
                   var raeoaImg = raeoa.toDataURL("image/png", 1.0);
                   var raeoapieImg = raeoapie.toDataURL("image/png", 1.0);
                   var viquequeImg = viqueque.toDataURL("image/png", 1.0);
                   var viquequepieImg = viquequepie.toDataURL("image/png", 1.0);

                   //creates PDF from img
                   var doc = new jsPDF('landscape');
                   doc.setFontType('bold');
                   doc.setFontSize(20);
                   doc.text(10, 10, "Aplikante Elisaun PFN 2019");
                   doc.setFontSize(14);
                   doc.text(10, 25, "Total");
                   doc.line(10, 27, 250, 27);
                   doc.addImage(totalImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(totalpieImg, 'PNG', 170, 30, 75, 65);
                   doc.setFontSize(14);
                   doc.text(10, 115, "Aileu");
                   doc.line(10, 117, 250, 117);
                   doc.addImage(aileuImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(aileupieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.setFontSize(14);
                   doc.text(10, 25, "Ainaro");
                   doc.line(10, 27, 250, 27);
                   doc.addImage(ainaroImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(ainaropieImg, 'PNG', 170, 30, 75, 65);
                   doc.setFontSize(14);
                   doc.text(10, 115, "Baucau");
                   doc.line(10, 117, 250, 117);
                   doc.addImage(baucauImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(baucaupieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.setFontSize(14);
                   doc.text(10, 25, "Bobonaro");
                   doc.line(10, 27, 250, 27);
                   doc.addImage(bobonaroImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(bobonaropieImg, 'PNG', 170, 30, 75, 65);
                   doc.setFontSize(14);
                   doc.text(10, 115, "Covalima");
                   doc.line(10, 117, 250, 117);
                   doc.addImage(covalimaImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(covalimapieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.setFontSize(14);
                   doc.text(10, 25, "Dili");
                   doc.line(10, 27, 250, 27);
                   doc.addImage(diliImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(dilipieImg, 'PNG', 170, 30, 75, 65);
                   doc.setFontSize(14);
                   doc.text(10, 115, "Ermera");
                   doc.line(10, 117, 250, 117);
                   doc.addImage(ermeraImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(ermerapieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.setFontSize(14);
                   doc.text(10, 25, "Lautem");
                   doc.line(10, 27, 250, 27);
                   doc.addImage(lautemImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(lautempieImg, 'PNG', 170, 30, 75, 65);
                   doc.setFontSize(14);
                   doc.text(10, 115, "Liquica");
                   doc.line(10, 117, 250, 117);
                   doc.addImage(liquicaImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(liquicapieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.setFontSize(14);
                   doc.text(10, 25, "Manufahi");
                   doc.line(10, 27, 250, 27);
                   doc.addImage(manufahiImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(manufahipieImg, 'PNG', 170, 30, 75, 65);
                   doc.setFontSize(14);
                   doc.text(10, 115, "Manatuto");
                   doc.line(10, 117, 250, 117);
                   doc.addImage(manatutoImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(manatutopieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.setFontSize(14);
                   doc.text(10, 25, "Raeoa - Oecussi");
                   doc.line(10, 27, 250, 27);
                   doc.addImage(raeoaImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(raeoapieImg, 'PNG', 170, 30, 75, 65);
                   doc.setFontSize(14);
                   doc.text(10, 115, "Viqueque");
                   doc.line(10, 117, 250, 117);
                   doc.addImage(viquequeImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(viquequepieImg, 'PNG', 170, 120, 75, 65);
                   doc.save('aplikante.pdf');
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
                               <canvas id="total"></canvas>
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
                               <canvas id="totalPie"></canvas>
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
                               <canvas id="aileu"></canvas>
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
                               <canvas id="aileuPie"></canvas>
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
                               <canvas id="ainaro"></canvas>
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
                               <canvas id="ainaroPie"></canvas>
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
                               <canvas id="baucau"></canvas>
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
                               <canvas id="baucauPie"></canvas>
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
                               <canvas id="bobonaro"></canvas>
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
                               <canvas id="bobonaroPie"></canvas>
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
                               <canvas id="covalima"></canvas>
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
                               <canvas id="covalimaPie"></canvas>
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
                               <canvas id="dili"></canvas>
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
                               <canvas id="diliPie"></canvas>
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
                               <canvas id="ermera"></canvas>
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
                               <canvas id="ermeraPie"></canvas>
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
                               <canvas id="lautem"></canvas>
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
                               <canvas id="lautemPie"></canvas>
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
                               <canvas id="liquica"></canvas>
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
                               <canvas id="liquicaPie"></canvas>
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
                               <canvas id="manufahi"></canvas>
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
                               <canvas id="manufahiPie"></canvas>
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
                               <canvas id="manatuto"></canvas>
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
                               <canvas id="manatutoPie"></canvas>
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
                               <canvas id="raeoa"></canvas>
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
                               <canvas id="raeoaPie"></canvas>
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
                               <canvas id="viqueque"></canvas>
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
                               <canvas id="viquequePie"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       </div>

       <!--Chart register-->
       <script src="<?= base_url('assets/') ?>js/election/register/total.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/aileu.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/ainaro.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/baucau.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/bobonaro.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/covalima.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/dili.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/ermera.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/lautem.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/liquica.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/manufahi.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/manatuto.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/raeoa.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/register/viqueque.js"></script>