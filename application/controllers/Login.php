<?php

class Login extends CI_Controller
{
  /*
   * Première page principale de login
   * En fonction du login, l'utilisateur est redirigé sur la page lui étant conférée.
   */
  public function index()
  {
    // @todo: créer les vues qui permettent de se logger ou créer son compte (boutique)
    $this->load->view('login');
  }
  
}