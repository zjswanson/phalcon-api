<?php

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function registerAction()
    {
      $user = new Users();

      $success = $user->save(
        $this->request->getPost(),
        [
          "name",
          "emailid",
        ]
      );
      if ($success) {
        echo "thanks for registering!";
      } else {
        echo "sorry, the following problems were generated: ";
        $messages = $user->getMessages();

        foreach ($messages as $message) {
          echo $messate->getMessage(), "<br/>";
        }
      }
    $this->view->disable();

    // echo "I'm a registration route!";
  }
}
