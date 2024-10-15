<?php
  class dbcon {
    public $host="localhost";
    public $user="root";
    public $pass="";
    public $dbname="tintuc";
    private $db;

    function __construct() {
      $this->db = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
      $this->db->set_charset("utf8");
    }

    // Xử lý đăng nhập
    function XuLyDangNhap($user, $pass) {
      $sql="select * from users where Username='$user' and Password='$pass'";
      $kq = $this->db->query($sql);
      return $kq;
    }
  }
?>