<?php
   class Controller
   {
      public function view($view,$data = array()){
           extract($data);
           
           if(file_exists(VIEW.$view.".view.php"))
           {
              require(VIEW.$view.".view.php");
            }else
            {
              require(VIEW."404.view.php");
           }
      }

      public function load_model($model){
         if(file_exists(MODEL.ucfirst($model).".php")){
            require(MODEL.ucfirst($model).".php");
            return $model = new $model();
         }
         return false;
      }
   }
   


?>