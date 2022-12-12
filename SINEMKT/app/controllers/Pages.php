<?php
    class Pages extends Controller{
        public function __construct(){
        }

        public function index(){
            $this->view('pages/index');
        }
        public function shop(){
            $this->view('pages/Shop');
        }
        public function features(){
            $this->view('pages/Features');
        }
        public function blog(){
            $this->view('pages/blog');
        }
        public function contact(){
            $this->view('pages/contact');
        }
        

    }