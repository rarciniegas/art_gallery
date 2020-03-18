<?php
	class Artists extends CI_Controller{
		public function index(){
			$data['title'] = 'Artists';
			$data['artists'] = $this->artist_model->get_artists();
			$this->load->view('templates/header');
			$this->load->view('artists/index', $data);
			$this->load->view('templates/footer');
		}
		public function add(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$data['title'] = 'Add Artist';
			$this->form_validation->set_rules('first_name', 'First_name', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('artists/add', $data);
				$this->load->view('templates/footer');
			} else {
				$this->artist_model->add_artist();
				// Set message
				$this->session->set_flashdata('artist_added', 'The Artist has been added');
				redirect('artists');
			}
		}

		public function delete($id){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->artist_model->delete_artist($id);
			// Set message
			$this->session->set_flashdata('artist_deleted', 'Your artist has been deleted');
			redirect('artists');
		}
	}