<?php

namespace Ff\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ff\DemoBundle\Form\Tarea3Type;
use Ff\DemoBundle\Entity\Tarea3;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EstadisticaController extends Controller
{
	public function mostrar_formularioAction(Request $request){

		$tarea3 = new tarea3();
		$tarea3->setFechaInicio(new \DateTime('now'));
        $tarea3->setFechaFinal(new \DateTime('now'));
        $form = $this->createForm(new Tarea3Type(), $tarea3);	

        $form->handleRequest($request);

        if ($form->isValid()){

        	$muay = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\Muaythai')
                        ->findALL();

            $jiu = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\Jjb')
                        ->findALL();

            $box = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\Box')
                        ->findALL();

            $mma = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\Mma')
                        ->findALL();    

            $judo = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\Judo')
                        ->findALL();           

            $fechai= $tarea3->getFechaInicio();            
            $fechaf= $tarea3->getFechaFinal(); 




        	return $this->render('FfDemoBundle:Default:estadistica2.html.twig', array(
            'form' => $form->createView(),'muay'=> $muay,'jiu'=> $jiu, 'box' => $box, 'mma'=>$mma, 'judo'=>$judo, 
            'fechai'=> $fechai,'fechaf'=> $fechaf,
            ));
        }
        return $this->render('FfDemoBundle:Default:estadistica.html.twig', array(
            'form' => $form->createView(),));

	}

	public function analizar_formulario(){
		return $this->render('FfDemoBundle:Default:estadistica2.html.twig', array(
            'form' => $form->createView(),));
	}









}