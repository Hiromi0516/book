<?php
require "Database.php";

class User extends Database{
    
    public function register($first_name, $last_name, $username, $password){
        $sql = "INSERT INTO users (first_name, last_name, username, password) 
                VALUES ('$first_name', '$last_name', '$username', '$password')";

        if($this->conn->query($sql)){
            header("location: ../views");
            exit;
        }else{
            die("Error in Registering: ".$this->conn->error);
        }
    }    public function login($request){
        $username = $request['username'];
        $password = $request['password'];
     
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this ->conn->query($sql);
        
        if($result->num_rows == 1) {
          $user = $result->fetch_assoc();
          if(password_verify($password, $user['password'])) {
              session_start();
              $_SESSION['id'] = $user['id'];
              $_SESSION['username'] = $user['username'];
              $_SESSION['full_name'] = $user['first_name'] . " " . $user['last_name'];
              header('location: ../views/dashboard.php');
              exit;
          }else {
              die('Password is incorrect');
          }
        } else {
            die('Username not found');
        }
      }
    
    public function getAllUsers()
    {
        $sql = "SELECT id, first_name, last_name, username FROM users";
        if ($result = $this->conn->query($sql)){
            return $result;
        } else {
            die('Error retrieving all users: ' . $this->conn->error);
        }
      } 
      
      public function getAllProducts()
      {
          $sql = "SELECT id, product_name, price, quantity FROM products";
          if ($result = $this->conn->query($sql)){
              return $result;
          } else {
              die('Error retrieving all products: ' . $this->conn->error);
          }
        }
      
        public function addAllProducts($request)
        {

          $product_name = $request['product_name'];
          $price = $request['price'];
          $quantity   = $request['quantity'];
          $sql = "INSERT INTO `products`(`product_name`, `price`, `quantity`) VALUES ('$product_name','$price','$quantity' )";
            if ($result = $this->conn->query($sql)){
                return $result;
            } else {
                die('Error retrieving all products: ' . $this->conn->error);
            }
          }


    public function update($request, $files)
    {
        session_start();
        $id         = $_SESSION['id'];
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity   = $request['quantity'];
       
      

        
        $sql = "UPDATE product SET product name = '$product_name', price = '$price', quantity = '$quantity' WHERE id = $id";

        if ($this->conn->query($sql)){
            $_SESSION['product_name']   = $product_name;
            $_SESSION['price']  = "$price";
            $_SESSION['quantity']  = "$quantity";

          
    }
   

  } 
  public function delete():void{
  session_start();
  $id = $_SESSION['id'];
  
  $sql = "DELETE FROM product WHERE id = $id";
  
  if($this->conn->query($sql)){
    $this->logout();
  }else{
    die('Error deleting product:' . $this-> conn->error);
  }
}


?>
