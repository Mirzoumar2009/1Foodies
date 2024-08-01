<?php
echo "1";

?>


<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Employers</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="?page=2"  method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" required name="name" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Surname</label>
                    <input type="text" required name="surname" class="form-control">
                  </div>
                  
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date"   name="birthday" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                        <option value="Мужской">Male</option>
                        <option value="Женский">Female</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Position</label>
                    <input type="text" required name="position" class="form-control">

                  </div>

                  <div class="form-group">
                    <label>Image</label>
                   <input type="file" name="file">
                  </div>

       
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </div>
                
              </form>
            </div>
            <!-- /.card -->
 
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div>