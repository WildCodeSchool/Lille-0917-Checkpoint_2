<?php

namespace Controller;


use Model\Program;
use Model\ProgramManager;

class ProgramController extends AbstractController
{

    /**
     * Get today programs
     * @return string
     */
    public function indexAction()
    {
        $programManager = new ProgramManager();
        $programs = $programManager->findAll();
        return $this->_twig->render('Program/index.html.twig', [
           'programs' => $programs,
        ]);
    }

    /**
     * Add one program
     * @return string
     */
    public function addAction()
    {
        $program = new Program();

        //...


        return $this->_twig->render('Program/add.html.twig');
    }


    /**
     * Add one program
     * @return string
     */
    public function showDescription()
    {
        $program = new Program();

        //...


        return $this->_twig->render('Program/program.html.twig');
    }
}
