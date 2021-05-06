     /* User Details */
     public function userDetails($uid)
     {
        try{
          $db = getDB();
          $stmt = $db->prepare("SELECT email,username,nombre,apellidos,telefono FROM users WHERE uid=:uid");  
          $stmt->bindParam("uid", $uid,PDO::PARAM_INT);
          $stmt->execute();
          $data = $stmt->fetch(PDO::FETCH_OBJ);
          return $data;
         }
         catch(PDOException $e) {
          echo '{"error":{"text":'. $e->getMessage() .'}}'; 
          }

     }