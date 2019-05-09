<?php

class Pages extends Controller{
  public function __construct() {
  }

  public function index() {

    // Redirect to parkings overview if is logged in
    // if (isLoggedIn() && IsAdmin()) {
    //   redirect('exports');
    // }

   
    if(isLoggedIn()) {
      redirect('parkings');
    }

    // if(isAdmin()){
    //   // die(isAdmin());
    //   redirect('exports');
    // }


    $data = [
      'title' => 'CarparkApp', 
      'description' => 'Simple software solution to enhance car park usage.'
    ];

    $this->view('pages/index', $data);
  }

  public function about(){
    $data = [
      'title' => 'About Us',
      'description' => 'App to share long-term parking with others.'
    ];
    $this->view('pages/about', $data);
  }
}