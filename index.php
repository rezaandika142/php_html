<?php include "data.php"> ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Magang TOP</title>
    <link rel="stylesheet" href="asset/css/boostrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
    <link rel="shortcut icon" href="asset/images/icon.ico">
</head>
<body>
     <div class="container">

         <div class="row">
            
            <?php foreach($data_siswa as $k=>$v );?>

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="asset/images/logo.jpg" class="card-img-top img-thumbnail" alt="logo">
                     <div class="card-body">
                        <h5 class="card-title"><?php echo $value[0];?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-secondary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
     
         </div>
     </div>
    

    <script src="asset/js/jquery-3-5.1.slim.min.js"></script>
    <script src="asset/popper.min.js"></script>
    <script src=bootstrap.min.js></script>
</body>
</html>