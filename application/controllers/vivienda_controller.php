<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class vivienda_controller extends CI_Controller{
        public function index(){
            $this->load->model('vivienda_model');
            $data['viviendas'] = $this->vivienda_model->m_get_viviendas();
            $data['view_type'] = 'default';
            $this->load->view('vivienda_view', $data);
        }

        public function c_create_vivienda(){
            $data['direccion'] = $this->input->post('direccion');
            $data['numero'] = $this->input->post('numero');
            $data['tipo'] = $this->input->post('tipo');
            $data['estado'] = $this->input->post('estado');
            $this->load->model('vivienda_model');
            $this->vivienda_model->m_insert_vivienda($data);
            $this->db->close();
            redirect('vivieda_controller');

        }
        public function c_create_view_vivienda(){
            $this->load->model('vivienda_model');
            $data['viviendas'] = $this->vivienda_model->m_get_viviendas();
            $data['view_type'] = 'insert';
            $this->load->view('vivienda_view', $data);
        }

        public function c_update_view_vivienda(){
            // get methoc request data
            $id_vivienda = $this->input->get('id_vivienda');
            $this->load->model('vivienda_model');
            $data['vivienda'] = $this->vivienda_model->m_get_vivienda($id_vivienda);
            $data['view_type'] = 'update';
            $this->load->view('vivienda_view', $data);
        }

        public function c_update_vivienda(){
            $data['id_vivienda'] = $this->input->post('id_vivienda');
            $data['direccion'] = $this->input->post('direccion');
            $data['numero'] = $this->input->post('numero');
            $data['tipo'] = $this->input->post('tipo');
            $data['estado'] = $this->input->post('estado');
            $this->load->model('vivienda_model');
            $this->vivienda_model->m_update_vivienda($data['id_vivienda'], $data);	
            $this->db->close();
            redirect('vivienda_controller');
        }

        public function c_delete_vivienda(){
            $id_vivienda = $this->input->get('id_vivienda');
            $this->load->model('vivienda_model');
            $this->vivienda_model->m_delete_vivienda($id_vivienda);
            $this->db->close();
            redirect('vivienda_controller');
        }

        public function c_get_viviendas(){

            $this->load->model('vivienda_model');
            $data['viviendas'] = $this->vivienda_model->m_get_viviendas();
            $data['view_type'] = 'get_all';
            $this->load->view('vivienda_view', $data);
        }

        public function c_get_viviendas_cantidad(){

            $this->load->model('vivienda_model');
            $data['viviendas'] = $this->vivienda_model->m_get_viviendas_cantidad();
            $data['view_type'] = 'get_cantidad';
            $this->load->view('vivienda_view', $data);
        }


    }
