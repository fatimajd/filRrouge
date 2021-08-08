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
    <div class="content">
<form class="bb-form validate-form" action="http://localhost/FileRouge/FileRouge/Restaurant/update/<?php echo $restaurants[0]['id']?>" method="post"> 
                              <span class="bb-form-title p-b-26"> Welcome </span> <span class="bb-form-title p-b-48"> 
                                <i class="mdi mdi-symfony"></i> </span>

                                <div class="mb-3">
                                  <!-- <label for="message-text" class="col-form-label">Message:</label>
                                  <textarea class="form-control" id="message-text"></textarea> -->
                                  <label for="message-text" class="col-form-label">Nom</label>
                                  <input type="text" class="form-control" id="message-text" name="nom" value="<?php echo $restaurants[0]['nom']?>">
                                  <label for="message-text" class="col-form-label">Adress</label>
                                  <input type="text" class="form-control" id="message-text" name="adresse" value="<?php echo $restaurants[0]['adresse']?>">
                                  <label for="message-text" class="col-form-label">specialite</label>
                                  <input type="text" class="form-control" id="message-text" name="specialite" value="<?php echo $restaurants[0]['specialite']?>">
                                  <label for="message-text" class="col-form-label">ville </label>
                                  <input type="text" class="form-control" id="message-text" name="ville" value="<?php echo $restaurants[0]['ville']?>">
                                  <label for="message-text" class="col-form-label">image</label>
                                  <input type="file" class="form-control" id="message-text" name="image" value="<?php echo $restaurants[0]['image']?>">
                                 
                                </div>
                                <div class="modal-footer">
                                  <button class="btn btn-primary">Submit</button>
                                </div>
                              </form>
                            
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

                          