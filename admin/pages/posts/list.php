<table class="table">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Posts List</h3>
</div>

  <tr>
    <th>#</th>
    <th>Title</th>
    <th>Text</th>
    <th>Created_by</th>
    <th>Image</th>
    <th>Created_at</th>
    
    <th>Edit</th>
    <th>Drop</th>
  </tr>
  

<?php 
 $sql =  "Select * from posts;";
 $result = mysqli_query($conn, $sql);
 $i= 0;
 while ($row = mysqli_fetch_assoc($result)) {
 $i++; 

?>
  <tr>
    <td><?=$i;?></td>
    <td><?=$row['title'];?></td> 
    <td><?=$row['text'];?></td> 
    <td><?=$row['created_by'];?></td> 
    <td> <img width="100" height="100"  src="../assets/images/posts/<?=$row['image'];?>" alt=""> </td> 
    
    <td><?=$row['created_at'];?></td> 
    
    <td><a  class="btn btn-primary" href="?page=44&id=<?=$row['id']?>">Edit</a></td> 
    <td><a  class="btn btn-danger" href="?page=66&id=<?=$row['id']?>">Drop</a></td> 
    
  </tr>
    
<?php

}
?>
</table>