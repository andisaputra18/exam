<?php
class Auth_Model extends CI_Model
{
    public function get($username)
    {
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'        
        $result = $this->db->get('tbl_user')->row(); // Untuk mengeksekusi dan mengambil data hasil query        
        return $result;
    }
}
