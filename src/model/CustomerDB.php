<?php


namespace App\model;


class CustomerDB
{
    protected $data;

    public function __construct()
    {
        $db = new ThuchanhDB();
        $this->data = $db->connect();
    }

    public function getAll()
    {
        $sql = "select * from thithuchanh";
        $stmt = $this->data->query($sql);
        return $stmt->fetchAll();
    }

    public function getAdd($customer)
    {
        $sql = "insert into thithuchanh (name, category, price, amount, date, status) 
                                values (:name, :category, :price, :amount, :date, :status)";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':name',    $customer->getName());
        $stmt->bindParam(':category',$customer->getCategory());
        $stmt->bindParam(':price',   $customer->getPrice());
        $stmt->bindParam(':amount',  $customer->getAmount());
        $stmt->bindParam(':date',    $customer->getDate());
        $stmt->bindParam(':status',  $customer->getStatus());
        $stmt->execute();
    }

    public function getById($id)
    {
        $sql = "select * from thithuchanh where id =:id";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getEdit($newCustomer){
        $sql  = "update thithuchanh set name = :name, category=:category,price = :price, amount = :amount, date = :date, status = :status where id = :id";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':name',     $newCustomer->getName());
        $stmt->bindParam(':category', $newCustomer->getCategory());
        $stmt->bindParam(':price',    $newCustomer->getPrice());
        $stmt->bindParam(':amount',    $newCustomer->getAmount());
        $stmt->bindParam(':date',    $newCustomer->getDate());
        $stmt->bindParam(':status',    $newCustomer->getStatus());
        $stmt->bindParam(':id',       $newCustomer->getId());
        $stmt->execute();

    }
    public function customerDelete($id)
    {
        $sql = "delete from thithuchanh where id = :id";
        $stmt = $this->data->prepare($sql);
        $stmt->bindParam(':id' , $id);
        $stmt->execute();

    }

    public function getSearch($search)
    {
        $sql = "SELECT * FROM thithuchanh WHERE `name` LIKE '$search'";
        $stmt = $this->data->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}