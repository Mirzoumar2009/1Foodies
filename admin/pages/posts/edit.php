<?php
//if page=4&id=2
if (isset($_GET["page"]) && !empty(trim($_GET["page"])) &&
isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    $id = $_GET["id"];
    $sql  = "Select * from posts where id=$id";
    
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
                <h3 class="card-title">Edit Posts</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="?page=55"  method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title"  value="<?=$row['title'];?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Text</label>
                    <input type="text" name="text"  value="<?=$row['text'];?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Created_by</label>
                    <input type="text" value="<?=$row['created_by'];?>" name="created_by" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Image</label>
                   <input type="file" name="file" >
                  </div>

                  <div class="form-group">
                  <label>Created_at</label>
                  <input type="date" value="<?=$row['created_at'];?>" name="created_at" class="form-control">
                  </div>


                  
                </div>
                <input type="hidden" name="id" value="<?=$id;?>">
                 
       
                  
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