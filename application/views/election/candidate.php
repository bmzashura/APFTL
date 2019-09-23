       <!-- Begin Page Content -->


       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Cadidatu/a PFN</h1>

           <a href="#" id="candidatedPdf" class="btn btn-primary mb-2">Download PDF</a>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script>
           <script>
               //add event listener to button
               document.getElementById('candidatePdf').addEventListener("click", downloadPDF);

               //donwload pdf from original canvas
               function downloadPDF() {
                   var total = document.querySelector('#totalcandidate');
                   var totalpie = document.querySelector('#totalcandidatePie');
                   var aileu = document.querySelector('#aileucandidate');
                   var aileupie = document.querySelector('#aileucandidatePie');
                   var ainaro = document.querySelector('#ainarocandidate');
                   var ainaropie = document.querySelector('#ainarocandidatePie');
                   var baucau = document.querySelector('#baucaucandidate');
                   var baucaupie = document.querySelector('#baucaucandidatePie');
                   var bobonaro = document.querySelector('#bobonarocandidate');
                   var bobonaropie = document.querySelector('#bobonarocandidatePie');
                   var covalima = document.querySelector('#covalimacandidate');
                   var covalimapie = document.querySelector('#covalimacandidatePie');
                   var dili = document.querySelector('#dilicandidate');
                   var dilipie = document.querySelector('#dilicandidatePie');
                   var ermera = document.querySelector('#ermeracandidate');
                   var ermerapie = document.querySelector('#ermeracandidatePie');
                   var lautem = document.querySelector('#lautemcandidate');
                   var lautempie = document.querySelector('#lautemcandidatePie');
                   var liquica = document.querySelector('#liquicacandidate');
                   var liquicapie = document.querySelector('#liquicacandidatePie');
                   var manufahi = document.querySelector('#manufahicandidate');
                   var manufahipie = document.querySelector('#manufahicandidatePie');
                   var manatuto = document.querySelector('#manatutocandidate');
                   var manatutopie = document.querySelector('#manatutocandidatePie');
                   var raeoa = document.querySelector('#raeoacandidate');
                   var raeoapie = document.querySelector('#raeoacandidatePie');
                   var viqueque = document.querySelector('#viquequecandidate');
                   var viquequepie = document.querySelector('#viquequecandidatePie');

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
                   doc.setFontSize(20);
                   doc.text(15, 15, "Cool Chart");
                   doc.addImage(totalImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(totalpieImg, 'PNG', 170, 30, 75, 65);
                   doc.addImage(aileuImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(aileupieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.addImage(ainaroImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(ainaropieImg, 'PNG', 170, 30, 75, 65);
                   doc.addImage(baucauImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(baucaupieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.addImage(bobonaroImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(bobonaropieImg, 'PNG', 170, 30, 75, 65);
                   doc.addImage(covalimaImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(covalimapieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.addImage(diliImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(dilipieImg, 'PNG', 170, 30, 75, 65);
                   doc.addImage(ermeraImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(ermerapieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.addImage(lautemImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(lautempieImg, 'PNG', 170, 30, 75, 65);
                   doc.addImage(liquicaImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(liquicapieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.addImage(manufahiImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(manufahipieImg, 'PNG', 170, 30, 75, 65);
                   doc.addImage(manatutoImg, 'PNG', 10, 120, 140, 75);
                   doc.addImage(manatutopieImg, 'PNG', 170, 120, 75, 65);
                   doc.addPage()
                   doc.addImage(raeoaImg, 'PNG', 10, 30, 140, 75);
                   doc.addImage(raeoapieImg, 'PNG', 170, 30, 75, 65);
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
                               <canvas id="totalcandidate"></canvas>
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
                               <canvas id="totalcandidatePie"></canvas>
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
                               <canvas id="aileucandidate"></canvas>
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
                               <canvas id="aileucandidatePie"></canvas>
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
                               <canvas id="ainarocandidate"></canvas>
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
                               <canvas id="ainarocandidatePie"></canvas>
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
                               <canvas id="baucaucandidate"></canvas>
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
                               <canvas id="baucaucandidatePie"></canvas>
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
                               <canvas id="bobonarocandidate"></canvas>
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
                               <canvas id="bobonarocandidatePie"></canvas>
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
                               <canvas id="covalimacandidate"></canvas>
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
                               <canvas id="covalimacandidatePie"></canvas>
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
                               <canvas id="dilicandidate"></canvas>
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
                               <canvas id="dilicandidatePie"></canvas>
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
                               <canvas id="ermeracandidate"></canvas>
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
                               <canvas id="ermeracandidatePie"></canvas>
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
                               <canvas id="lautemcandidate"></canvas>
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
                               <canvas id="lautemcandidatePie"></canvas>
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
                               <canvas id="liquicacandidate"></canvas>
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
                               <canvas id="liquicacandidatePie"></canvas>
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
                               <canvas id="manufahicandidate"></canvas>
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
                               <canvas id="manufahicandidatePie"></canvas>
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
                               <canvas id="manatutocandidate"></canvas>
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
                               <canvas id="manatutocandidatePie"></canvas>
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
                               <canvas id="raeoacandidate"></canvas>
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
                               <canvas id="raeoacandidatePie"></canvas>
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
                               <canvas id="viquequecandidate"></canvas>
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
                               <canvas id="viquequecandidatePie"></canvas>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       </div>

       <!--Chart candidate-->
       <script src="<?= base_url('assets/') ?>js/election/candidate/total.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/aileu.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/ainaro.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/baucau.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/bobonaro.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/covalima.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/dili.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/ermera.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/lautem.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/liquica.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/manufahi.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/manatuto.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/raeoa.js"></script>
       <script src="<?= base_url('assets/') ?>js/election/candidate/viqueque.js"></script>