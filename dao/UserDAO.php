<?php 
    require_once("models/User.php");

    class UserDAO implements UserDAOInterface {

        private $connection;
        private $url;


        public function __construct(PDO $connection, $url){
            $this->connection = $connection;
            $this->url = $url;
        }
        
        public function buildUser($data){
            $user = new User();
            $user->id = $data["id"];
            $user->name = $data["name"];
            $user->lastname = $data["lastname"];
            $user->email = $data["email"];
            $user->password = $data["password"];
            $user->image = $data["image"];
            $user->bio = $data["bio"];
            $user->token = $data["token"];

            return $user;
        }
        
        public function create(User $user, $authUser = false){
            
        }
        
        public function update(User $user){
            
        }
        
        public function verifyToken($token){
            
        }
        
        public function setTokenToSession($protected = false){
            
        }
        
        public function authenticateUser ($email, $password){
            
        }
        
        public function findByEmail($email){
            
        }
        
        public function findById($id){

            
        }
        public function findByToken($token){

            
        }
        
        public function changePassword(User $user){
            
        }
    }

?>