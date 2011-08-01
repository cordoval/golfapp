<?php

namespace Khepin\GolfBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Khepin\GolfBundle\Form\CourseType;
use Symfony\Component\HttpFoundation\Request;
use Khepin\GolfBundle\Entity\Hole;
use Khepin\GolfBundle\Form\HoleType;
use Khepin\GolfBundle\Entity\Course;

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
     * @Template("KhepinGolfBundle:Course:add.html.twig")
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
        $form = $this->createFormBuilder();
        $form->add('holes', new \Khepin\GolfBundle\Form\ParSetType($course));
        
        return array('form' => $form->getForm()->createView(), 'course' => $course);
    }
    
    /**
     * @Route("/course/savepars/", name="save_pars")
     * @Template("KhepinGolfBundle:Course:setpars.html.twig")
     */
    public function saveparsAction(Request $request){
        $course = $this->getDoctrine()->getRepository('KhepinGolfBundle:Course')->find(5);
        $form = $this->createFormBuilder();
        $form->add('holes', new \Khepin\GolfBundle\Form\ParSetType($course));
        $form = $form->getForm();
        $form->bindRequest($request);
        if($form->isValid()) {
            return new \Symfony\Component\HttpFoundation\Response('ok');
        }
        return array('form' => $form->createView(), 'course' => $course);
    }

}
