<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    if (!$this->session->userdata('email')) {
      redirect('auth');
    }
  }

  public function index()
  {
    $data['title'] = 'Menu Management';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $data['menuku'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('menu', 'Menu', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('menu/index', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
      $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
          New menu added!
          </div>');
      redirect('Menu');
    }
  }

  public function submenu()
  {
    $data['title'] = 'SubMenu Management';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->load->model('Menu_model');
    $data['submenu'] = $this->Menu_model->getSubMenu();
    $data['mn'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('title', 'Title', 'required|trim');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required|trim');
    $this->form_validation->set_rules('url', 'Url', 'required|trim');
    $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
    $this->form_validation->set_rules('is_active', 'IS_ACTIVE', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('menu/submenu', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'title' => $this->input->post('title'),
        'menu_id' => $this->input->post('menu_id'),
        'url' => $this->input->post('url'),
        'icon' => $this->input->post('icon'),
        'is_active' => $this->input->post('is_active')
      ];
      $this->db->insert('user_sub_menu', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
          New sub menu added!
          </div>');
      redirect('menu/submenu');
    }
  }
}
