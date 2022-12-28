<?php
    class Auto {
        public $Marca;
        public $Modello;
        public $Targa;
        public $KmTotaliPercorsi;
        public $KmPercorsiUltimoTagliando;
      
      
        public function __construct ($marca, $modello,$targa,$kmtotalipecorsi,$kmpercorsiultimotagliando) {
                $this->Marca=$marca;
                $this->Modello=$modello;
                $this->Targa=$targa;
                $this->KmTotaliPercorsi=$kmtotalipecorsi;
                $this->KmPercorsiUltimoTagliando=$kmpercorsiultimotagliando; 
        }
      
        /*
        metodo chilometriDaUltimoControllo() 
        */
      
        public function chilometriDaUltimoControllo() {
            $Km_Ultimo_Tagliando = $this->KmTotaliPercorsi-$this->KmPercorsiUltimoTagliano;
          
            return $Km_Ultimo_Tagliando;
        }
      
      
      
        /*
        metodo autoDaControllare($v, $c) 
        */
      
            public static function autoDaControllare($v, $c) {
                $controllare = array();
                $i=0;
    
                foreach ($v as $car) {
                    if ($car->chilometriDaUltimoControllo() > $c) {
                        $controllare[$i] = $car;
                        $i++;
                     }
                }
    
                return $controllare;
           }
    }
    $a1 = new Auto("Fiat", "Punto", "A", 20000, 18000);
    $a2 = new Auto("Fiat", "Cinquecento", "B", 4000, 3200);
    $a3 = new Auto("Peugeot", "207", "C", 55000, 40000);
    $a4 = new Auto("Volkswagen", "Golf", "D", 60000, 38000);
    $a5 = new Auto("Renault", "Clio", "E", 80000, 70000);
    $a6 = new Auto("Ford", "Focus", "F", 75000, 50000);
    echo("-- Test costruttore e metodo
    chilometriDaUltimoControllo:<br>");
    confrontaInt($a1->chilometriDaUltimoControllo(), 2000);
    confrontaInt($a2->chilometriDaUltimoControllo(), 800);
    confrontaInt($a3->chilometriDaUltimoControllo(), 15000);
    confrontaInt($a4->chilometriDaUltimoControllo(), 22000);
    echo("-- Test metodo autoDaControllare:<br>");
    $a = array($a1,$a2,$a3,$a4,$a5,$a6);
    $b = Auto::autoDaControllare($a, 10000);
    $ris = "";
    foreach ($b as $x){
    $ris.=$x->targa.",";
    }
    confronta($ris, "C,D,F,");
    function confrontaInt($a, $b) {
    echo($a." (corretta: ".$b.") ".($a==$b?"OK":"ERR"));
    echo"<br>";
    }
    function confronta($a, $b) {
    echo($a." (corretta: ".$b.") ".($a==$b?"OK":"ERR"));
    echo"<br>";
    }
        
        
        
        
        
       
     
        
        
        
        
        