<!DOCTYPE html>
<html>
<head>
	<title>STARBUCKS</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body background="../application/image/f.jpg">

<h2> <font color="ffffff">STARBUCKS </h2>

<form action="../controller/proses.login.php?aksi=login" method="post">
  <div class="imgcontainer">
    <img src="../image/v.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b><font color="ffffff">Username</b></label>
    <input type="text" name="username" class="form_login" placeholder="Username" required>

    <label><b><font color="ffffff">Password</b></label>
    <input type="password" name="password" class="form_login" placeholder="Password" required>
        
    <button type="submit">Masuk</button>
    
  </div>
  <a href="../view/login.php" class="btn btn-secondary"><i class="fa fa-google"></i><h2><font color="ffffff">GOOGLE</h2></a>
  <div class="container" style="background-color:#f1f1f1">
  </div>  
</form>
</body>
</html>