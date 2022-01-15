<?php 
class framework{
	public function view($viewName,$data = []){

		if(file_exists("../application/views/".$viewName.".php")){

			 require_once "../application/views/$viewName.php";


		}else{
			echo "<div>Sorry ".$viewName.".php Not Found</div>";
		}

	}


	public function model($modelName){

		if(file_exists("../application/models/".$modelName.".php")){


			 require_once "../application/models/$modelName.php";
			 return new $modelName;


		}else{
			echo "<div>Sorry ".$modelName.".php Not Found</div>";
		}

	}
}

?>