<?php 
    class UsersController{
        public function auth(){
            if(isset($_POST["submit"])){
             
              
                $data["email"] = $_POST["email"];
                $result = User::login($data);
                
                if($result && $_POST["email"]===$result->email  && password_verify($_POST["password"],$result->password)){
                    $_SESSION["logged"] = true;
                    $_SESSION["email"] = $result->email;
                    $_SESSION["fullname"] = $result->fullname;
                    $_SESSION["admin"] = $result->admin;
                    Redirect::to("home");
                }
                else{
                    
                    Session::set("error","Wrong email or password");
                    Redirect::to("sign");
                }
            }

                
            }
            public function register(){
                $options=[
                    "cost" =>12
                ];
                $password = password_hash($_POST["password"], PASSWORD_BCRYPT,$options);
                $data=array(
                    "fullname"=>$_POST["fullname"],
                    "email"=>$_POST["email"],
                    "password"=>$password

                );
              $result=User::createUser($data);
              if($result==="ok"){
                  Session::set("success","account created");
                  Redirect::to("sign");
              }  else{
                  echo $result;
              }
            }
            public function logout(){
                session_destroy();
            }
        }
    
?>