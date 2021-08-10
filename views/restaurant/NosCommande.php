<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f17665668.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/FileRouge/FileRouge/views/css/bootstrap.css">
    <link href="http://localhost/FileRouge/FileRouge/views/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <div class="content">
    <h1 class="h1-admin text-center">Nos Commandes</h1>
		<div class="container">
           
             <!-- <div>
               <img src="images/about-s-1.png" alt="">
            </div>  -->
           
            <table class="table">
                <thead>
                  <tr>
                 
                    <th scope="col">Plat</th>
                    <th scope="col">Quantite</th>
                    <th scope="col">Nom Client</th>
                    
                    <th scope="col">adresse</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date de Commande</th>
                    <th scope="col">Prix a payé</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                <?php 
		foreach($commandes as $commande):?>
                  <tr>
                    
                  <td>
                  <img src="http://localhost/FileRouge/FileRouge/views/images/<?php echo $commande['imageP'] ;?>" alt="" height="100px" width="100px">
               <?php echo $commande['nomP'] ;?>  </td>
                  
                    <td><?php echo $commande['quantite'] ;?></td>
                    <td><?php echo $commande['nomC'] ;?></td>
                    <td><?php echo $commande['adresse'] ;?></td>
                    
                    <td><?php echo $commande['telephone'] ;?></td>
                    <td><?php echo $commande['email'] ;?></td>
                    <td><?php echo $commande['dateC'] ;?></td>
                    <td><?php echo $commande['total'] ;?></td>
                   
                    
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
        </div>
    </div>
    <div class="open">
        <span class="fa fa-bars" onclick="openbar()"></span>
    </div>
    <div class="sidebar" id="sidebar">
        <div class="close">
            <span class="fa fa-times" onclick="closebar()"></span>
        </div>
        <div class="title">
           Admin Page
        </div>
        <ul class="links">
        <li><a href="http://localhost/FileRouge/FileRouge/Restaurant/accueil"><i class="fa fa-home"></i>Home </a></li>
            <li><a href="http://localhost/FileRouge/FileRouge/Plats/index"><i class="fa fa-qrcode"></i>Nos Plats</a></li>
            <li><a href="http://localhost/FileRouge/FileRouge/Commande/index"><i class="fa fa-user"></i>Nos Commande</a></li>
           
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