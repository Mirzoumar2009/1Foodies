<?php
//if page=4&id=2
if (isset($_GET["page"]) && !empty(trim($_GET["page"])) &&
isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    $id = $_GET["id"];
    $sql  = "Select * from employers where id=$id";
    
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    
}
?>
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Employers</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="?page=5"  method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name"  value="<?=$row['name'];?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Surname</label>
                    <input type="text" name="surname"  value="<?=$row['surname'];?>" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" value="<?=$row['birthday'];?>" name="birthday" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" value="<?=$row['gender'];?>" id="" class="form-control">
                        <option value="Мужской">Male</option>
                        <option value="Женский">Female</option>
                    </select>
                  </div>

                  <div class="form-group">
                  <label>Position</label>
                  <input type="text" value="<?=$row['position'];?>" name="position" class="form-control">
                  </div>


                  <div class="form-group">
                    <label>Image</label>
                   <input type="file" name="file" id="">
                  </div>
                </div>
                <input type="hidden" name="id" value="<?=$id;?>">
                 

                <div class="card-footer">
                  <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </div>  
                </div>
                <!-- /.card-body -->

                
              </form>
            </div>
            <!-- /.card -->
 
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div>