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

				//upload image
				$config['upload_path'] = './assets/images';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '500';
				$config['max_height'] = '500';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$artwork_image = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$artwork_image = $_FILES['userfile']['name'];
				}

				$this->artwork_model->add_artwork($artwork_image);
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