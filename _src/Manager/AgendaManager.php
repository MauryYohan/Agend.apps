<?php

namespace App\Manager;
use App\Entity\Agenda;
use Mina\Manager\AbstractManager;

class AgendaManager extends AbstractManager {
    public function find(int $id) {
        return $this->readOne(Agenda::class, $id);
    }

    public function findAll() {
        return $this->readMany(Agenda::class);
    }

    public function add(Agenda $rdv) {
        $this->create(Agenda::class, [
            'title' => $rdv->getTitle(),
            'details' => $rdv->getDetails(),
            'date' => $rdv->getDate(),
            'important' => $rdv->getImportant()
        ]);
    }

    public function edit() {
        $this->update(Agenda::class, [
            'title' => 'Oferta n°4',
        ],1);
    }

    public function del() {
        $this->delete(Agenda::class, 3);
    }
}