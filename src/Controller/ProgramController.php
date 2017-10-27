<?php

namespace Controller;


use Model\ChannelManager;
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
        $channelManager = new ChannelManager();
        $programManager = new ProgramManager();
        $programs = $programManager->findPrograms();
        $channels = $channelManager->findChannelsByNumber();
        return $this->_twig->render('Program/index.html.twig', [
            'programs' => $programs,
            'channels' => $channels,
        ]);
    }

    /**
     * Show selected program
     * @return string
     */
    public function ProgramAction($id)
    {
        $programManager = new ProgramManager();
        $program = $programManager->findOne($id);
        return $this->_twig->render('Program/program.html.twig',[
            'program' => $program
        ]);
    }

    /**
     * Add one program
     * @return string
     */
    public function addAction()
    {
        return $this->_twig->render('Program/add.html.twig');
    }

    /**
     * show audiences
     * @return string
     */
    public function audiencesAction()
    {
        $programManager = new ProgramManager();
        $audiences = $programManager->showAudiences();
        return $this->_twig->render('Program/audiences.html.twig',[
            'audiences' => $audiences
        ]);
    }
}
