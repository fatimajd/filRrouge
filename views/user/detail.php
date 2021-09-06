<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6f17665668.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/FileRouge/FileRouge/views/css/bootstrap.css">
    <link href="http://localhost/FileRouge/FileRouge/views/css/style2.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/b9f85c081e.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
  <section class="navnav container-fluid">
                    <div class="container-fluid nav-bar">
                        <img src="http://localhost/FileRouge/FileRouge/views/images/logo15.png" alt="" class="logo">
                        <header class="header">
            
                            <nav class="position-absolute top-0 start-50 translate-middle-x mt-4" style="z-index: 1111;">
                                <span class="open-slide">
                                <a href="#" class="open">
                                    <svg width="60px" height="30px"  viewBox="0 0 20 19" version="1.1" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <!-- Generator: Sketch 52.5 (67469) - http://www.bohemiancoding.com/sketch -->
                                        <title>restaurant_menu</title>
                                        <desc>Created with Sketch.</desc>
                                        <g id="Icons" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Two-Tone" transform="translate(-442.000000, -3213.000000)">
                                                <g id="Maps" transform="translate(100.000000, 3068.000000)">
                                                    <g id="Two-Tone-/-Maps-/-restaurant_menu" transform="translate(340.000000, 142.000000)">
                                                        <g>
                                                            <polygon id="Path" points="0 0 24 0 24 24 0 24"></polygon>
                                                            <path d="M8.1,13.34 L10.93,10.51 L3.91,3.5 C2.35,5.06 2.35,7.59 3.91,9.16 L8.1,13.34 Z M20.15,10.15 C22.06,8.24 22.43,5.5 20.96,4.03 C19.5,2.57 16.76,2.93 14.84,4.84 C13.25,6.43 12.75,8.58 13.46,10.11 L3.7,19.87 L5.11,21.28 L12,14.41 L18.88,21.29 L20.29,19.88 L13.41,13 L14.88,11.53 C16.41,12.24 18.56,11.74 20.15,10.15 Z" id="🔹-Primary-Color" fill="#1D1D1D"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                </span>
                        </nav>
                            
                            <div id="side-menu" class="side-nav">
                                <a href="#" class="btn-close btn-close-white"></a>
                                <a href="http://localhost/FileRouge/FileRouge/" class="menu__link menu__link--active">Home
                                   
                                </a>
                                <a href="http://localhost/FileRouge/FileRouge/Gallery/index" class="menu__link">Nos Plats
                                   
                                </a>
                                <a href="http://localhost/FileRouge/FileRouge/about/index" class="menu__link">About Nous
                                   
                                </a>
                                <a href="http://localhost/FileRouge/FileRouge/Profile/index"  class="menu__link">Profile
                                    
                                </a>
                                <a href="http://localhost/FileRouge/FileRouge/Contact/index" class="menu__link">Contact
                                    
                                </a>
                            </div>
                        </header>
                        <div class="d-flex mt-4">
                        <?php if(!isset($_SESSION['role'])){?>
                    <a href="http://localhost/FileRouge/FileRouge/Login/index"><i class="fa fa-user fs-3" aria-hidden="true"></i></a>

                    <?php } 
                    else { ?>
                        <a class="" href="#" id="userDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?=$_SESSION['role'][0]["nom"]?>
                        </a>
                     
                    <a href="http://localhost/FileRouge/FileRouge/Login/deConnect"><i class="fa fa-sign-out ms-5 fs-3" aria-hidden="true"></i></a>
                  
                    
                    <?php } ?>                        
                            <div class="nav-panier">
                            <a href="http://localhost/FileRouge/FileRouge/Panier/index">
                            <i class="fa fa-shopping-cart ms-5 fs-3"></i> </a>
                            <div class="num ms-2 mt-2"><?php echo $nmbr['number'];?></div>
                        </div>
        </div>
                    </div> 
    </section>
    <div class="rest-par">
        <h1 class="mt-5 ms-5">Détails Plat</h1></div>
    
    <div class="container-fluid row align-items-center mt-5">
        <div class="col-lg-6 d-flex justify-content-center">
            <img src="http://localhost/FileRouge/FileRouge/views/images/HG.jpg" class="img-thumbnail" alt="">
        </div>
        <div class="top-side col-lg-6">
           
                
            <?php 
            foreach($plats as $plat):?>
            <form action="http://localhost/FileRouge/FileRouge/Detail/save/<?=$plat['id']?>" method="post"> 
                <div class="right-side mt-5">
                <h2 style="color:#F6AE2D;font-family:'Otomanopee One';"><?php echo $plat['nom'];?></h2>
                <h3>Restaurant : <?php echo $plat['nomrest'];?> </h3>
                <h3> Prix :<?php echo $plat['prix'].'DH' ;?></h3>
                <h3 style="text-decoration: line-through;"><?php echo $plat['prixenc'].'DH' ;?></h3>
                <label for="">Quantité </label>
                <input type="number" min="1" name="quantite" class="inputdetail mb-4">

                <div class="bttn d-flex justify-content-between">
                    <button type="button" class="btn btn-primary mb-4 ml-3 " style="background-color:#F6AE2D;border:none;font-family:'Otomanopee One';"
                     data-bs-toggle="modal" data-bs-target="#exampleModal55" data-bs-whatever="@mdo">Ajouter au panier</button>
                  


                      <div class="modal fade" id="exampleModal55" tabindex="-1" aria-labelledby="exampleModalLabel55" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h6>Un nouvel article a été ajouté à votre panier.</h6>
                              
                            </div>
                            <div class="modal-body">
                              <span class="bb-form-title p-b-26">Bienvenue </span> <span class="bb-form-title p-b-48"> 
                                <i class="mdi mdi-symfony"></i> </span>

                                <div class="bttns d-flex justify-content-between mb-3">
                                  <!-- <label for="message-text" class="col-form-label">Message:</label>
                                  <textarea class="form-control" id="message-text"></textarea> -->
                             
                                  <button name="submit" class="btn btn-primary mb-4 ml-3 " style="background-color:#F6AE2D;border:none;font-family:'Otomanopee One';">
                                  Voir le Panier</button>
                                  
                                  <button name="submit2" class="btn btn-outline-dark mb-4 ml-3 " style="font-family:'Otomanopee One';">
                                  Continuer Votre Achat</button>
                                </div>
                                

                            </div>
                            
                          </div>
                        </div>
                      </div>
                     <div class="nombreheart d-flex ms-1">
                    <i class="far fa-heart fs-3 "></i>
                        <?php echo $plat['nmbradoration'] ;?></a>
            </div>
                </div>
                <h6 style="font-family:'Otomanopee One';"><?php echo $plat['nmbrachat'];?> Commandes</h6>
                 </form>
                 <?php endforeach; ?>
               
            </div>

        </div>
    </div>
    
  <!-- Footer -->
