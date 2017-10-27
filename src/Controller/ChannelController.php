<?php

namespace Controller;


use Model\Channel;
use Model\ChannelManager;

class ChannelController extends AbstractController
{

    /**
     * Get today channels
     * @return string
     */
    public function indexAction()
    {
        $channelManager = new ChannelController();
        $channels = $channelManager->findAll();
        return $this->_twig->render('Channel/index.html.twig', [
            'channels' => $channels,
        ]);
    }

    /**
     * Add one program
     * @return string
     */
    public function addAction()
    {
        $channel = new Channel();

        //...


        return $this->_twig->render('Channel/add.html.twig');
    }
}
