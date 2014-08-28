<?php

namespace Ff\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ff\DemoBundle\Form\TareaType;
use Ff\DemoBundle\Form\tarea2Type;
use Ff\DemoBundle\Entity\Tarea;
use Ff\DemoBundle\Entity\tarea2;
use Ff\DemoBundle\Entity\Alumnos\Alumno;
use Ff\DemoBundle\Entity\AlumnoPago;
use Ff\DemoBundle\Entity\Muaythai;
use Ff\DemoBundle\Entity\Jjb;
use Ff\DemoBundle\Entity\Judo;
use Ff\DemoBundle\Entity\Mma;
use Ff\DemoBundle\Entity\Box;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DetalleAlumnoController extends Controller
{

	    public function mostrar_alumnoAction($id){


                $alumno = $this-> getDoctrine()
                    ->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')
                    ->find($id);

                $alumnop = $this-> getDoctrine()
                    ->getRepository('Ff\DemoBundle\Entity\AlumnoPago')
                    ->findBy(
                        array('idalumno'  => $id),
                        array('id' => 'DESC')
                    );
             	
              	
                return $this->render('FfDemoBundle:Default:alumno.html.twig', array(
                    'alumno' => $alumno,'alumnop' => $alumnop, 'id' => $id,  ));
        }

        public function mostrar_alumno_asistenciaAction($id){

                $alumno = $this-> getDoctrine()
                    ->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')
                    ->find($id);

                $alumnop = $this-> getDoctrine()
                    ->getRepository('Ff\DemoBundle\Entity\AlumnoPago')
                    ->findBy(
                        array('idalumno'  => $id),
                        array('id' => 'DESC')
                    );

                /////*****************************************************************
                    
                $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery(
                    'SELECT  MAX(a.id) FROM FfDemoBundle:AlumnoPago a WHERE a.idalumno='.$id.'');  

                $consulta = $query->getResult();
                $idUltPago=  $consulta[0][1];


                $em2 = $this->getDoctrine()->getManager();
                $alumnop1 = $em2->getRepository('Ff\DemoBundle\Entity\AlumnoPago')->find($idUltPago);
                    

                $asistencia = $alumnop1->getVecesasistencia();

                $asistencia = $asistencia + 1;

                $alumnop1->setVecesasistencia($asistencia);

                $em2->flush();
                      
                return $this->render('FfDemoBundle:Default:alumno.html.twig', array(
                    'alumno' => $alumno,'alumnop' => $alumnop, 'id' => $id,  ));
        }

        public function mostrar_formulario_rematriculaAction(Request $request, $id){


            $tarea2 = new tarea2();
       
            $tarea2->setFechaInicio(new \DateTime('now'));

            $tarea2->setFechaFinal(new \DateTime('now'));
            
            $form = $this->createForm(new tarea2Type(), $tarea2); 


            $form->handleRequest($request);

            $alumno = $this-> getDoctrine()
                        ->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')
                        ->find($id);
            $apellidop=$alumno->getApellidop();
            $apellidom=$alumno->getApellidom();
            $nombre=$alumno->getNombre();

            if ($form->isValid())
            {   


                // ingreso los datos en la tabla de alumno pagos
                $pagos= new AlumnoPago();
                $pagos->setFechaInicio($tarea2->getFechaInicio());
                $pagos->setIdalumno($id);
                $pagos->setPrecio($tarea2->getPrecio());
                $pagos->setFechaFinal($tarea2->getFechaFinal());
                $pagos->setDisciplina($tarea2->getDisciplina());
                $pagos->SetTipodepago($tarea2->getTipodepago());
                $pagos->SetVeces($tarea2->getVeces());
                $pagos->setVecesasistencia(0);
                $pagos->setVecestotales(0);

                $em3 = $this->getDoctrine()->getManager();
                $em3->persist($pagos);
                $em3->flush();

                        $vecestotales=0;
                        while($tarea2->getFechaFinal()>$tarea2->getFechaInicio()){
                            date_add($tarea2->getFechaInicio(), date_interval_create_from_date_string('1 days'));
                            $vecestotales= $vecestotales+1;
                        }
                        $vecestotales=$vecestotales/7;
                        $vecestotales=$vecestotales*$tarea2->getVeces();
                        $vecestotales= (int)$vecestotales;
               
                $em4 = $this->getDoctrine()->getManager();
                    $query = $em4->createQuery(
                    'SELECT  MAX(a.id) FROM FfDemoBundle:AlumnoPago a WHERE a.idalumno='.$id.'');  

                $consulta = $query->getResult();
                $idaux=  $consulta[0][1];


                $em5= $this->getDoctrine()->getManager();
                $alumnoaux = $em5->getRepository('Ff\DemoBundle\Entity\AlumnoPago')->find($idaux);

                $alumnoaux->setVecestotales($vecestotales);

                $em5->flush();


                // ingreso datos en disciplinas *************************************************

                if($tarea2->getDisciplina()== 1){
                    $var= new Muaythai();
                }

                if($tarea2->getDisciplina()== 2){
                    $var = new Jjb();
                }
                
                if($tarea2->getDisciplina()== 3){
                    $var = new Judo();
                }

                if($tarea2->getDisciplina()== 4){
                    $var = new Mma();
                }

                if($tarea2->getDisciplina()== 5){
                    $var = new Box();

                }
                    $var->setFechaInicio($tarea2->getFechaInicio());
                    $var->setPrecio($tarea2->getPrecio());
                    $var->setSexo('3');
                    $var->SetVeces($tarea2->getVeces());
                    $var->SetIdpago($idaux);

                    $em1 = $this->getDoctrine()->getManager();
                    $em1->persist($var);
                    $em1->flush();

                            

                return $this->render('FfDemoBundle:Default:verificacionRematricula.html.twig',  array(
                'apellidop' => $apellidop, 'apellidom' => $apellidom, 'nombre' => $nombre,
                ));

            }
       
            return $this->render('FfDemoBundle:Default:rematricula.html.twig', array(
            'form' => $form->createView(),'apellidop' => $apellidop, 'apellidom' => $apellidom, 'nombre' => $nombre,));
        }




        public function mostrar_verificacionAction(){

        return $this->render('FfDemoBundle:Default:verificacion.html.twig',  array(
            'apellidop' => $apellidop, 'apellidom' => $apellidom, 'nombre' => $nombre,
            ));
        }  




        /* aqui empieza el controlador que edita los datos del alumno

        *************************
        ************************
        *************************


        */





        public function editarAction(Request $request, $id){

            $em = $this->getDoctrine()->getManager();
            $alumno = $em->getRepository('Ff\DemoBundle\Entity\Alumnos\Alumno')->find($id);

            $apellidop=$alumno->getApellidop();
            $apellidom=$alumno->getApellidom();
            $nombre=$alumno->getNombre();

            $alumnop = $this-> getDoctrine()
                    ->getRepository('Ff\DemoBundle\Entity\AlumnoPago')
                    ->findBy(
                        array('idalumno'  => $id),
                        array('id' => 'DESC')
                    );

            //************************************************************************
                    
            $em1 = $this->getDoctrine()->getManager();
                    $query = $em1->createQuery(
                    'SELECT  MAX(a.id) FROM FfDemoBundle:AlumnoPago a WHERE a.idalumno='.$id.'');  

                $consulta = $query->getResult();
                $idUltPago=  $consulta[0][1];


            $em2 = $this->getDoctrine()->getManager();
            $alumnop1 = $em2->getRepository('Ff\DemoBundle\Entity\AlumnoPago')->find($idUltPago);

            //***********************************************************************  

            $tarea = new Tarea();
            $tarea->setNombre($alumno->getNombre());
            $tarea->setApellidop($alumno->getApellidop());
            $tarea->setApellidom($alumno->getApellidom());
            $tarea->setDni($alumno->getDni());
            $tarea->setTelefonoc($alumno->getTelefonoc());
            $tarea->setTelefonof($alumno->getTelefonof()); 
            $tarea->setEmail($alumno->getEmail()); 
            $tarea->setCumple($alumno->getCumple()); 
            $tarea->setSexo($alumno->getSexo());
            $tarea->setDisciplina($alumnop1->getDisciplina());
            $var = $alumnop1->getDisciplina();
            $tarea->setFechaFinal($alumnop1->getFechafinal());
            $tarea->setFechaInicio($alumnop1->getFechainicio());
            $tarea->setPrecio($alumnop1->getPrecio());
            $tarea->SetTipodepago($alumnop1->getTipodepago());
            $tarea->SetVeces($alumnop1->getVeces());
            
            $form = $this->createForm(new TareaType(), $tarea); 
            $form->handleRequest($request);



            if ($form->isValid())
            {
                $alumno->setNombre($tarea->getNombre());
                $alumno->setApellidop($tarea->getApellidop());
                $alumno->setApellidom($tarea->getApellidom());
                $alumno->setDni($tarea->getDni());
                $alumno->setTelefonoc($tarea->getTelefonoc());
                $alumno->setEmail($tarea->getEmail()); 
                $alumno->setCumple($tarea->getCumple());
                $alumno->setTelefonof($tarea->getTelefonof()); 
                $alumnop1->setDisciplina($tarea->getDisciplina());
                $alumnop1->setFechafinal($tarea->getFechaFinal());
                $alumnop1->setFechainicio($tarea->getFechaInicio());
                $alumnop1->setPrecio($tarea->getPrecio());
                $alumnop1->SetTipodepago($tarea->getTipodepago());
                $alumnop1->SetVeces($tarea->getVeces());

                $em->flush();
                $em2->flush();

                /*        $vecestotales=0;
                        while($tarea->getFechaFinal()>$tarea->getFechaInicio()){
                            date_add($tarea->getFechaInicio(), date_interval_create_from_date_string('1 days'));
                            $vecestotales= $vecestotales+1;
                        }
                        $vecestotales=$vecestotales/7;
                        $vecestotales=$vecestotales*$tarea->getVeces();
                        $vecestotales= (int)$vecestotales;


                $em3= $this->getDoctrine()->getManager();
                $alumnoaux = $em3->getRepository('Ff\DemoBundle\Entity\AlumnoPago')->find($idUltPago);

                $alumnoaux->setVecestotales($vecestotales);

                $em3->flush();*/

                //***********************************************************************
                    $em4 = $this->getDoctrine()->getManager();
                     
                    if($var== 1){     
                         $query = $em4->createQuery(
                         'SELECT  MAX(a.id) FROM FfDemoBundle:Muaythai a WHERE a.idpago='.$idUltPago.''); 
                         $consulta= $query->getResult();
                         $auxid=$consulta[0][1];

                         $em5 = $this->getDoctrine()->getManager();
                         $disciplina = $em5->getRepository('Ff\DemoBundle\Entity\Muaythai')->find($auxid);
                    }

                    if($var== 2){
                         $query = $em4->createQuery(
                        'SELECT  MAX(a.id) FROM FfDemoBundle:Jjb a WHERE a.idpago='.$idUltPago.''); 
                         $consulta= $query->getResult();
                         $auxid=$consulta[0][1];

                         $em5 = $this->getDoctrine()->getManager();
                         $disciplina = $em5->getRepository('Ff\DemoBundle\Entity\Jjb')->find($auxid);
                    }
                    
                    if($var== 3){
                         $query = $em4->createQuery(
                        'SELECT  MAX(a.id) FROM FfDemoBundle:Judo a WHERE a.idpago='.$idUltPago.'');
                         $consulta= $query->getResult();
                         $auxid=$consulta[0][1];

                         $em5 = $this->getDoctrine()->getManager();
                         $disciplina = $em5->getRepository('Ff\DemoBundle\Entity\Judo')->find($auxid);
                    }

                    if($var == 4){
                         $query = $em4->createQuery(
                        'SELECT  MAX(a.id) FROM FfDemoBundle:Mma a WHERE a.idpago='.$idUltPago.''); 
                         $consulta= $query->getResult();
                         $auxid=$consulta[0][1];

                         $em5 = $this->getDoctrine()->getManager();
                         $disciplina = $em5->getRepository('Ff\DemoBundle\Entity\Mma')->find($auxid);
                    }

                    if($var== 5){
                         $query = $em4->createQuery(
                        'SELECT  MAX(a.id) FROM FfDemoBundle:Box a WHERE a.idpago='.$idUltPago.''); 
                         $consulta= $query->getResult();
                         $auxid=$consulta[0][1];

                         $em5 = $this->getDoctrine()->getManager();
                         $disciplina = $em5->getRepository('Ff\DemoBundle\Entity\box')->find($auxid);

                    }

                   
                       
                    if($var== $tarea->getDisciplina() ){ 

                        $disciplina->SetPrecio($tarea->getPrecio());
                        $disciplina->SetFechainicio($tarea->getFechaInicio());
                        $disciplina->SetSexo($tarea->getSexo());
                        $em5->flush();
                    }
                    else{

                        $disciplina->SetPrecio(0);
                        $disciplina->setSexo(4);
                        $em5->flush();


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
                            $var->SetIdpago($idUltPago);

                            $em6 = $this->getDoctrine()->getManager();
                            $em6->persist($var);
                            $em6->flush();

                    }
                


                    //******************************************************

                    $vecestotales=0;
                        while($tarea->getFechaFinal()>$tarea->getFechaInicio()){
                            date_add($tarea->getFechaInicio(), date_interval_create_from_date_string('1 days'));
                            $vecestotales= $vecestotales+1;
                        }
                        $vecestotales=$vecestotales/7;
                        $vecestotales=$vecestotales*$tarea->getVeces();
                        $vecestotales= (int)$vecestotales;


                $em3= $this->getDoctrine()->getManager();
                $alumnoaux = $em3->getRepository('Ff\DemoBundle\Entity\AlumnoPago')->find($idUltPago);

                $alumnoaux->setVecestotales($vecestotales);

                $em3->flush();













                
                return $this->render('FfDemoBundle:Default:alumno.html.twig', array(
                    'alumno' => $alumno,'alumnop' => $alumnop, 'id' => $id,  ));
                
            }
        return $this->render('FfDemoBundle:Default:editar.html.twig', array(
            'form' => $form->createView(),'apellidop' => $apellidop, 'apellidom' => $apellidom, 'nombre' => $nombre,));

        }

}
