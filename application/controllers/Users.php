<?php
class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function index(){
        $data['users'] = $this->user_model->get_users();
        $data['title'] = 'Nuevo Usuario';

        $this->load->view('templates/header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($cod = NULL){
        $data['user_model'] = $this->user_model->get_users($cod);

        if(empty($data['user_model'])){
            show_404();
        }

        $data['title'] = $data['user_model']['nombres'];

        $this->load->view('templates/header', $data);
        $this->load->view('users/details', $data);
        $this->load->view('templates/footer');
    }

    public function create(){

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Creación de un nuevo usuario';

        $this->form_validation->set_rules('txtnombres', 'Nombres', 'required');
        $this->form_validation->set_rules('txtapellidos', 'Apellidos', 'required');
        $this->form_validation->set_rules('cmb_tipodocumento', 'Tipo de documento', 'required');
        $this->form_validation->set_rules('txtnumerodocumento', 'Numero de documento', 'required');
        $this->form_validation->set_rules('cmb_genero', 'Género', 'required');
        $this->form_validation->set_rules('txtedad', 'Edad', 'required');
        $this->form_validation->set_rules('txtdepartamento', 'Departamento', 'required');
        $this->form_validation->set_rules('txtmunicipio', 'Municipio', 'required');
        $this->form_validation->set_rules('txtdireccion', 'Dirección', 'required');
        $this->form_validation->set_rules('txtemail', 'Correo electrónico', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('users/create');
            $this->load->view('templates/footer');
        }else{
            $this->user_model->set_user();
            $data['users'] = $this->user_model->get_users();
            $this->load->view('users/index', $data);
        }
    }

    public function graficas(){
        

        $this->load->view('templates/header');
        $this->load->view('users/graficas');
        $this->load->view('templates/footer');
    }

    public function dataGrafica(){
        $this->load->view('templates/header');
        $this->load->view('users/graficas');
        $this->load->view('templates/footer');
        return json_encode($this->user_model->getAllJson());
    }

    public function update($id = NULL) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['users'] = $this->user_model->get_users($id);
        $data['title'] = 'Actualización de datos';

        $this->form_validation->set_rules('txtnombres', 'Nombres', 'required');
        $this->form_validation->set_rules('txtapellidos', 'Apellidos', 'required');
        $this->form_validation->set_rules('cmb_tipodocumento', 'Tipo de documento', 'required');
        $this->form_validation->set_rules('txtnumerodocumento', 'Numero de documento', 'required');
        $this->form_validation->set_rules('cmb_genero', 'Género', 'required');
        $this->form_validation->set_rules('txtedad', 'Edad', 'required');
        $this->form_validation->set_rules('txtdepartamento', 'Departamento', 'required');
        $this->form_validation->set_rules('txtmunicipio', 'Municipio', 'required');
        $this->form_validation->set_rules('txtdireccion', 'Dirección', 'required');
        $this->form_validation->set_rules('txtemail', 'Correo electrónico', 'required');

        if(empty($data['users'])){
            show_404();
        }else if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('users/update', $data);
            $this->load->view('templates/footer');
        }else{
            $this->user_model->update_user();
            $data['users'] = $this->user_model->get_users();
            $this->load->view('users/index', $data);
        }
            
    }

    public function confirm_delete($id){
        $data['users'] = $this->user_model->get_users($id);
        $data['title'] = 'Eliminar Registro';

        $this->load->view('templates/header', $data);
        $this->load->view('users/delete', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id=NULL){
        $this->user_model->delete_user($id);
        $data['users'] = $this->user_model->get_users();
        if($this->user_model->delete_user($id)){
            $this->load->view('users/index', $data);
        }
    }

}