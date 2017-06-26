<?php

use Phalcon\HTTP\Response;

class EndpointController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function getAction()
    {
       $response = new Response();

       $data =
       [
           "name" => "Object",
           "purpose" => "Do Stuff"
       ];

       $string = "I'm working";

       $response->setHeader("Access-Control-Allow-Origin", "*");

       $response->setJsonContent($data);

       return $response;
    }

    public function postAction()
    {
        $response = new Response();
        $data = [];

        $data["name"] = "Bill";
        $data["purpose"] = "Test REsponse";
        if ($this->request->isPost()) {
            $data["name"] = $_REQUEST['name'];
            $data["purpose"] = $_REQUEST['purpose'];

        }

        $response->setHeader("Access-Control-Allow-Origin", "*");

        $response->setJsonContent($data);

        return $response;
    }

}
