<?php

namespace App\Controller;

use App\Entity\Agenda;
use Mina\Controller\AbstractController;
use App\Manager\AgendaManager;

class AgendaController extends AbstractController {

  public function home() {
    $appointmentManager = new AgendaManager();
    return $this->renderView('agenda/index.php', [
      # 'appointments' => $appointmentManager->findAll()
      'appointments' => $appointmentManager->findBy([], array('start_at' => 'DESC'))
    ]);
  }

  public function add() {
    if (!empty($_POST)) {
      $appointment = new Agenda();
      $appointmentManager = new AgendaManager();
      $appointment->setTitle($_POST['title']);
      $appointment->setDetails($_POST['details']);
      $appointment->setStartAt($_POST['start_at']);
      if (isset($_POST['important'])) {
        $appointment->setImportant(1);
      } else {
        $appointment->setImportant(0);
      }
      $appointmentManager->add($appointment);
      return $this->redirectToRoute('home');
    }
    return $this->renderView('agenda/add.php', [
      'type' => 'add'
    ]);
  }

  public function show() {
    if (!empty($_GET['id'])) {
      $appointmentManager = new AgendaManager();
      $appointment = $appointmentManager->find($_GET['id']);
      return $this->renderView('agenda/show.php', [
        'title' => $appointment->getTitle(),
        'appointment' => $appointment
      ]);
    }
  }

  public function edit() {
    if (!empty($_GET['id'])) {
      $appointmentManager = new AgendaManager();
      $appointment = $appointmentManager->find($_GET['id']);
      if (!empty($_POST)) {
        $appointment->setTitle($_POST['title']);
        $appointment->setDetails($_POST['details']);
        $appointment->setStartAt($_POST['start_at']);
        if (isset($_POST['important'])) {
          $appointment->setImportant(1);
        } else {
          $appointment->setImportant(0);
        }
        $appointmentManager->edit($appointment);
        return $this->redirectToRoute('show', ['id' => $appointment->getId()]);
      }
      return $this->renderView('agenda/edit.php', [
        'title' => $appointment->getTitle() . ' (editer)',
        'appointment' => $appointment,
        'type' => 'edit'
      ]);
    }
  }

  public function delete() {
    if (!empty($_GET['id'])) {
      $appointmentManager = new AppointmentManager();
      $appointmentManager->remove($appointmentManager->find($_GET['id']));
      return $this->redirectToRoute('home');
    }
  }

}