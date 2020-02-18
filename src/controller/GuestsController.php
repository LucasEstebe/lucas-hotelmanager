<?php


namespace App\controller;


class GuestsController extends AbstractController
{
    public function index(){
        $guests = $this->container->getGuestManager()->findAll();

        echo $this->container->getTwig()->render('/guests/index.html.twig', ['guests' => $guests]);
    }

    public function show(){}

    public function new(){
        echo $this->container->getTwig()->render('/guests/form.html.twig');
    }

    public function create(){
        $this->container->getGuestManager()->create($_POST);
        $this->index();
    }
}