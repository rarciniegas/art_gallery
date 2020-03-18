<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			// User data array
			$data = array(
				'first_name' => $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'user_name' => $this->input->post('user_name'),
        'password' => $enc_password,
			);
			// Insert user
			return $this->db->insert('user', $data);
		}
		// Log user in
		public function login($username, $password){
			// Validate
			$this->db->where('user_name', $username);
			$this->db->where('password', $password);
			$result = $this->db->get('user');
			if($result->num_rows() == 1){
				return $result->row(0)->user_id;
			} else {
				return false;
			}
		}
		// Check username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('user', array('user_name' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

	}