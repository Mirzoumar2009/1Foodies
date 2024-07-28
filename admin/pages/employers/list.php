<table class="table">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Employers List</h3>
</div>

  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Date of Birth</th>
    <th>Position</th>
    <th>Gender</th>
    <th>Image</th>
    <th>Edit</th>
    <th>Drop</th>
  </tr>
  

<?php 
 $sql =  "Select * from employers;";
 $result = mysqli_query($conn, $sql);
 $i= 0;
 while ($row = mysqli_fetch_assoc($result)) {
 $i++;
 //print_r($row);

?>
  <tr>
    <td><?=$i;?></td>
    <td><?=$row['name'];?></td> 
    <td><?=$row['surname'];?></td> 
    <td><?=$row['birthday'];?></td> 
    <td><?=$row['position'];?></td> 
    
    <td><?=$row['gender'];?></td> 
    <td> <img width="100" height="100"  src="../assets/images/employer/<?=$row['image'];?>" alt=""> </td> 
    
    <td><a  class="btn btn-primary" href="?page=4&id=<?=$row['id']?>">Edit</a></td> 
    <td><a  class="btn btn-danger" href="?page=6&id=<?=$row['id']?>">Drop</a></td> 
    
  </tr>
    
<?php

}
?>
</table>