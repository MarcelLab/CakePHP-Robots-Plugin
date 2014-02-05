<?php

/**
 * RobotsController add robots restricton for preprod envs
 * 
 * @uses AppController
 * @package Authentification
 * @version 
 * @copyright Copyright (C) 2014 Marcel Publicis All rights reserved.
 * @author Vivien Ripoche <vivien.ripoche@marcelww.com> 
 * @license 
 */
class RobotsController extends AppController {

    public function index() {
        $isConfidential = Configure::read('Robots.isConfidential');;
        if($isConfidential) echo "User-Agent: *    \nDisallow: /";
        $this->autoRender = false;
    }
}
