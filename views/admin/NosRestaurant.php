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
    <h1 class="h1-admin text-center">OUR RESTAURANT</h1>
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
                              <h5 class="newplat modal-title" id="exampleModalLabel">New Restaurant</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form class="bb-form validate-form" action="http://localhost/FileRouge/FileRouge/Restaurant/save" method="post"> 
                              <span class="bb-form-title p-b-26"> Welcome </span> <span class="bb-form-title p-b-48"> 
                                <i class="mdi mdi-symfony"></i> </span>

                                <div class="mb-3">
                                  <!-- <label for="message-text" class="col-form-label">Message:</label>
                                  <textarea class="form-control" id="message-text"></textarea> -->
                                  <label for="message-text" class="col-form-label">Nom</label>
                                  <input type="text" class="form-control" id="message-text" name="nom">
                                  <label for="message-text" class="col-form-label">Adress</label>
                                  <input type="text" class="form-control" id="message-text" name="adresse">
                                  <label for="message-text" class="col-form-label">specialite</label>
                                  <input type="text" class="form-control" id="message-text" name="specialite">
                                  <label for="message-text" class="col-form-label">ville </label>
                                  <input type="text" class="form-control" id="message-text" name="ville">
                                  <label for="message-text" class="col-form-label">image</label>
                                  <input type="file" class="form-control" id="message-text" name="image">
                                  <label for="message-text" class="col-form-label">email </label>
                                  <input type="email" class="form-control" id="message-text" name="email">
                                  <label for="message-text" class="col-form-label">motdepasse</label>
                                  <input type="text" class="form-control" id="message-text" name="motdepasse">
                                 
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
                    <th scope="col">Adresse</th>
                    <th scope="col">Specialite</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Image</th>


                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
		foreach($restaurants as $restaurant):?>
                  <tr>
                    
                    <td><?php echo $restaurant['id'] ;?></td>
                    <td><?php echo $restaurant['nom'] ;?></td>
                    <td><?php echo $restaurant['adresse'] ;?></td>
                    <td><?php echo $restaurant['specialite'] ;?></td>
                    <td><?php echo $restaurant['ville'] ;?></td>
                    <td><img src="http://localhost/FileRouge/FileRouge/views/images/<?php echo $restaurant['image'] ;?>" alt="" height="100px" width="100px"></td>
                   
                    

                    <td>
                        <button type="button" class="btn btn-warning">
                          <a href="http://localhost/FileRouge/FileRouge/Restaurant/edit/<?=$restaurant['id']?>"><i class="fa fa-edit"></i></a>
                       </button>


                      
            <button type="button" class="btn btn-sm btn-danger">
            <a href="http://localhost/FileRouge/FileRouge/Restaurant/delete/<?=$restaurant['id']?>">
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
        <li><a href="http://localhost/FileRouge/FileRouge/Admin/index"><i class="fa fa-home"></i>Home </a></li>
            <li><a href="http://localhost/FileRouge/FileRouge/Restaurant/index"><i class="fa fa-home"></i>Nos Restaurants </a></li>
      
            <li><a href="http://localhost/FileRouge/FileRouge/Contact/afficher"><i class="fa fa-user"></i>Nos Messages</a></li>
           
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