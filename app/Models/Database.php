<?php

class Database
{
    private $host = "localhost"; // Remplacez par l'adresse de votre serveur MySQL
    private $db_name = "spirit"; // Remplacez par le nom de votre base de données
    private $username = "root"; // Remplacez par votre nom d'utilisateur MySQL
    private $password = ""; // Remplacez par votre mot de passe MySQL
    public $connexion;

    // Méthode pour obtenir la connexion à la base de données
    public function getConnection()
    {
        $this->connexion = null;

        try {
            $this->connexion = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->connexion->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        return $this->connexion;
    }
}
?>

