<?php

namespace App\Controller;

class RoomsController extends AbstractController {


    public function index(){
        header('Location: ' . $this->configuration['env']['base_path']);
    }

    /**
     * Afficher la page de 1 room
     * Route: GET /rooms/:id
     */
    public function show(int $id) {
        // 1. Récupérer le idcar par son
        $room = $this->container->getRoomManager()->findOneById($id);

        $guests = $this->container->getGuestManager()->findAll();

        //2. Afficher la room
        echo $this->container->getTwig()->render('rooms/show.html.twig', [
            'room' => $room,
            'guests' => $guests,
        ]);
    }

    public function new(){
        echo $this->container->getTwig()->render('rooms/form.html.twig');
    }

    public function create(){
        $this->container->getRoomManager()->create($_POST);
        $this->index();

    }

    public function assignGuest(int $id){
        $this->container->getRoomManager()->update($id, ['number' => $_POST['number'], 'guest_id' => $_POST['guest_id']]);
        $this->show($id);
    }

    public function unassignGuest(int $id){
        $room = $this->container->getRoomManager()->findOneById($id);
        $this->container->getRoomManager()->update($id, ['number' => $room->getNumber(), 'guest_id' => null]);
        $this->show($id);
    }

    public function delete(int $id){
        $this->container->getRoomManager()->delete($id);
        $this->index();
    }
}