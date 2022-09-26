<?php

class Conversation
{
    public $id;
    public $customer_id;
    public $date;
    public $conversation;

    private $customer;

    /**
     * @param $id
     * @param $customer_id
     * @param $date
     * @param $conversation
     */
    public function __construct($id, $customer_id, $date, $conversation)
    {
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->date = $date;
        $this->conversation = $conversation;
    }

    public static function getConversation($customer_id){
        $pdo=DB::getPDO();
        $stm=$pdo->prepare("SELECT * FROM contact_information WHERE customer_id=?");
        $stm->execute([$customer_id]);
        $c=$stm->fetch(PDO::FETCH_ASSOC);
        $conversation=new Conversation($customer_id ,$c['date'],$c['conversation']);
        return $conversation;
    }

    public function getCustomers() {
        if ($this->customer==null){
            $this->customer=Customer::getCustomers();
        }
        return $this->customer;
    }

    public static function getConversations(){
        $pdo=DB::getPDO();
        $stm=$pdo->prepare("SELECT * FROM contact_information");
        $stm->execute();
        $conversation=[];
        foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $c){
            $conversation[]=new Conversation($c['customer_id'],$c['date'],$c['conversation'],$c['id'],);
        }
        return $conversation;
    }

    public function createConversation(){
        $pdo=DB::getPDO();
        $stm=$pdo->prepare("INSERT INTO contact_information (customer_id, conversation) VALUES (?,?)");
        $stm->execute([ $this->customer_id, $_POST['conversation'] ]);
    }

}