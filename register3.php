<?php include('ser3.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration for MS Students</title>
  <link rel="stylesheet" type="text/css" href="style2.css">

  <style>
.top{
  background-color: rgb(175, 22,22);
  color: white;
  padding-top : 10px;
  padding-bottom : 50px;
  font-size: 20px;
  margin: 15px;
  width: 100%;
}
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  margin-top: 5px;
  margin-left: 10px;
  padding: 5px;
  width: 50px;

}

img:hover {
  box-shadow: 0 1 2px 5px rgba(0, 140, 186, 0.5);
}
.header {
    width: 30%;
    margin: 50px auto 0px;
    color: rgb(97, 5, 5);
    background: rgb(82, 241, 247);
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
  }
</style>
</head>
<body>
<div>
<div class="top">
<a href="https://cu.ac.bd/">
<img src= "/phpMyAdmin/cuu.png" align= left>
</a>
<h1 align= center> CSE CU Thesis / Project List</h1>
</div>
<br>
  <div class="header">
      <h2>Registration</h2>
      <h4> For MS Students</h4>
  </div>
	
<form method="post" action="register3.php">
  	<?php include('errors.php'); ?>
      <div class="input-group">
  	  <label>ID</label>
        <input type="ID" name="Id" minlength="8"  value="<?php echo $Id; ?>">
       
  	</div>
  	<div class="input-group">
  	  <label>Student Name</label>
  	  <input type="text" name="Student" value="<?php echo $Student; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Thesis or Project Title</label>
  	  <input type="text" name="thesis" value="<?php echo $thesis; ?>">
  	</div>


  	<div class="input-group">
    <label for="supervisor">Supervisor</label>
    <select id="supervisor" name = "supervisor">
    <option value="OSI">OSI</option>
    <option value="RM">RM</option>
    <option value="MSH">MSH</option>
    <option value="MHS">MHS</option>
    <option value="MKI">MKI</option>
    <option value="MAA">MAA</option>
    <option value="MSC">MSC</option>
    <option value="KAZ">KAZ</option>
    <option value="NKC">NKC</option>
    <option value="MRUF">MRUF</option>
    <option value="FJ">FJ</option>
    <option value="IA">IA</option>
    <option value="RK">RK</option>
    <option value="FIA">FIA</option>
    <option value="RPDN">RPDN</option>
    <option value="AHMSH">AHMSH</option>
    <option value="AR">AR</option>
    <option value="SC">SC</option>
    <option value="NS">NS</option>
    <option value="MMI">MMI</option>
    <option value="ANC">ANC</option>
    <option value="NMIC">NMIC</option>
</select>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  
      </form>

</body>
</html>
