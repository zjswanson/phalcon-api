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
           "name" => "Server Data Object",
           "purpose" => "Arrive from the Server"
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

        if ($this->request->isPost()) {
            $data["name"] = $_REQUEST['name'] ? $_REQUEST['name'] : "The name field was empty";
            $data["purpose"] = $_REQUEST['purpose'] ? $_REQUEST['purpose'] : "The purpose field was empty";
        }

        $response->setHeader("Access-Control-Allow-Origin", "*");

        $response->setJsonContent($data);

        return $response;
    }

}
