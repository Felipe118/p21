<?php

    namespace App\Models; 

    use App\Config\Model;

    class Xml extends Model
    {

        public function saveXml($arrayXml)
        {
            foreach($arrayXml as $xml){
                // echo '<pre>';
                //  print_r($xml['nome']);
                //  echo '</pre>';
                $query = "INSERT INTO torcedores(nome, documento, cep, endereco, bairro, cidade, uf,telefone, email, ativo)
                values (:nome, :documento,:cep, :endereco, :bairro, :cidade, :uf,:telefone, :email, :ativo)";

                $stmt = $this->database->prepare($query);
                $stmt->bindValue(':nome', $xml['nome']);
                $stmt->bindValue(':documento', $xml['documento']);
                $stmt->bindValue(':cep', $xml['cep']);
                $stmt->bindValue(':endereco', $xml['endereco']);
                $stmt->bindValue(':bairro', $xml['bairro']);
                $stmt->bindValue(':cidade', $xml['cidade']);
                $stmt->bindValue(':uf', $xml['uf']);
                $stmt->bindValue(':telefone', $xml['telefone']);
                $stmt->bindValue(':email', $xml['email']);
                $stmt->bindValue(':ativo', $xml['ativo']);
                $stmt->execute();
            }

        }

       

    }