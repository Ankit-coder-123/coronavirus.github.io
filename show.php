<!DOCTYPE html>
<html>
<hecd>
<title></title>
<?php  include 'link/links.php'; ?>
<?php  include 'css/style.php'; ?>
<?php
   
   $con=mysqli_connect("localhost", "root", "" );
     mysqli_select_db($con,"coronadb");
     $sql="select * from  coronacase1";
     $result=mysqli_query($con , $sql);


?>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">symp</th>
      <th scope="col">massage</th>
    </tr>
  </thead>
  <tbody>
  <?php
   while($show= mysqli_fetch_array($result)){

   ?>
  
    <tr>
      <td >
      <?php
      echo $show["id"];
      ?>
      </td>

      <td >
      <?php
      echo $show["username"];
      ?>
      </td>

      <td >
      <?php
      echo $show["email"];
      ?>
      </td>

      <td >
      <?php
      echo $show["mobile"];
      ?>
      </td>

      <td >
      <?php
      echo $show["symp"];
      ?>
      </td>

      <td >
      <?php
      echo $show["massage"];
      ?>
      </td>
    </tr>
    
    <?php
   }      

   mysqli_close($con);
    ?>
   
  </tbody>
</table>

</body>
