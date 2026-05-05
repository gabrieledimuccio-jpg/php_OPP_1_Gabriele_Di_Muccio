<?php
class Company {
public $name;
public $location;
public $tot_employees;
public static $total = 0;

public function __construct($name, $location, $tot_employees){
$this->name = $name;
$this->location = $location;
$this->tot_employees = $tot_employees;
}

public function presentation(){
if ($this->tot_employees == 0) {
echo "L'azienda". " " . $this->name . " con sede in". " " . $this->location .  " non ha dipendenti". "\n";
}else{
echo "L'azienda". " " . $this->name . " con sede in". " " . $this->location .  " ha ben" . " " . $this->tot_employees . " dipendenti". "\n";
}
}
public function annualExpenses($stipendioM = 1400){
$spesaAnnuale = $this->tot_employees * $stipendioM * 12;
echo "La spesa annuale dell'azienda". " " . $this->name . " è di" . " " . $spesaAnnuale . "€ \n";
return $spesaAnnuale;
}

public function totAnnualExpenses($stipendio = 1400){
self::$total += $this->annualExpenses($stipendio);
}

public static function printTotAnnualExpenses(){
echo "La spesa totale di tutte le aziende sarà pari a: ". self::$total. "\n";
}
}


$company1 = new Company("n°1","Italia", 50);
$company2 = new Company("n°2","Italia", 60);
$company3 = new Company("n°3","Italia", 0);
$company4 = new Company("n°4","Italia", 80);
$company5 = new Company("n°5","Italia", 90);

$company1->presentation();
$company2->presentation();
$company3->presentation();
$company4->presentation();
$company5->presentation();

$company1->annualExpenses();
$company2->annualExpenses();
$company3->annualExpenses();
$company4->annualExpenses();
$company5->annualExpenses();

$company1->totAnnualExpenses();
$company2->totAnnualExpenses();
$company3->totAnnualExpenses();
$company4->totAnnualExpenses();
$company5->totAnnualExpenses();

Company::printTotAnnualExpenses();

?>