<!DOCTYPE html>
<html>
<body>

<?php
//dont hack my database please :D
 $link = mysqli_connect("localhost", "root", "toor", "Ryans_Dummybase");

 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }

 $sql = "SELECT * FROM Windows_Hosts";
 if($result = mysqli_query($link, $sql)){
     if(mysqli_num_rows($result) > 0){
         echo "<table>";
             echo "<tr>";
                 echo "<th>ID</th>";
                 echo "<th>Hostname</th>";
                 echo "<th>IP</th>";
             echo "</tr>";
         while($row = mysqli_fetch_array($result)){
             echo "<tr>";
                 echo "<td>" . $row['ID'] . "</td>";
                 echo "<td>" . $row['Hostname'] . "</td>";
                 echo "<td>" . $row['IP'] . "</td>";
             echo "</tr>";
         }
         echo "</table>";

         mysqli_free_result($result);
     } else{
         echo "No records matching your query were found.";
     }
 } else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 }
 mysqli_close($link);

?>


</body>
</html>
