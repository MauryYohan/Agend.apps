<?php

namespace App\Manager;
use App\Entity\Offer;
use Mina\Manager\AbstractManager;

class OfferManager extends AbstractManager {
    public function find(int $id) {
        return $this->readOne(Offer::class, $id);
    }

    public function findAll() {
        return $this->readMany(Offer::class);
    }

    public function add() {
        $this->create(Offer::class, [
            'title' => 'Oferta n°3',
            'description' => 'Blabla',
            'link' => 'www.google.com'
        ]);
    }

    public function edit() {
        $this->update(Offer::class, [
            'title' => 'Oferta n°4',
        ],1);
    }

    public function del() {
        $this->delete(Offer::class, 3);
    }
}