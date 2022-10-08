<?php

namespace App\Controller;
use Mina\Controller\AbstractController;

class MainController extends AbstractController {

    /*public function home() {
        return $this->renderView('main/home.php', [
            'title' => "Accueil"
        ]);
    }
    */
    public function legal_term() {
        return $this->renderView('main/legal_term.php', ['title' => "Mentions Légales"]);
    }
    public function test() {
        return $this->redirectToRoute('home');
    }

}
