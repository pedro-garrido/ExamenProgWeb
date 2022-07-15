<?php

    class Vivienda_model extends CI_Model {
        public function __construct() {
            parent::__construct();
        }
        
        public function get_viviendas() {
            $query = $this->db->get('vivienda');
            return $query->result();
        }
        
        public function get_vivienda($id) {
            $query = $this->db->get_where('vivienda', array('id' => $id));
            return $query->row();
        }
        
        public function insert_vivienda($data) {
            $this->db->insert('vivienda', $data);
        }
        
        public function update_vivienda($id, $data) {
            $this->db->where('id', $id);
            $this->db->update('vivienda', $data);
        }
        
        public function delete_vivienda($id) {
            $this->db->where('id', $id);
            $this->db->delete('vivienda');
        }
    }

?>