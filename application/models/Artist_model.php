<?php
	class Artist_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_artists(){
			$this->db->order_by('last_name');
			$query = $this->db->get('artist');
			return $query->result_array();
		}
		public function add_artist(){
			$data = array(
        'first_name' => $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'bio' => $this->input->post('bio'),


				//'user_id' => $this->session->userdata('user_id')
			);
			return $this->db->insert('artist', $data);
		}
		public function get_artist($id){
			$query = $this->db->get_where('artist', array('id' => $id));
			return $query->row();
		}
		public function delete_artist($id){
			$this->db->where('id', $id);
			$this->db->delete('artist');
			return true;
		}
	}