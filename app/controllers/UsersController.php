<?php

class UsersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $sql = "SELECT * FROM users";
        $result = $connection->query($sql);
        $user = $result->fetchOne();


        $dataString = json_encode($user);
        $this->view->data = $dataString;

        $this->view->testProperty = "<p>I'm a string value inside p tags!</p>";

    }

}
