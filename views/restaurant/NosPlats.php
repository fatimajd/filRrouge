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
    <h1 class="h1-admin text-center">Nos Plats</h1>
		<div class="container">
           
             <!-- <div>
               <img src="images/about-s-1.png" alt="">
            </div>  -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
              <i class="fas fa-plus"></i></button>


                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="newplat modal-title" id="exampleModalLabel">Nouvelle plat</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="bb-form validate-form" action="http://localhost/FileRouge/FileRouge/Plats/save" method="post"> 
                              <span class="bb-form-title p-b-26"> Welcome </span> <span class="bb-form-title p-b-48"> 
                                <i class="mdi mdi-symfony"></i> </span>

                                <div class="mb-3">
                                  <!-- <label for="message-text" class="col-form-label">Message:</label>
                                  <textarea class="form-control" id="message-text"></textarea> -->
                                  <label for="message-text" class="col-form-label">Nom </label>
                                  <input type="text" class="form-control" id="message-text" name="nom">
                                  <label for="message-text" class="col-form-label">Date </label>
                                  <input type="date" class="form-control" id="message-text" name="date">
                                  <label for="message-text" class="col-form-label">Heure </label>
                                  <input type="Time" class="form-control" id="message-text" name="heure">
                                  <label for="message-text" class="col-form-label">Image</label>
                                  <input type="file" class="form-control" id="message-text" name="image">
                                  <label for="message-text" class="col-form-label">Prix</label>
                                  <input type="text" class="form-control" id="message-text" name="prix">
                                  <label for="message-text" class="col-form-label">ancien prix </label>
                                  <input type="number" class="form-control" id="message-text" name="prixenc">
                                  <label for="message-text" class="col-form-label">Nombre des plats</label>
                                  <input type="number" class="form-control" id="message-text" name="nmbrplats">
                                 
                                </div>
                                <div class="modal-footer">
                                  <button class="btn btn-primary">Submit</button>
                                </div>
                              </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>
            <table class="table">
                <thead>
                  <tr>
                  <th scope="col">id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Date</th>
                    <th scope="col">Heure</th>
                    <th scope="col">image</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Prix encienne</th>
                    <th scope="col">Nombre des Plats</th>


                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
		foreach($plats as $plat):?>
                  <tr>
                    
                  <td><?php echo $plat['id'] ;?></td>
                    <td><?php echo $plat['nom'] ;?></td>
                    <td><?php echo $plat['date'] ;?></td>
                    <td><?php echo $plat['heure'] ;?></td>
                    <td><img src="http://localhost/FileRouge/FileRouge/views/images/<?php echo $plat['image'] ;?>" alt="" height="100px" width="100px"></td>
                    <td><?php echo $plat['prix'] ;?></td>
                    <td><?php echo $plat['prixenc'] ;?></td>
                    <td><?php echo $plat['nmbrplats'] ;?></td>
                   
                    

                    <td>
                        <button type="button" class="btn btn-warning">
                        <a href="http://localhost/FileRouge/FileRouge/Plats/edit/<?=$plat['id']?>"><i class="fa fa-edit"></i></a>
            </button>


                      
            <button type="button" class="btn btn-sm btn-danger">
            <a href="http://localhost/FileRouge/FileRouge/Plats/delete/<?=$plat['id']?>">
					       		<i class="fa fa-trash"></i></a>
					       		</button>
                    </td>
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