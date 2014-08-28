<?php

namespace Ff\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ff\DemoBundle\Form\TareaType;
use Ff\DemoBundle\Entity\Tarea;
use Ff\DemoBundle\Entity\Alumnos\Alumno;
use Ff\DemoBundle\Entity\AlumnoPago;
use Ff\DemoBundle\Entity\Muaythai;
use Ff\DemoBundle\Entity\Jjb;
use Ff\DemoBundle\Entity\Judo;
use Ff\DemoBundle\Entity\Mma;
use Ff\DemoBundle\Entity\Box;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Session\Session;  

class DefaultController extends Controller 
{
    

    //******con este controlador muestro la pantalla principal**********

    public function mostrarAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT a
               FROM FfDemoBundle:Alumnos\Alumno a
               ORDER BY a.apellidop ASC'
        );
         
        $resultado= $query->getResult();
        	
    	if (!$resultado) {
        	throw $this->createNotFoundException(
            	'No se encontraron alumnos'
        	);
    	}


    	return $this->render('FfDemoBundle:Default:index.html.twig', array(
            'resultado' => $resultado, ));
    }

//.................................................................


	//**********este es el controlador para el formulario de ingreso de alumnos*******


    public function mostrar_formularioAction(Request $request) 
    {
    	$tarea = new Tarea();
       
        $tarea->setFechaInicio(new \DateTime('now'));

        $tarea->setFechaFinal(new \DateTime('now'));
        
        $form = $this->createForm(new TareaType(), $tarea);	


        $form->handleRequest($request);

        if ($form->isValid())
        {	
        	//insertar datos en la tabla de alumno


            $alumno = new Alumno();
        	$alumno->setApellidop($tarea->getApellidop());
            $alumno->setApellidom($tarea->getApellidom());
        	$alumno->setNombre($tarea->getNombre());
            $alumno->setEmail($tarea->getEmail());
            $alumno->setCumple($tarea->getCumple());
        	$alumno->setDni($tarea->getDni());
            $alumno->setSexo($tarea->getSexo());
        	$alumno->setTelefonof($tarea->getTelefonof());
            $alumno->setTelefonoc($tarea->getTelefonoc());

            $em = $this->getDoctrine()->getManager();
            $em->persist($alumno);
            $em->flush();


            //Insertar datos en la tabla de alumno pagos

            $em2 = $this->getDoctrine()->getManager();
            $query = $em2->createQuery(
                'SELECT  MAX(a.id)
                   FROM FfDemoBundle:Alumnos\Alumno a
                   '
            );  
            $consulta = $query->getResult();
            $id_encontrado=  $consulta[0][1];

            $pagos= new AlumnoPago();
            $pagos->setIdalumno($id_encontrado);
            $pagos->setPrecio($tarea->getPrecio());
            $pagos->setFechaInicio($tarea->getFechaInicio());
            $pagos->setFechaFinal($tarea->getFechaFinal());
            $pagos->setDisciplina($tarea->getDisciplina());
            $pagos->SetTipodepago($tarea->getTipodepago());
            $pagos->SetVeces($tarea->getVeces());
            $pagos->setVecesasistencia(0);
            $pagos->setVecestotales(0);

            $em3 = $this->getDoctrine()->getManager();
            $em3->persist($pagos);
            $em3->flush();

                    $vecestotales=0;
                    $aux=$tarea->getFechaInicio();
                    while($tarea->getFechaFinal()>$aux)
                    {
                        date_add($aux, date_interval_create_from_date_string('1 days'));
                        $vecestotales= $vecestotales+1;
                    }

                    $vecestotales=$vecestotales/7;
                    $vecestotales=$vecestotales*$tarea->getVeces();
                    $vecestotales= (int)$vecestotales;

            $em4 = $this->getDoctrine()->getManager();
                    $query = $em4->createQuery(
                    'SELECT  MAX(a.id) FROM FfDemoBundle:AlumnoPago a WHERE a.idalumno='.$id_encontrado.'');  

            $consulta = $query->getResult();
            $idaux=  $consulta[0][1];


            $em5= $this->getDoctrine()->getManager();
            $alumnoaux = $em5->getRepository('Ff\DemoBundle\Entity\AlumnoPago')->find($idaux);

            $alumnoaux->setVecestotales($vecestotales);

            $em5->flush();


            // Insertar datos en la tabla de disciplinas


            if($tarea->getDisciplina()== 1){
                $var= new Muaythai();
            }

            if($tarea->getDisciplina()== 2){
                $var = new Jjb();
            }
            
            if($tarea->getDisciplina()== 3){
                $var = new Judo();
            }

            if($tarea->getDisciplina()== 4){
                $var = new Mma();
            }

            if($tarea->getDisciplina()== 5){
                $var = new Box();

            }
                $var->setFechaInicio($tarea->getFechaInicio());
                $var->setPrecio($tarea->getPrecio());
                $var->setSexo($tarea->getSexo());
                $var->SetVeces($tarea->getVeces());
                $var->SetIdpago($idaux);

                $em1 = $this->getDoctrine()->getManager();
                $em1->persist($var);
                $em1->flush();

   



            $apellidop=$tarea->getApellidop();
            $apellidom=$tarea->getApellidom();
            $nombre=$tarea->getNombre();
            $disciplina=$tarea->getDisciplina();
            $precio=$tarea->getPrecio();
            $veces=$tarea->getVeces();

            return $this->render('FfDemoBundle:Default:verificacion.html.twig',  array(
            'apellidop' => $apellidop, 'apellidom' => $apellidom, 'nombre' => $nombre,
            'disciplina' => $disciplina, 'precio' => $precio, 'veces' => $veces, 
            'vecestotales' => $vecestotales,
            ));

        }
       

       return $this->render('FfDemoBundle:Default:Formulario.html.twig', array(
            'form' => $form->createView(),));
        

    }

    public function verificacionAction(){

        return $this->render('FfDemoBundle:Default:verificacion.html.twig',  array(
            'apellidop' => $apellidop, 'apellidom' => $apellidom, 'nombre' => $nombre,
            'disciplina' => $disciplina, 'precio' => $precio, 'veces' => $veces, 
            'vecestotales' => $vecestotales,
            ));


    }

   
    
}
