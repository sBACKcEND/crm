<?php

include_once "DB.php";
include_once "Company.php";
include_once "Customer.php";
include_once "Conversation.php";
include_once "lib/BladeOne.php";

use eftec\bladeone\BladeOne;

$companys=Company::getCompanys();
$conversation=Conversation::getConversation($_GET['id']);

$updateCustomer=Customer::getCustomer($_GET['id']);

if (isset($_POST['action']) && $_POST['action']=='update') {
    $updateCustomer->name=$_POST['name'];
    $updateCustomer->surname=$_POST['surname'];
    $updateCustomer->phone=$_POST['phone'];
    $updateCustomer->email=$_POST['email'];
    $updateCustomer->surname=$_POST['address'];
    $updateCustomer->position=$_POST['position'];
    $updateCustomer->company_id=$_POST['company_id'];
    $updateCustomer->updateCustomer();
    $conversation->customer_id=$_POST['id'];
    $conversation->date=$_POST['date'];
    $conversation->conversation=$_POST['conversation'];
    $conversation->updateConversation();
    header("location:index.php");
    die();
}

$blade3=new BladeOne();

echo $blade3->run("updateCustomer", ["updateCustomer"=>$updateCustomer, "companys"=>$companys, "conversation"=>$conversation]);
