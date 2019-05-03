<?php
  class Pages extends Controller{
    public function __construct()
    {
      // instantiate model
    }

    public function index() 
    {
      $data = [
        'title' => 'W-coreMVC'
    ];

      $this->view('pages/index', $data);
    }

    public function about()
    {
      $data = ['title' => 'About Us'];
      $this->view('pages/about', $data);
    }
  }