<?php


namespace App\controller;
use App\model\CustomerDB;
use App\model\Customer;
class CustomerController
{
    protected $data;

    public function __construct()
    {
        $this->data = new CustomerDB();
    }

    public function index()
    {
        $customers = $this->data->getAll();
        include "src/view/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include 'src/view/add.php';
        } else {
            $name = $_REQUEST['name'];
            $category = $_REQUEST['category'];
            $price = $_REQUEST['price'];
            $amount = $_REQUEST['amount'];
            $date = $_REQUEST['date'];
            $status = $_REQUEST['status'];
            $customer = new Customer($name,$category,$price, $amount, $date, $status);
            $this->data->getAdd($customer);
            header('location: index.php');


        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET"){
            $id = $_REQUEST['id'];
            $customer = $this->data->getById($id);
            include 'src/view/edit.php';
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $category = $_REQUEST['category'];
            $price = $_REQUEST['price'];
            $amount = $_REQUEST['amount'];
            $date = $_REQUEST['date'];
            $status = $_REQUEST['status'];
            $customers = new Customer($name,$category, $price, $amount, $date, $status);
            $customers->setId($id);
            $this->data->getEdit($customers);
            header('location:index.php');
        }
    }

    public function delete($id)
    {
        if($_REQUEST['id']){
            $this->data->customerDelete($id);
        }
        header('location: index.php');
    }

    public function search()
    {
        $search = '%'. $_REQUEST['search'] . '%';
        $customers = $this->data->getSearch($search);
        include "src/view/search.php";
    }

}