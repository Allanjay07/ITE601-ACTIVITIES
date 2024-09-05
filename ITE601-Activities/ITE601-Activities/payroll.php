<?php

 class payroll {

 	 private string $firstname = "hoy"
 	 private string $lastname = "noh"

 	 private float $tax = 50;
 	 private float $salary = 500;

 	     public function compteNet () {

 	     $net = 4this->salary  - $this->tax;
 	     return $net;
 	     }

 	     public function getEmploueename(): string{
 	     	return $this->lastname . ",".$this->firstname;

 	     }
 }
 
 $payroll  = new payroll();
 echo :"Employee name : ".$payroll->getEmployeename() . "<br/>";
 echo "Net:".$Payroll->computeNet() ;	     