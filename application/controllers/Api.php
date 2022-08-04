<?php
    class Api extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        }

        public function verify(){
            echo 'verify ok';
        }
    }