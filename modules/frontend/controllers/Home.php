<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $record = $this->javasc_front();
        $data = $this->layout_front('baranda', $record);
        $data['ribbon'] = ribbon('Home', 'Baranda');
        $this->frontend($data);
    }

}
