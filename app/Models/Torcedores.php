<?php
    namespace App\Models;

    use App\Config\Model;

    class Torcedores extends Model
    {
          //Listar torcedores
          public function listFans()
          { 
              $query = "SELECT * FROM torcedores";
              $stmt = $this->database->prepare($query);
              $stmt->execute();
 
              $fans = $stmt->fetchAll(\PDO::FETCH_ASSOC);
 
              return $fans;
 
          }
    }