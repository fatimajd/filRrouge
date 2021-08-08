
<?php
require_once 'models/Login.php';

/**
 * 
 */
class LoginController
{
	function index()
	{
		require_once 'views/user/login.php';
	}
	public function user(){
		if (isset($_POST['submit'])) {
			$login = new Login();
			$login->setemail($_POST['email']);
			$login->setpassword($_POST['motdepasse']);
			$login->tableradio = $_POST['user'];
			
			$result = $login->log();
			if ($row=$result->fetchAll(PDO::FETCH_ASSOC)){
				$_SESSION['role']=$row;
				// ___________get id enseignant qu' est dans la table user___________ 
				$_SESSION['id']=$_SESSION['role'][0]['id'];
			
				if ($_SESSION['role'][0]['role']=='admin') {
					header("location:http://localhost/FileRouge/FileRouge/Admin/index");
				}
				else if($_SESSION['role'][0]['role']=='restaurant'){
					header("location:http://localhost/FileRouge/FileRouge/Restaurant/accueil");

				}
				else if ($_SESSION['role'][0]['role']=='user'){
					header("location:http://localhost/FileRouge/FileRouge");

				}
				
				
			}else {
			header("location:http://localhost/FileRouge/FileRouge/Login/index");

		}

		}
	}
	
	
        function deConnect(){


            session_unset();


            session_destroy();



            header('location:http://localhost/FileRouge/FileRouge/Login/index');
            

        }
}
?>
