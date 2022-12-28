<?php
class persona {					//esercizio 10.1
	
    //variabili d'istanza 
    private $nome; //gli attributi si scrivono sempre in minuscolo
    private $eta;
    
    //costruttore
    function __construct($nome, $e) {
        $this->nome=$nome;
        $this->eta=$e;
    }
        
    public function getNome(){    //i metodi di get non ricevo input 
                                    //questo perche devo restituire un valore e
                                    // non trasformarlo
        return $this->nome;
    }
    
    public function getEta(){     //metodo get eta
        return $this->eta;
    }
    
    public function setNome($nuovoNome){  //metodo set nome
        $this->nome= $nuovoNome;
    }
    
    private function setEta($nuovaEta){         //metodo set eta
        $this->eta= $nuovaEta;
    }
    
    public function stampa(){			//stampa
        return "il tuo nome è".$this->Nome."l'età è".$this->Eta."<br>";
    }
    public static function piuGiovane($arr){
        $giovane = $arr[0]; //assegno alla variaible giovane il primo valore estratto dal vettore
        foreach($arr as $valore) {
            if($valore->getEta()<$giovane->getEta()) {
                $giovane = $valore;
            }
        }
        return $giovane;
        }
    }