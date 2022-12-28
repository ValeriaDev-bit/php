<?php
class Data {
  private $giorno;
  private $mese;
  private $anno;
  function __construct($g=1, $m=1,$a=2020) {
    //con l'utlizzo dei valori di default se invoco il costruttore senza
    //passare valori allora la data sarà impostata usando i valori di default
    $this->giorno=$g;
    $this->mese=$m;
    $this->anno=$a;
  }
  function setGiorno($g) {
    $this->giorno=$g;
  }
  function setMese($m) {
    $this->mese=$m;
  }
  function setAnno($a) {
    $this->anno=$a;
  }
  function getGiorno() {
    return $this->giorno;
  }
  function getMese() {
    return $this->mese;
  }
  function getAnno() {
    return $this->anno;
  }
  function __toString() {
    return $this->giorno."/".$this->mese."/".$this->anno;
  }
  /*
  il metodo equals deve verificare se l'oggetto corrente e
  quello passato in input sono uguali, ossia il loro attributi 
  hanno gli stessi valori
  */
  function __equals($that) {
       return $this->giorno == $that->getGiorno() && 
              $this->mese == $that->getMese() &&
              $this->anno == $that->getAnno();
       // il test restituisce true o false a seconda delle circostanze         
  }
}