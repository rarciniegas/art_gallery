<?php
	class Artworks extends CI_Controller{
		public function index(){
			$data['title'] = 'Artworks';
			$data['artworks'] = $this->artwork_model->get_artworks();
			$this->load->view('templates/header');
			$this->load->view('artworks/index', $data);
			$this->load->view('templates/footer');
		}
		public function add(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
      $data['title'] = 'Add Artwork';
      $data['artists'] = $this->artist_model->get_artists();
			$this->form_validation->set_rules('title', 'Title', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('artworks/add', $data);
				$this->load->view('templates/footer');
			} else {
				$this->artwork_model->add_artwork();
				// Set message
				$this->session->set_flashdata('artwork_added', 'The Artwork has been added');
				redirect('artworks');
			}
		}

		public function delete($id){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->artist_model->delete_artwork($id);
			// Set message
			$this->session->set_flashdata('artwork_deleted', 'The artwork has been deleted');
			redirect('artists');
		}
	}