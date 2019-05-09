<?php
class User_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_users($cod = FALSE){
        if ($cod === FALSE){
            $query = $this->db->get_where('usuarios', array("estado" => 1));
            return $query->result_array();
        }

        $query = $this->db->get_where('usuarios', array('id' => $cod));
        return $query->row_array();
    }

    public function getAllJson(){
        return $this->db->get('usuarios')->result();
    }

    public function set_user(){
        
        $this->load->helper('url');

        $numDocumento = url_title($this->input->post('txtnumerodocumento'), 'dash', TRUE);

        $data = array(
            'nombres' => $this->input->post('txtnombres'),
            'apellidos' => $this->input->post('txtapellidos'),
            'tipo_documento' => $this->input->post('cmb_tipodocumento'),
            'num_documento' => $numDocumento,
            'genero' => $this->input->post('cmb_genero'),
            'edad' => $this->input->post('txtedad'),
            'departamento' => $this->input->post('txtdepartamento'),
            'municipio' => $this->input->post('txtmunicipio'),
            'direccion' => $this->input->post('txtdireccion'),
            'email' => $this->input->post('txtemail')
        );

        return $this->db->insert('usuarios', $data);
    }

    public function update_user(){
        $numDocumento = url_title($this->input->post('txtnumerodocumento'), 'dash', TRUE);

        $data = array(
            'nombres' => $this->input->post('txtnombres'),
            'apellidos' => $this->input->post('txtapellidos'),
            'tipo_documento' => $this->input->post('cmb_tipodocumento'),
            'num_documento' => $numDocumento,
            'genero' => $this->input->post('cmb_genero'),
            'edad' => $this->input->post('txtedad'),
            'departamento' => $this->input->post('txtdepartamento'),
            'municipio' => $this->input->post('txtmunicipio'),
            'direccion' => $this->input->post('txtdireccion'),
            'email' => $this->input->post('txtemail')
        );

        $this->db->where('num_documento', $numDocumento);
        return $this->db->update('usuarios', $data);
    }

    public function delete_user($id){
        $this->load->helper('url');

        $data = array(
            "estado" => 0
        );

        $this->db->where('num_documento', $id);
        $this->db->update('usuarios', $data);

        return redirect("users","index");
    }
}