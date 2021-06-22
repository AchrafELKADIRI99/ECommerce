<?php 
    class User{
        static public function login($data){
            $email = $data["email"];
            try {
            $query = "SELECT * FROM users WHERE email = :email";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$email));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        } catch (PDOException $ex) {
            echo "error : ".$ex.getMessage();
        }
        }
        static public function createUser($data){
            $stmt = DB::connect()->prepare('INSERT INTO users (fullname
            ,email,password)
            VALUES (:fullname,:email,:password)');
            $stmt->bindParam(':fullname',$data['fullname']);
            $stmt->bindParam(':email',$data['email']);
            $stmt->bindParam(':password',$data['password']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
        }
        static public function getAll(){
            $st = DB::connect()-> prepare('SELECT * FROM USERS WHERE user_id NOT IN (19)');
            $st->execute();
            return $st -> fetchAll();
            $st -> close;
            $st=null;
        }
        static public function deleteUser($data){
            $id = $data['id'];
            try{
                $stmt = DB::connect()->prepare('DELETE FROM users WHERE user_id = :id');
                $stmt->execute(array(":id" => $id));
                if($stmt->execute()){
                    return 'ok';
                }else{
                    return 'error';
                }
                $stmt->close();
                $stmt =null;
            }catch(PDOException $ex){
                echo "erreur " .$ex->getMessage();
            }
        }
    }


?>