<footer class="back text-center text-lg-start bg-light text-white mt-5">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-around p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Nous avons dit « 99,9% de transparence », pas « 100% » 🙂</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      
      <a href="" class="me-4 text-reset ">
        <i class="fab fa-instagram fs-3"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin fs-3"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github fs-3"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>
          </h6>
          <p>
          <img src="http://localhost/FileRouge/FileRouge/views/images/logo15.png" alt="" style="width:152px;">

          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Produits
          </h6>
          <p>
            <a href="#!" class="text-reset">PHP</a>
          </p>
          <p>
            <a href="#!" class="text-reset">MVC</a>
          </p>
          <p>
            <a href="#!" class="text-reset">HTML5</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Bootstrap</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
          LIENS UTILES
          </h6>
          <p>
            <a href="#!" class="text-reset">Home</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Gallerie</a>
          </p>
          <p>
            <a href="#!" class="text-reset">About Nous</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contact</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Casablanca, MR 10012</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Kitskos.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="/views/css/bootstrap.js"></script>
        <script>
            var anchor = document.querySelector(".open")
anchor.addEventListener("click", function openSlideMenu(){
  document.getElementById('side-menu').style.width = '100%';
  
 
})

var btn = document.querySelector(".btn-close")
btn.addEventListener("click", function closeSlideMenu(){
   document.getElementById('side-menu').style.width = '0';
 

})
        </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>