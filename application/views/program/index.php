       <!-- Begin Page Content -->


       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-2 text-gray-800">Program APFTL</h1>
           <form>
               <div class="col-md-8">
                   <div class="form-row">
                       <div class="form-group col-md-4">
                           <label for="inputCategory">Category</label>
                           <select id="inputState" class="form-control">
                               <option selected>Choose...</option>
                               <option>...</option>
                           </select>
                       </div>
                       <div class="form-group col-md-4">
                           <label for="inputState">Partner</label>
                           <select id="inputState" class="form-control">
                               <option selected>Choose...</option>
                               <option>...</option>
                           </select>
                       </div>
                   </div>
                   <div class="form-group">
                       <label for="inputAddress">Activity</label>
                       <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                   </div>
                   <div class="form-group">
                       <label for="inputAddress2">Description</label>
                       <textarea name="message" required class="form-control" id="ID_message" rows="7" placeholder="Entrez votre message ici"><?= set_value('message'); ?></textarea>
                   </div>
                   <div class="form-group">
                       <label for=" inputAddress2">Objective</label>
                       <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                   </div>
                   <div class="form-row">
                       <div class="form-group col-md-4">
                           <label for="inputAddress2">Date</label>
                           <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                       </div>
                       <div class="form-group col-md-4">
                           <label for="inputState">Distric</label>
                           <select id="inputState" class="form-control">
                               <option selected>Choose...</option>
                               <option>...</option>
                           </select>
                       </div>
                   </div>
                   <label for="inputAddress2">Participant</label>
                   <div class="form-row">
                       <div class="form-group col-md-2">

                           <input type="text" class="form-control" id="inputAddress2" placeholder="Male">
                       </div>
                       <div class="form-group col-md-2">
                           <input type="text" class="form-control" id="inputAddress2" placeholder="Female">
                       </div>
                       <div class="form-group col-md-2">
                           <input type="text" class="form-control" id="inputAddress2" placeholder="Total">
                       </div>
                   </div>

                   <button type="submit" class="btn btn-primary">Submit</button>
               </div>
           </form>

       </div>
       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->