<?php
  class Posts extends CI_Controller{

    // Display all posts from database
    public function index($offset = 0){

      // pagination config
      $config['base_url'] = base_url() . 'posts/index/';
      $config['total_rows'] = $this->db->count_all('posts');
      $config['per_page'] = 2;
      $config['uri_segment'] = 2;
      $config['attributes'] = array('class' => 'pagination-links');

      //init pagination
      $this->pagination->initialize($config);


      $data['title'] = 'Latest Posts';

      $data['posts'] = $this->post_model->get_posts(FALSE, $config['per_page'], $offset);
      //print_r($data['posts']);

      $this->load->view('templates/header');
      $this->load->view('posts/index', $data);
      $this->load->view('templates/footer');

    }

    // Display individual post from database
    public function view($slug = NULL){
      $data['post'] = $this->post_model->get_posts($slug);
      $post_id = $data['post']['id'];
      $data['comments'] = $this->comment_model->get_comments($post_id);

      if(empty($data['post'])){
        show_404();
      }

      $data['title'] = $data['post']['title'];

      $this->load->view('templates/header');
      $this->load->view('posts/view', $data);
      $this->load->view('templates/footer');
    }

    // call  insert model function
    public function create(){
      //check login
      if(!$this->session->userdata('logged_in')){
        redirect('users/login');
      }

      $data['title'] = 'Create Post';

      $data['categories'] = $this->post_model->get_categories();

      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('body', 'Body', 'required');

      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header');
        $this->load->view('posts/create', $data);
        $this->load->view('templates/footer');

      }else{
        //uplaod images
        $config['upload_path'] = './assets/images/posts';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '4048';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()){
          $errors = array('error' => $this->upload->display_errors());
          $post_image = 'noimage.jpg';
        }else{
          $data = array('upload_data' => $this->upload->data());
          $post_image = $_FILES['userfile']['name'];
        }
        $this->post_model->create_post($post_image);

        //Set message
        $this->session->set_flashdata('post_created', 'Your post has been created');
        redirect('posts');
      }

    }

    // call delete model
    public function delete($id){
      //check login
      if(!$this->session->userdata('logged_in')){
        redirect('users/login');
      }


      $this->post_model->delete_post($id);
      redirect('posts');
    }

    // show id for edit
    public function edit($slug){

      //check login
      if(!$this->session->userdata('logged_in')){
        redirect('users/login');
      }


      $data['post'] = $this->post_model->get_posts($slug);

      //check user
      if($this->session->userdata('user_id') != $this->post_model->get_posts($slug)['user_id']){
        redirect('posts');
      }

      $data['categories'] = $this->post_model->get_categories();

      if(empty($data['post'])){
        show_404();
      }

      $data['title'] = 'Edit Post';

      $this->load->view('templates/header');
      $this->load->view('posts/edit', $data);
      $this->load->view('templates/footer');
    }

    // call post update function
    public function update(){

      //check login
      if(!$this->session->userdata('logged_in')){
        redirect('users/login');
      }


      $this->post_model->update_post();
      //Set message
        $this->session->set_flashdata('post_updated', 'Your post has been created');
      redirect('posts');
    }
  }
