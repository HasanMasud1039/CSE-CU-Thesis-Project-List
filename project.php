
<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
body{ 
background-color: rgb(231,224,224);
}
table {
  
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  font-family: arial;
  text-align: left;
  padding: 8px;
}
tr:first-child {
  background: #bb81fddc;
}
tr:nth-child(even) {
  background-color: snow;
}

div{
  background-color: rgb(175, 22,22);
  color: white;
  padding : 4px;
  font-size: 20px;
  
}
input{
  margin: 5px;
  padding: 10px;
  width: 290px;
}
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  margin-top: 10px;
  margin-left: 10px;
  padding: 5px;
  width: 50px;

}

img:hover {
  box-shadow: 0 1 2px 5px rgba(0, 140, 186, 0.5);
}
</style>

</head>
<body>
<div>
<a href="https://cu.ac.bd/">
<img src= "/phpMyAdmin/cuu.png" align= left>
</a>
<h1 align= center> CSE CU Thesis / Project List</h1>
</div>
  <br><br>  
<input id="myInput" type="text" placeholder="Search...">

<input type=button onClick="location.href='/phpMyAdmin/PRO/registration2/main.php'" value='BSc Thesis/Projects'> 
<input type=button onClick="location.href='/phpMyAdmin/PRO/registration2/register3.php'" value='Registration'>
<br><br>
<br>
<table id="myTable">
  <tr>
    <th >Serial</th>
    <th>ID</th>
    <th >Student Name</th>
    <th >Thesis / Project Title</th>
    <th>Supervisor</th>
    
  </tr>
  

  <?php $i=1; while($row1 = mysqli_fetch_array($result1)):;?>
            <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
                <td><?php echo $row1[4];?></td>
                
            </tr>
            <?php endwhile;?>






<?php
$conn = mysqli_connect("localhost", "root", "12345", "project");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT ID,Student_Name, Thesis_or_Project_Title, Supervisor, (FLOOR(ID/1000000)) Batch FROM project3 ORDER BY Batch DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$i=1;
while($row = $result->fetch_assoc()) {

  
  if($row["Supervisor"] == "OSI" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=4295'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "RM" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=4792'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "MSH" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=3348'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "MHS" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=4106'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "MKI" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=3905'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "MAA" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=3904'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "MSC" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=4203'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "KAZ" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=4297'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "NKC" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=4298'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "MRUF" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=4476'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "FJ" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=4634'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "IA" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=4635'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "RK" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=4790'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "FIA" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=4632'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "RPDN" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=5168'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "AHMSH" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=5293'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "AR" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=5292'>".$row["Supervisor"]."</a></td></tr>";

   else if($row['Supervisor'] == "SC" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=5295'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "NS" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=5294'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "MMI" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=5291' onmouseover = ''>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "ANC" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=5905'>".$row["Supervisor"]."</a></td></tr>";

  else if($row['Supervisor'] == "NMIC" )
  echo "<tr><td>".$i."</td><td>".$row["ID"]."</td><td>".$row["Student_Name"]."</td><td>".$row["Thesis_or_Project_Title"]."</td><td><a href = 'https://cu.ac.bd/public_profile/index.php?ein=5906'>".$row["Supervisor"]."</a></td></tr>>";

$i++;

}
echo "</table>";
}
 else { echo "0 results"; }
$conn->close();

$query = "SELECT * FROM 'project3'";

$result1 = mysqli_query($conn, $query);

$result2 = mysqli_query($conn, $query);

$dataRow = "";

while($row2 = mysqli_fetch_array($result2))
{
    $dataRow = $dataRow."<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td></tr>";
}

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['myInput'];

    $query = "SELECT * FROM 'project' WHERE CONCAT('ID', 'Student_Name', 'Thesis_or_Project_Name','Supervisor') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    echo $search_result;
}
 else {
    $query = "SELECT * FROM 'project3'";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    $conn = mysqli_connect("localhost", "root", "12345", "project");
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}


?>

</table>
</body>
</html>

