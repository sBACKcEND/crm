<?php

include_once "DB.php";
include_once "Company.php";


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



?>
<table border="1">
    <?php foreach (Company::getCompanys() as $company){ ?>
    <tr>
        <td><?=$company->name?></td>
        <td><?=$company->address?></td>
        <td><?=$company->vat_code?></td>
        <td><?=$company->company_name?></td>
        <td><?=$company->phone?></td>
        <td><?=$company->email?></td>
    </tr>
    <?php } ?>
</table>

