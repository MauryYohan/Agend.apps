<?php

namespace App\Controller;
use App\Entity\Agenda;
use App\Manager\AgendaManager;
use Mina\Controller\AbstractController;

class AgendaController extends AbstractController {

    public function home()
    {
        $agenda_manager = new AgendaManager();
        $rdvs = $agenda_manager->findAll();
        return $this->renderView('agenda/index.php', ['title' => "Homepage", 'agendas' => $rdvs]);
    }

    public function show() {
        $id = $_GET['id'];
        $agenda_manager = new AgendaManager();
        $rdv = $agenda_manager->find($id);
        return $this->renderView("agenda/show.php", ["title" => "Article", 'agenda' => $rdv]);
    }

    public function add() {
        $agenda_manager = new AgendaManager();

        if (!empty($_POST)) {
            $rdv = new Agenda();
            // id, title, details, date, important
            $rdv->setTitle($_POST['title']);
            $rdv->setDetails($_POST['details']);
            $rdv->setDate($_POST['date']);
            $rdv->setImportant($_POST['important']);

            $agenda_manager->add($rdv);

            $this->redirectToRoute('home');
        }
        return $this->renderView('agenda/add.php');
    }

    public function test_add() {
        $agenda_manager = new AgendaManager();
        $agenda_manager->add();
        $rdvs = $agenda_manager->findAll();
        return $this->renderView('agenda/index.php', ['agendas' => $rdvs]);
    }

    public function test_update() {
        $agenda_manager = new AgendaManager();
        $agenda_manager->edit();
        $rdvs = $agenda_manager->findAll();
        return $this->renderView('agenda/index.php', ['agendas' => $rdvs]);
    }

    public function test() {
        $agenda_manager = new AgendaManager();
        $agenda_manager->del();
        $rdvs = $agenda_manager->findAll();
        return $this->renderView('agenda/index.php', ['agendas' => $rdvs]);
    }

}
