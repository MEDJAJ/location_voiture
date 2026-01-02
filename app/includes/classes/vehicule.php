<?php
class Vehicle{
     private $modele;
     private $marque;
     private $disponibilite;
     private $id_categorie;
     private $image;

     public function __construct($modele,$marque,$disponible,$id_categorie,$image){
        $this->modele=$modele;
        $this->marque=$marque;
        $this->disponible=$disponible;
        $this->id_categorie=$id_categorie;
        $this->image=$image;
     }


  public static function afficherVehicule($conn) {
        $stmt = $conn->query("SELECT * FROM vehicules ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

   
    public static function supprimerVehicule($conn, $id) {
        $stmt = $conn->prepare("DELETE FROM vehicules WHERE id_vehicule= ?");
        return $stmt->execute([$id]);
    }


    public static function modifierVehicule($conn, $id,$modele,$marque,$disponibilite,$id_categorie,$image,$prix) {
        $stmt = $conn->prepare("UPDATE vehicules SET modele = ?, marque = ?, disponibilite = ?,id_categorie= ?, image= ?,prix = ? WHERE id_vehicule = ?");
        return $stmt->execute([$modele, $marque, $disponibilite,$id_categorie, $image,$prix,$id]);
    }

    
    public static function ajouterMasse($conn, $data) {
        $stmt = $conn->prepare("INSERT INTO vehicules (modele, marque, disponibilite,id_categorie,image,prix) VALUES (?, ?, ?,?,?,?)");
        foreach ($data as $row) {
            $stmt->execute([$row['modele'],$row['marque'], $row['disponible'], $row['nom_categorie'],$row['image'],$row['prix']]);
        }
    } 

    public static function getById($conn, $id){
    $stmt = $conn->prepare("SELECT * FROM vehicules WHERE  id_vehicule = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
     

}

?>