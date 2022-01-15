<?php 
 class UserController extends framework {


 	public function index(){
 		echo "index of usercontroller";
 	}


 	public function userMethod(){

              $this->view("users/user");

        $userModel = $this->model('userModel');
 
        $userModel->fetchData();
   //      $data = [
   //          'title' => 'this is title',
   //          'body' => 'this is body'
   //      ];

 		// $this->view("users/user",$data);




 	}
 } 
?>