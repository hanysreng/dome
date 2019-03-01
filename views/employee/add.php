
   <div class="container mt-4">
     <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
      <div class="card">
      <div class="card-body">
        <form action="index.php?action=get_form_data" method="POST">

        <div class="form-group">
              <button class="btn btn-primary" name="back">Back</button>
           </div>
           <div class="form-group">
            <input type="text" name="firstname" placeholder="First Name" class="form-control">
           </div>
           <div class="form-group">
            <input type="text" name="lastname" placeholder="Last Name" class="form-control">
           </div>
           <div class="form-group">
            <input type="age" name="age" placeholder="Age" class="form-control">
           </div>
           <div class="form-group">
            <input type="age" name="salary" placeholder="Salary" class="form-control">
           </div>
           <div class="form-group">
              <button class="btn btn-info" name="save" type="submit">Save</button>
           </div>
        </form>
      </div>
     </div>
      </div>
      <div class="col-2"></div>
     </div>
   </div>