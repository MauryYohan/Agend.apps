<?php

namespace App\Controller;
use App\Manager\UserManager;
use Mina\Controller\AbstractController;
use App\Entity\User;

class UserController extends AbstractController {
    public function register() {
        if (!empty($_POST)) {
            $user = new User();
            $userManager = new UserManager();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $userManager->add($user);
            return $this->redirectToRoute('home');
        }
        return $this->renderView('user/register.php', [
            'title' => 'Inscription',
            'type' => 'add'
        ]);
    }
    
    public function connect() {
        if (!empty($_POST)) {
            // On récupère, dans la BDD, si l'email saisi est bien en BDD, et si le bon mot de passe a ete saisi
            /*
            $verify = password_verify($_POST['password'], $password_BDD);
            // Print the result depending if they match
            if ($verify) {
                echo 'Password Verified!';
            } else {
                echo 'Incorrect Password!';
            }
            */
            var_dump($_POST);
            $userManager = new UserManager();
            //$userManager->
        }
        return $this->renderView("user/connexion.php", [
            'title' => 'Connexion',
            'type' => 'connexion'
        ]);
    }
}
