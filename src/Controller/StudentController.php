<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
Use Symfony\Component\HttpFoundation\Response;


Class StudentController extends AbstractController{

    public function index():Response{
        return new Response('Bonjour mes étudiants');
    }
}