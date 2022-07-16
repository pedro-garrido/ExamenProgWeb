<?php

    class vivienda_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();
        }

        public function m_get_viviendas() {
            $query = $this->db->get('vivienda');
            return $query->result_array();
        }

        public function m_get_vivienda($id) {
            $query = $this->db->get_where('vivienda', array('id_vivienda' => $id));
            return $query->row_array();
        }

        public function m_insert_vivienda($data) {
            $this->db->insert('vivienda', $data);
        }

        public function m_update_vivienda($id, $data) {
            $this->db->where('id_vivienda', $id);
            $this->db->update('vivienda', $data);
        }

        public function m_delete_vivienda($id) {
            $this->db->delete('vivienda', array('id_vivienda' => $id));
        }
    }

?>