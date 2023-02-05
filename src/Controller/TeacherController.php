<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
Use Symfony\Component\HttpFoundation\Response;

class TeacherController extends AbstractController
{
    #[Route('/teacher/{name}', name: 'app_teacher')]
    public function index1($name)
    {
        return $this->render('showTeacher', [
            'controller_name' => 'TeacherController','name'=>$name
        ]);
    }
    #[Route('/hello',name:'app')]
    public function index()
    {
        return $this->forward('App\Controller\StudentController::index');
    }
    #[Route('/showTeacher/{name}',name:'app_teacher_sh')]
    public function showTeacher($name):Response{
        return new Response('Hello '.$name);
    }

}
