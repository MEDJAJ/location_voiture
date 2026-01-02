<?php

class Avis{
    private $note;
    private $content;
    private $detete_at;
   

    public function __construct($note,$content,$delete_at){
        $this->note=$note;
        $this->content=$content;
        $this->delete_at=$delete_at;
    }
   
    public static function afficherAvis($conn){
        $sql="SELECT a.deleted_at,a.note,a.content,u.nom,v.modele,v.marque,a.id_avis FROM avis a INNER JOIN users u ON u.id_user=a.id_user INNER JOIN vehicules v ON v.id_vehicule=a.id_vehicule";
        $stm=$conn->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
        
    }


    public static function supprimerAvi($conn,$id){
        $sql="DELETE FROM avis WHERE id_avis=:id";
        $stm=$conn->prepare($sql);
       return $stm->execute([':id'=>$id]);
        
    }

    public static function getAvisParId($conn,$id){
        $sql="SELECT * FROM avis WHERE id_avis=:id";
        $stm=$conn->prepare($sql);
        $stm->execute([':id'=>$id]);
        return $stm->fetch(PDO::FETCH_ASSOC);   
     
    }

public function modifierAvis($conn,$id){
     $sql = "UPDATE avis SET note = :note, content = :content, deleted_at = :deleted_at WHERE id_avis = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':note'       => $this->note,
        ':content'    => $this->content,
        ':deleted_at' => $this->delete_at,
        ':id'         => $id
    ]);
}

public static function getAvisParVehicule($conn,$id){
    $sql="SELECT u.nom,a.content,a.note FROM avis a INNER JOIN users u ON a.id_user=u.id_user WHERE a.id_vehicule=:id";
    $stm=$conn->prepare($sql);
    $stm->execute([':id'=>$id]);
    return $stm->fetchAll(PDO::FETCH_ASSOC);
}

public static function getNomVehiculeMarque($conn){
    $sql = "
        SELECT 
            v.id_vehicule,
            v.modele,
            v.marque
        FROM vehicules v
    ";
    $stm = $conn->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
}


}





?>