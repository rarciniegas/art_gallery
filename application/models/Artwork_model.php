<?php
	class Artwork_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		public function get_artworks(){
			$this->db->order_by('title');
			$query = $this->db->get('artwork');
			return $query->result_array();
		}
		public function add_artwork($artwork_image){
			$data = array(
        'title' => $this->input->post('title'),
        'artist_id' => $this->input->post('artist_id'),
				'description' => $this->input->post('description'),
				'created' => $this->input->post('created'),
				'medium' => $this->input->post('medium'),
				'subject' => $this->input->post('subject'),
				'collection' => $this->input->post('collection'),
				'location' => $this->input->post('location'),
				'image' => $artwork_image


				//'user_id' => $this->session->userdata('user_id')
			);
			return $this->db->insert('artwork', $data);
		}
		public function get_artwork($id){
			$query = $this->db->get_where('artwork', array('id' => $id));
			return $query->row();
		}
		public function delete_artwork($id){
			$this->db->where('id', $id);
			$this->db->delete('artwork');
			return true;
		}
	}