<?php

class MY_Controller extends CI_Controller {

    public function isLoggedIn()
    {
        return $this->session->isLoggedIn ? true : false;
        return $this->session->isLoggedIn ? true : false;
    }
}