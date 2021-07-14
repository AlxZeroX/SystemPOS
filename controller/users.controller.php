<?php


class controllerUser{

	/*=============================================
	=            Ingreso de Usuario               =
	=============================================*/
	
	public function ctrlLoginUser(){

		if(isset($_POST['loginUser'])){

			if(	preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginUser"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginpass"]) ){

				$tabla = "users";

				$item = "usuario";
				$valor = $_POST["loginUser"];

				$respuesta = ModelUsers::MdlShowUsers($tabla, $item, $valor);

				if($respuesta["usuario"] == $_POST['loginUser'] && $respuesta["password"] == $_POST["loginpass"]){

					//echo '<div class="alert alert-success">WELCOME</div>';
					$_SESSION['login'] = "ok";

					echo 
					'<script>
						window.location ="home";
					</script>';

				}else{

					echo '<div class="alert alert-danger">Error On Login, Please try again later</div>';
				}
			}
		}
	}
}

?>



