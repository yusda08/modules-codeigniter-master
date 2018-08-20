<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu
 *
 * @author Asus
 */
class Menu extends MY_Controller {

    //put your code here
    var $a;

    public function __construct() {
        parent::__construct();
        $this->a = aksesLog();
    }

    public function index() {
        if ($this->a) {
            $record = $this->javasc_back();
            $data = $this->layout_back('setting/menu', $record);
            $data['ribbon'] = ribbon('Setting', 'Menu');
            $this->backend($data);
        } else {
            redirect('Login');
        }
    }

}
