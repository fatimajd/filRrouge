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
           
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">sujet</th>
                    <th scope="col">Message</th>
                    


                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
		foreach($messages as $msg):?>
                  <tr>
                    
                    <td><?php echo $msg['id'] ;?></td>
                    <td><?php echo $msg['nom'] ;?></td>
                    <td><?php echo $msg['sujet'] ;?></td>
                    <td><?php echo $msg['message'] ;?></td>
                   
                    

                    <td>
                       


                    <button type="button" class="btn btn-outline-secondary">Reponde</button>
            <button type="button" class="btn btn-sm btn-danger">
            <a href="http://localhost/FileRouge/FileRouge/Contact/delete/<?=$msg['id']?>">
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