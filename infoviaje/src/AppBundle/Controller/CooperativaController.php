<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cooperativa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Cooperativa controller.
 *
 * @Route("cooperativa")
 */
class CooperativaController extends Controller
{
    /**
     * Lists all cooperativa entities.
     *
     * @Route("/", name="cooperativa_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cooperativas = $em->getRepository('AppBundle:Cooperativa')->findAll();

        return $this->render('cooperativa/index.html.twig', array(
            'cooperativas' => $cooperativas,
        ));
    }

    /**
     * Creates a new cooperativa entity.
     *
     * @Route("/new", name="cooperativa_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $cooperativa = new Cooperativa();
        $form = $this->createForm('AppBundle\Form\CooperativaType', $cooperativa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cooperativa);
            $em->flush();

            return $this->redirectToRoute('cooperativa_show', array('id' => $cooperativa->getId()));
        }

        return $this->render('cooperativa/new.html.twig', array(
            'cooperativa' => $cooperativa,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cooperativa entity.
     *
     * @Route("/{id}", name="cooperativa_show")
     * @Method("GET")
     */
    public function showAction(Cooperativa $cooperativa)
    {
        $deleteForm = $this->createDeleteForm($cooperativa);

        return $this->render('cooperativa/show.html.twig', array(
            'cooperativa' => $cooperativa,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cooperativa entity.
     *
     * @Route("/{id}/edit", name="cooperativa_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cooperativa $cooperativa)
    {
        $deleteForm = $this->createDeleteForm($cooperativa);
        $editForm = $this->createForm('AppBundle\Form\CooperativaType', $cooperativa);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cooperativa_edit', array('id' => $cooperativa->getId()));
        }

        return $this->render('cooperativa/edit.html.twig', array(
            'cooperativa' => $cooperativa,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cooperativa entity.
     *
     * @Route("/{id}", name="cooperativa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Cooperativa $cooperativa)
    {
        $form = $this->createDeleteForm($cooperativa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cooperativa);
            $em->flush();
        }

        return $this->redirectToRoute('cooperativa_index');
    }

    /**
     * Creates a form to delete a cooperativa entity.
     *
     * @param Cooperativa $cooperativa The cooperativa entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cooperativa $cooperativa)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cooperativa_delete', array('id' => $cooperativa->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
