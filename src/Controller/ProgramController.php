<?php

namespace Controller;


use Model\Program;
use Model\ProgramManager;
use Model\Channel;
use Model\ChannelManager;

class ProgramController extends AbstractController
{

    /**
     * Get today programs
     * @return string
     */
    public function indexAction()
    {
        $programManager = new ProgramManager();
        $channelManager = new ChannelManager();
        $programs = $programManager->findAll();
        $channels = $channelManager->findAll();

        return $this->_twig->render('Program/index.html.twig', [
            'programs' => $programs,
            'channels' =>$channels
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
}
