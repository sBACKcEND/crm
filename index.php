<?php

include_once "DB.php";
include_once "Company.php";
include_once "Customer.php";
include "Conversation.php";
include_once "lib/BladeOne.php";
use  eftec\bladeone\BladeOne;

if (isset($_GET['delete_id'])){
    $company=Company::getCompany($_GET['delete_id']);
    $company->delete();
}

if (isset($_GET['delete_id'])){
    $customer=Customer::getCustomer($_GET['delete_id']);
    $customer->delete();
}

$companys = Company::getCompanys();
$blade=new BladeOne();
echo $blade->run("companys", ["companys"=>$companys]);

$customers = Customer::getCustomers();
$blade1=new BladeOne();
echo $blade1->run("customers", ["customers"=>$customers]);

//$blade=new BladeOne();
//echo $blade->run("companys", ["title"=>"Naujas", "companys"=>$companys]);

//$customers=Customer::getCustomers();
//$blade=new BladeOne();
//echo $blade->run("customers", ["customers"=>$customers]);
//
//$companys=Company::getCompanys();
//$blade=new BladeOne();
//echo $blade->run("companys",["companys"=>$companys]);


/*
$c=Country::getCountry(20);
echo "Salis: $c->name, populiacija $c->population ";
$c->population=5;
$c->save();

$lie=Country::getCountry(28);
$lie->name="LIETUVA";
$lie->save();
*/
/*
$countries=Country::getCountries();
foreach ($countries as $country){
    if ($country->population>1000000){
        $country->name='Didele: '.$country->name;
        $country->save();
    }

    echo "$country->name <br>";
}*/

//$company=Company::getCompany(1);
//$company->delete();



//?>
<!--<table border="1">-->
<!--    --><?php //foreach (Company::getCompanys() as $company){ ?>
<!--    <tr>-->
<!--        <td>--><?//=$company->name?><!--</td>-->
<!--        <td>--><?//=$company->address?><!--</td>-->
<!--        <td>--><?//=$company->vat_code?><!--</td>-->
<!--        <td>--><?//=$company->company_name?><!--</td>-->
<!--        <td>--><?//=$company->phone?><!--</td>-->
<!--        <td>--><?//=$company->email?><!--</td>-->
<!--    </tr>-->
<!--    --><?php //} ?>
<!--</table>-->

