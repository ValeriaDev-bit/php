<?php
abstract class Persona {
    private $nome;
    public function __construct($nm) {
        $this->nome = $nm;
    }
    //dato che l'anzianita della persona varia a seconda del soggetto fiscale
    //lo si definisce come astratta lasciando alle classi concrete successive
    //il compito di definire una implementazione corretta
    abstract public function anzianita($anno);
    //il metodo seguente invece definisce il soggetto più anziano
    //essendo un metodo static non ha bisogno di essere istanziato, quindi non
    //viene violato il principio per il quale da una classe astratta non si 
    //possono creare degli oggetti
    static public function piuAnziano($arr,$anno) {
        $anziano = $arr[0];
        foreach($arr as $valore) {
            //se l'anzianita dell'oggetto corrente è meggiore di quella
            //associato alla variabile $anziano
            if($valore->anzianita($anno)>$anziano->anzianita($anno)) {
                //si aggiorna il contenuto della variabile $anziano
                $anziano = $valore;
            }
        }
        return $anziano;
    } 
    public function getNome(){
        return $this->nome;
    }
}
//definisco le esensioni della classe persona su impiegato, straniero e pensionato
class Pensionato extends Persona {
    private $annoPensione;
    public function __construct($nome,$annoP) {
        parent::__construct($nome); //richiamo il costruttore della super classe in modo 
                                    //da inizializzare il valore dell'attributo nome
        $this->annoPensione = $annoP;
    }
    //dato che si tratta di una classe concreta che estende una classe astratta devo 
    //implementare i metodi astratti
    public function anzianita($anno) {
        return $anno-$this->annoPensione;
    }

    public function getAnnoPensione() {
        return $this->annoPensione;
    }

}
class Impiegato extends Persona {
    private $annoAssunzione;
    public function __construct($nome,$annoA) {
        parent::__construct($nome); //richiamo il costruttore della super classe in modo 
                                    //da inizializzare il valore dell'attributo nome
        $this->annoAssunzione = $annoA;
    }
    //dato che si tratta di una classe concreta che estende una classe astratta devo 
    //implementare i metodi astratti
    public function anzianita($anno) {
        return $anno-$this->annoAssunzione;
    }

    public function getAnnoAssunzione() {
        return $this->annoAssunzione;
    }

}
class Stranieto extends Persona {
    private $annoIngresso;
    public function __construct($nome,$annoI) {
        parent::__construct($nome); //richiamo il costruttore della super classe in modo 
                                    //da inizializzare il valore dell'attributo nome
        $this->annoIngresso = $annoI;
    }
    //dato che si tratta di una classe concreta che estende una classe astratta devo 
    //implementare i metodi astratti
    public function anzianita($anno) {
        return $anno-$this->annoIngresso;
    }

    public function getAnnoIngresso() {
        return $this->annoIngresso;
    }

}