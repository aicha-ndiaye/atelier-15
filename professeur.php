<?php 
class professeur {
protected $nom;
protected $prenom;
protected $matricule;
protected $salaire;
protected $voiture;

public function __construct($nom, $prenom, $matricule, $salaire, $voiture)
{
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->matricule=$matricule;
    $this->salaire=$salaire;
    $this->voiture=$voiture;
}
public function getNom(){
    return $this->nom;
}
public function getPrenom(){
    return $this->prenom;
}
public function getMatricule(){
    return $this->matricule;
}
public function getSalaire(){
    return $this->salaire;
}
public function getVoiture(){
    return $this->voiture;
} 
function presentation(){
    echo "Salut, je suis professeur, je m'appelle $this->prenom $this->nom, spécialisé dans le domaine de l'informatique et de la programmation, j'ai une voiture $this->voiture, j'ai comme salaire $this->salaire FCFA";
}
function faire_evaluation($nom , $date){
    echo "les etudiants doivent etre evalue en $nom le $date";
}

}
$professeur1=new professeur("Talla", "cheikh saliou","36876/A","2.000.000","Hyundai");
$professeur1->presentation();
echo "<br>";
$professeur1->faire_evaluation("gestion de projet", "19/12/2023");
?>
