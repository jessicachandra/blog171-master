<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

   public function __construct() {
     parent::__construct();

    $this->load->model('user_model');

  }

  public function index(){
  }

   public function register(){

     if($this->input->post('email')){
       $email_sudah_terdaftar = $this->user_model->emailterdaftar();

       $data['email_sudah_terdaftar'] = $email_sudah_terdaftar;
       if($email_sudah_terdaftar){
         $this->load->template('register',$data );
       }else{
         $this->user_model->register();
         redirect("user/login");
       }
     }else{
       $this->load->template('register');
     }
   }

   public function login(){
     $this->load->template('login');
   }

    public function signin(){

    $email = $this->input->post('email');
    $pass = $this->input->post('password');

    if(  $user = $this->user_model->user( $email ) ){

      if( $user['password'] == md5( $pass ) ){
        // password cocok, login berhasil
        // simpan data session untuk mengenali user di setiap halaman
        $this->session->uid = $user['user_ID'];
        $this->session->nama = $user['nama'];

        // kembali ke halaman depan
        redirect('isi');

      } else {
        // password tidak cocok
        echo "LOGIN FAILED";
      }
    } else {
      // user tidak ditemukan
      echo "TIDAK TERDAFTAR";
    }

  }
  public function signout(){
    // musnahkan data session untuk lupakan user
    $this->session->sess_destroy();

    // kembali ke halaman depan
    redirect('/');
  }


  public function profil($user_ID){
    $data['profil1'] = $this->user_model->profil1($user_ID);
    $data['profil2'] = $this->user_model->profil2($user_ID);
    $this->load->template('profil', $data);

  }


}
