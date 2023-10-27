<?php   
class etudiant implements evaluation{  // implements c'est l'implantation de linterface evalutation et on reporte toutes ses fonction a l'interieur de la classe 
protected $nom; 
protected $prenom;
protected $matricule;
protected $date_de_naissance; 

        public function __construct($noun, $prenoun, $matricul, $birthday){
                $this->nom=$noun;
                $this->prenom=$prenoun;
                $this->matricule=$matricul;
                $this->date_de_naissance=$birthday;
        }
        public function getNom(){  //on cree cette fonction en utilisant get pour pouvoir recuperer les attribut de la classe par ce que cest en protected  
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function getMatricule(){
            return $this->matricule;
        }
        public function getDate_de_naissance (){
            return $this->date_de_naissance;
        }
        function presentation(){
            echo "bonjour je m'appelle $this->prenom $this->nom je suis etudiant mon matricule est $this->matricule et ma date de naissance c'est le $this->date_de_naissance";
        }

        public function setNom($non ){  //on cree cette fonction en utilisant set pour pouvoir recevoir les attribut de la classe qu'on souhaiterai modifier c'est l'inverse get il recoit mais il envoi rien
            $this->nom=$non;
        }
        public function setPrenom($preno)                                                                                                                                             {
             $this->prenom=$preno;
        }
        public function setMatricule($matr){
             $this->matricule=$matr;
        }
        public function setDate_de_naissance ($date){
             $this->date_de_naissance=$date;
        }
        function faire_evaluation($nom , $date){ // c'est la fonction de l'interface
                echo "je dois faire une evaluation de $nom sur la formation backend le $date";
        }
        
}
$etudiant1=new etudiant("Diouf","Abiboulaye","47853/D","02/01/1995");
// $etudiant1->presentation();
// echo $etudiant1->getNom(); //ca permet de recuperer le nom si on est en protected
$etudiant1->setNom("Aicha"); // ici on a modifié en ajoutant Aicha 
$etudiant1->presentation();
echo "<br>";
$etudiant1->faire_evaluation("sql","30/11/2023");
interface evaluation{
    function faire_evaluation($nom , $date); //les fonctions dans interface on met pas de crochet juste ; apres les paranthese
    

}


?>