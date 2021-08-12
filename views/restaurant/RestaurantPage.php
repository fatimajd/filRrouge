<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/FileRouge/FileRouge//views/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6f17665668.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/FileRouge/FileRouge/views/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sidebar Menu</title>
</head>
<body>
    
    <div class="open">
        <span class="fa fa-bars" onclick="openbar()"></span>
    </div>
    <div class="content">
                <h2>Bienvenue <br> Sur votre tableau de bord</h2>
        <div class="d-flex justify-content-between mt-5">
              
            <div class="card border-warning mb-3" style="max-width: 18rem;">
            <div class="card-header bg-transparent border-warning">
                <img src="http://localhost/FileRouge/FileRouge/views/images/platadmin.png" style="width: 58%;margin-left: 3rem;" alt="">
                </div>
            <div class="card-body text-warning">
                <h5 class="card-title text-center">Vous avez</h5> <h1 class="card-title text-center"><?php echo $nmbrP['number']?></h1>
                <h5 class="card-title text-center"> Plats</h5>
 
            </div>
  
        </div>
        <div class="card border-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-warning">
                        <img src="http://localhost/FileRouge/FileRouge/views/images/orderfood.png" style="width: 58%;margin-left: 3rem;" alt="">
                        </div>
                    <div class="card-body text-warning">
                    <h5 class="card-title text-center">Vous avez</h5>
                    <h1 class="card-title text-center"><?php echo $nmbrM['number']?></h1>
                        <h5 class="card-title text-center"> Commandes</h5>
                        
                    </div>   
        </div>
</div>
    <div class="sidebar" id="sidebar">
        <div class="close">
            <span class="fa fa-times" onclick="closebar()"></span>
        </div>
        <div class="title">
           Restaurant Page
        </div>
        <ul class="links">
        <li><a href="http://localhost/FileRouge/FileRouge/Restaurant/accueil"><i class="fa fa-home"></i>Home </a></li>
            <li><a href="http://localhost/FileRouge/FileRouge/Plats/index"><i class="fa fa-qrcode"></i>Nos Plats</a></li>
            <li><a href="http://localhost/FileRouge/FileRouge/Commande/index"><i class="fa fa-user"></i>Nos Commandes</a></li>
           
            <li><a href="http://localhost/FileRouge/FileRouge/Login/deConnect"><i class="fa fa-power-off"></i>Logout</a></li>
        </ul>
        <div class="social">
            <i class="fa fa-instagram"></i>
            <i class="fa fa-youtube-play"></i>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
        </div>
    </div>
    <script src="main.js"></script>
    <script src="http://localhost/FileRouge/FileRouge/views/css/bootstrap.js">
            
            </script>
<script>
    function openbar(){
    let sidebar = document.getElementById("sidebar");
    sidebar.style.left = "0";
}

function closebar(){
    let sidebar = document.getElementById("sidebar");
    sidebar.style.left = "-250px";
}
</script>
</body>
</html>