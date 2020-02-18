<?php


namespace App\controller;


class GuestsController extends AbstractController
{
    public function index(){
        $guests = $this->container->getGuestManager()->findAll();

        echo $this->container->getTwig()->render('/guests/index.html.twig', ['guests' => $guests]);
    }

    public function show(int $id) {
        $guest = $this->container->getGuestManager()->findOneById($id);

        echo $this->container->getTwig()->render('/guests/show.html.twig', ['guest' => $guest]);
    }

    public function new(){
        echo $this->container->getTwig()->render('/guests/form.html.twig');
    }

    public function create(){
        $this->container->getGuestManager()->create($_POST);
        $this->index();
    }

    public function delete(int $id){
        $this->container->getGuestManager()->delete($id);
        $this->index();
    }
}