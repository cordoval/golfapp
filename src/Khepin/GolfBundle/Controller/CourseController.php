<?php

namespace Khepin\GolfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Khepin\GolfBundle\Form\CourseType;
use Symfony\Component\HttpFoundation\Request;
use Khepin\GolfBundle\Entity\Hole;
use Khepin\GolfBundle\Form\HoleType;

class CourseController extends Controller {

    /**
     * Show form to create a new Golf Course
     * 
     * @Route("/course/add", name="course_add")
     * @Template()
     */
    public function addAction() {
        $form = $this->createForm(new CourseType());
        return array('form' => $form->createView());
    }
    
    /**
     * Save the form (if form is valid) or redirect to add
     * 
     * @Route("/course/create", name="course_create")
     * @Template("KhepinGolfBundle:Course:add")
     */
    public function createAction(Request $request) {
        $form = $this->createForm(new CourseType());
        $form->bindRequest($request);
        if($form->isValid()){
            $course = $form->getData();
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($course);
            $em->flush();
            return $this->redirect($this->generateUrl('course_setpars', array('id' => $course->getId())));
        }
        return array('form' => $form->createView());
    }
    
    /**
     * @Route("/course/show/{id}", name="course_show")
     * @Template()
     * @param type $id 
     */
    public function showAction($id){
        $course = $this->getDoctrine()->getRepository('KhepinGolfBundle:Course')->find($id);
        return array('course' => $course);
    }
    
    /**
     * @Route("/course/setpars/{id}", name="course_setpars")
     * @Template()
     * @param integer $id 
     */
    public function setparsAction($id){
        $course = $this->getDoctrine()->getRepository('KhepinGolfBundle:Course')->find($id);
        $data = array();
        $form = $this->createFormBuilder();
        for($i = 1; $i <= $course->getHolesNumber(); $i++){
            $hole = new Hole();
            $hole->setCourse($course);
            $hole->setNumber($i);
            $data['hole_'.$i] = $hole;
            $form->add('hole_'.$i, new HoleType());
        }
//        $form = $this->createFormBuilder(array('game' => $data));
//        $form->add('game', new \Khepin\GolfBundle\Form\ParSetType($course));
        $form->setData($data);
        
        return array('form' => $form->getForm()->createView(), 'course' => $course);
    }

}
