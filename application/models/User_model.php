<?php

class User_model extends CI_Model {

  public function __construct() {
      parent::__construct();
    }

  public function emailterdaftar(){
    $email = $this->input->post('email');

    $sql = "SELECT * FROM users
      WHERE email='".$email."'";

    $query = $this->db->query( $sql );

    if( empty( $query->row_array() ) ) {
      return false;
    }else{
      return true;
    }
  }

    /**   * Menambahkan user baru   */
    public function register(){
      // membuat user_ID otomatis
      // menggunakan UNIX Timestamp --> date('U')
      $nick = substr( $this->input->post('nama'), 0 , 3 );
      // 3 huruf pertama dari nama user
      $user_id = "U-".$nick.date('U');

      // menyiapkan data
      $data = [
                'user_ID' => $user_id,
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => md5( $this->input->post('pass1') ),
                'tgl_registrasi' => date('Y-m-d H:i:s')
              ];
       // simpan ke database dalam tabel 'users'
        $this->db->insert( 'users', $data );
      }
      public function user( $email ){

        $sql = "SELECT * FROM users
          WHERE email='".$email."'";

        $query = $this->db->query( $sql );

        //if( !empty( $query->row_array() ) ) {
          return $query->row_array();
        //}

    //  return false;
    }
    public function profil1($user_ID){
      $sql= "SELECT nama, email FROM blogs INNER JOIN users USING (user_ID) WHERE user_ID ='".$user_ID."'";
      $query=$this->db->query($sql);
      return $query->row_array();
}

    public function profil2($user_ID){
      $sql = "SELECT u.nama, u.email, u.user_ID, b.blog_ID, b.judul FROM blogs b INNER JOIN users u USING (user_ID) WHERE user_ID ='".$user_ID."'";
      $query=$this->db->query($sql);
      return $query->result_array();
  }
}
