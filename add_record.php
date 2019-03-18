<!DOCTYPE html>
<html>
<body>

  <?php
  $link = mysqli_connect("localhost", "root", "toor", "Ryans_Dummybase");

  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  // attempt insert query execution
  $sql = "INSERT INTO Windows_Hosts (ID, Hostname, IP, Activated) VALUES ('89', 'NEWHOST', '192.168.1.2', 'no')";
  if(mysqli_query($link, $sql)){
      echo "Records added successfully.";
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
  // Close connection
  mysqli_close($link);
  ?>


</body>
</html>
