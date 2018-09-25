<?php


class Etudiant {

    private $prenom;
    private $nom;
    private $email;
    private $telephone;

    // $pn, $nm, $em, $tel

        // setPrenom
    public function setPrenom($pn){
        if(is_string($pn) && strlen($pn) >= 5 && strlen($pn) <= 30){
			$this -> prenom = $pn;
        }
        return $this;
    }
        // getPrenom
    public function getPrenom(){
		return $this -> prenom;
    }


        //  setNom 
    public function setNom($nm){
        if(is_string($nm) && strlen($nm) >= 5 && strlen($nm) <= 30){
			$this -> nom = $nm;
		}
        return $this;
    }

        // getNom
    public function getNom(){
		return $this -> nom;
    }

        // setEmail 
    public function setEmail($em){
        if(FILTER_VAR($em, FILTER_VALIDATE_EMAIL)) 
        {
            $this -> email = $em;
        }
        return $this;
    }

        // getEmail 
    public function getEmail(){
		return $this -> email;
    }

        //setTelephone 
    public function setTelephone($tel){
        if(is_numeric($tel) && strlen($tel) == 10){
			$this -> telephone = $tel;
			return $this;
		}
    }

      // getTelephone 
    public function getTelephone(){
		return $this -> telephone;
    }
    

    //----------------
	public function getInfos(){
		$infos = array();
		$infos['prenom'] = $this -> getPrenom();
		$infos['nom'] = $this -> getNom();
		$infos['email'] = $this -> getEmail();
		$infos['telephone'] = $this -> getTelephone();
		
		return $infos;
	}
    

} // fin Class Etudiant




