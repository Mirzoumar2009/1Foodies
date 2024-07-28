<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Posts</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="?page=22"  method="post" enctype="multipart/form-data">
                <div class="card-body">
                  
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" required name="title" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Text</label>
                    <input type="text" required name="text" class="form-control">
                  </div>
                  
                  <div class="form-group">
                    <label>Created By</label>
                    <input type="text"   name="created_by" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                   <input type="file" required name="file">
                  </div>
                  

                  <div class="form-group">
                    <label>Created_at</label>
                    <input type="date"  name="created_at" class="form-control">

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