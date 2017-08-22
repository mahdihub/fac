<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>profile</title>
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
</head>

<body>
   
    <div class="container">
        <img src="<?=site_url('assets/img/users/'.$personne->photo)?>">
        <h4> <?= $personne->username?> </h4>
    </div>
</body>
</html>