<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ContactsController extends Controller
{
    /**
     * @Route("/contacts", name="liste contacts", methods={"GET"})
     */
    public function show()
    {
        return new Response('show');
    }
    
    /**
     * @Route("/contacts/new", name="cr�ation contact", methods={"GET"})
     */
    public function Create()
    {
        return new Response('Create');
    }
    
    /**
     * @Route("/contacts/edit/{index}", name="modification contact", methods={"GET"})
     */
    public function modify($index)
    {
        return new Response('modify');
    }
    
    /**
     * @Route("/contacts/update", name="maj contact", methods={"POST"})
     */
    public function update($index)
    {
        return new Response('Update');
    }
    
    /**
     * @Route("/contacts/display/{index}", name="aff contact", methods={"GET"})
     */
    public function display($index)
    {
        return new Response('display');
    }
}
