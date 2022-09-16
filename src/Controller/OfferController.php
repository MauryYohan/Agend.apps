<?php

namespace App\Controller;
use App\Manager\OfferManager;
use Mina\Controller\AbstractController;

class OfferController extends AbstractController {

    public function test_find_by_id() {
        $offer_manager = new OfferManager();
        $offer = $offer_manager->find(1);
        return $this->renderView("offer/show.php", [
            'offer' => $offer
        ]);
    }

    public function test_find_all() {
        $offer_manager = new OfferManager();
        $offers = $offer_manager->findAll();
        return $this->renderView('offer/index.php', ['offers' => $offers]);
    }

    public function test_add() {
        $offer_manager = new OfferManager();
        $offer_manager->add();
        $offers = $offer_manager->findAll();
        return $this->renderView('offer/index.php', ['offers' => $offers]);
    }

    public function test_update() {
        $offer_manager = new OfferManager();
        $offer_manager->edit();
        $offers = $offer_manager->findAll();
        return $this->renderView('offer/index.php', ['offers' => $offers]);
    }

    public function test() {
        $offer_manager = new OfferManager();
        $offer_manager->del();
        $offers = $offer_manager->findAll();
        return $this->renderView('offer/index.php', ['offers' => $offers]);
    }

}
