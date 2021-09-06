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
                    <a href="http://localhost/FileRouge/FileRouge/Login/index"><i class="fa fa-user fs-3" aria-hidden="true"></i></a>
                  
                    <div class="nav-panier">
                    <?php if(isset($_SESSION['role'])){?>
                    <a href="http://localhost/FileRouge/FileRouge/Panier/index">
                    <?php } else{ ?>
                        <a href="http://localhost/FileRouge/FileRouge/Login/index">
                        <?php } ?>
                      <i class="fa fa-shopping-cart ms-5 fs-3"></i> </a>
                      <?php if(isset($_SESSION['role'])){?>
                      <div class="num ms-2 mt-2"> 0</div><?php } ?>
                </div>
</div>
              </div> 
</section>

		<div class="limit">
			<div class="login-container">
				<div class="bb-login">
					<form class="bb-form validate-form" action="http://localhost/FileRouge/FileRouge/SignUp/save" method="post"> 
                        <span class="bb-form-title p-b-26">Bienvenue </span> <span class="bb-form-title p-b-48"> <i class="mdi mdi-symfony"></i> </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                             <input  class="input100" type="text" placeholder="Nom"  name="nom"> 
                             
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                             <input  class="input100" type="text" placeholder="Prenom"  name="prenom"> 
                             
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                             <input  class="input100" type="text" placeholder="Telephone"  name="telephone"> 
                             
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                             <input  class="input100" type="text" placeholder="Adresse"  name="adresse"> 
                         
                        </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                             <input class="input100" type="email" placeholder="Email"  name="email"> 
                             
                        </div>
						<div class="wrap-input100 validate-input" data-validate="Enter password"> 
                            <span class="btn-show-pass"> 
                        </span> 
                        <input class="input100" type="password" placeholder="Mot de passe"  name="motdepasse"> 
                        
                     </div>
						<div class="login-container-form-btn">
							<div class="bb-login-form-btn">
								<div class="bb-form-bgbtn"></div> <button class="bb-form-btn"> Sign Up </button>
							</div>
						</div>
						<div class="text-center p-t-115">  <a class="txt2" href="http://localhost/FileRouge/FileRouge/Login/index">s'identifier </a> </div>
					</form>
				</div>
			</div>
		</div>

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
