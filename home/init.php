   <?php
               $name = $_POST["name"];
               $email = $_POST["email"];
               $message = $_POST["message"];
               
               //errors 
               $missingName = '<p><strong>Please enter your name</strong><p>'

           // if the user has submitted the form 
          if($_POST["submit"]){

             //check for errors
             if(!$name){
           $errors .= $missingName; 
              
                }



            }
            ?>