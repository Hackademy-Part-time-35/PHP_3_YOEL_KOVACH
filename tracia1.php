<?php

// 1. Crea una classe Company che abbia i seguenti attributi pubblici:
//  a. name: nome dell’azienda; 
// 	b. location: stato in cui e' ubicata la sede dell’azienda; 
// 	c. tot_employees: numero di dipedenti assunti in quella sede (di default, 0); 

// 2. Crea 5 istanze di 5 aziende diverse 

// 3. Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendenti, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“; 

// 4. Aggiungi un nuovo attributo chiamato $avg_salary nella Classe Company. Aggiorna poi le aziende che hai gia' creato nel punto 2. 

// 5. Implementa un metodo che calcoli la spesa per un numero variabile di mesi (praticamente il metodo deve accettare come parametro N mesi) e poi uno che stampi a schermo l’informazione (sono due metodi diversi); 

// 6. Implementa un attributo statico che tenga traccia di quante aziende sono state create;

//  7. Implementa un metodo statico che stampi a schermo quante aziende sono state create.

//  Extra: 
// 1. Implementa un attributo statico che, in un array, salvi il costo medio annuale relativo ai dipendenti di ogni azienda;
// 2. Implementa un metodo statico che stampi la seguente frase a schermo: “Considerando tutte le aziende nel nostro Gruppo, spendiamo in media un totale di |40000 all’anno”. 

class Company{
    public $name;
    public $location;
    public $totEmployes;
    public $avg_salary;
    public static $company_count = 0;

    public function __construct($name, $location, $totEmployes, $avg_salary){
        $this -> name = $name;
        $this -> location = $location;
        $this -> totEmployes = $totEmployes;
        $this -> avg_salary = $avg_salary;
        self::$company_count++; 
    }
    public function expenses($n){
        return $this->totEmployes * $this->avg_salary * $n;
    }

    public function expensas($n){
        $expensas = $this->expenses($n);
        echo "il costo che abbiamo in $this->name e di $expensas ";

    }

    public function dipendenti (){
        if ($this -> totEmployes == 0) {
            echo "L’ufficio $this->name con sede in $this->location non ha dipendenti\n";
        }else{
            echo "L’ufficio $this->name con sede in $this->location ha ben $this->totEmployes dipendenti\n";
        }
    }

    public static function companyCount(){
        echo "\nabbiamo creato ".self::$company_count;
        return self::$company_count;
    }

};



$azienda1 = new Company("aulab", "roma", 30, 1200);
$azienda2 = new Company("merlo", "cuneo", 1200,2100);
$azienda3 = new Company("toyota", "berlin", 0, 100);
$azienda4 = new Company("samsung", "cina", 2531, 2700);
$azienda5 = new Company("iphone", "north america", 2, 3000);

$azienda1 -> dipendenti();
$azienda2 -> dipendenti();
$azienda3 -> dipendenti();
$azienda4 -> dipendenti();
$azienda5 -> dipendenti();

$azienda1 -> expensas(5);
$azienda2 -> expensas(5);
$azienda3 -> expensas(5);
$azienda4 -> expensas(5);
$azienda5 -> expensas(5);


Company::companyCount()




























?>