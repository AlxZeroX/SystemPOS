<?php 
require_once "connection.php";

class ModelUsers{

	/*=============================================
	=            Mostrar Usuarios                 =
	=============================================*/
	
	static public function MdlShowUsers($tabla, $item, $valor){

		$stmt = Connection::connect()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();
	}
}
?>