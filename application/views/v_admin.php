<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat login dengan codeigniter</title>
</head>
<body>
    <h1>LOGIN BERHASIL !</h1>
    <h2>hai <?php echo $this->session->userdata("nama"); ?></h2>
    <a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>