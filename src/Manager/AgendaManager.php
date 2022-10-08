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

  public function findBy(array $criteria, array $order) {
      return $this->readMany(Agenda::class, $criteria, $order);
  }

  public function add(Agenda $appointment) {
    return $this->create(Agenda::class, [
      'title' => $appointment->getTitle(),
      'details' => $appointment->getDetails(),
      'start_at' => $appointment->getStartAt(),
      'important' => $appointment->getImportant()
    ]);
  }

  public function edit(Agenda $appointment) {
    return $this->update(
        Agenda::class, [
        'title' => $appointment->getTitle(),
        'details' => $appointment->getDetails(),
        'start_at' => $appointment->getStartAt(),
        'important' => $appointment->getImportant()
      ],
      $appointment->getId()
    );
  }

  public function remove(Agenda $appointment) {
    return $this->delete(Agenda::class, $appointment->getId());
  }
  
}