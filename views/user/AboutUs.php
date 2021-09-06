<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f17665668.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/FileRouge/FileRouge/views/css/bootstrap.css">
    <link href="http://localhost/FileRouge/FileRouge/views/css/style2.css" rel="stylesheet">
    <title>Document</title>
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
                       <?php if(isset($_SESSION['role'])){?>
                    <a href="http://localhost/FileRouge/FileRouge/Panier/index">
                    <?php } else{ ?>
                        <a href="http://localhost/FileRouge/FileRouge/Login/index">
                        <?php } ?>
                      <i class="fa fa-shopping-cart ms-5 fs-3"></i> </a>
                      <?php if(isset($_SESSION['role'])){?>
                      <div class="num ms-2 mt-2"><?php echo $nmbr['number'];?></div><?php } ?>
                </div>
</div>
              </div> 
</section>
          <!-- **********content********************** -->
          <div class="row flex-column-reverse flex-md-row">

                
                <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                    <div class="mx-auto position-relative  w-75" style="top: 100px;">
                        <h1 class="about mb-5">A propos de nous</h1>
                    <p class="about-p position-relative">Pour réduire le maximum possible de ces problèmes, on a proposé une solution sera basée 
Sur les possibilités offertes par les nouvelles technologies.
En plus
Les outils de développement sont plus faciles à manient.
En fin les technologies réseau sont devenues plus faciles à utiliser tel que l’internet.
La solution que nous considérons capable de remédier à ces défaillances consiste
À réaliser un site web qui permet aux restaurateurs de publier une photo du plat restant en stock avec le temps de sa préparation, et il est de haute qualité pour protéger la santé du consommateur et avec un prix bien inférieur à son prix d’origine. Ainsi, les étudiants et autres peuvent bénéficier de cette offre à un prix raisonnable pour eux
        </div>

                         
                </div>
                <div class="col-lg-6  col-md-6 col-sm-12  mb-sm-4 p-0 ">
                    <img src="http://localhost/FileRouge/FileRouge/views/images/black1.png" class="imgblack vh-100 position-relative float-end"alt="">
                    <img src="http://localhost/FileRouge/FileRouge/views/images/ho.png" class="i1 position-absolute top-50 start-50 translate-middle vh-50" alt="">
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
          <script src="http://localhost/FileRouge/FileRouge/views/css/bootstrap.js">
            
        </script>
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
</body>

</html>
