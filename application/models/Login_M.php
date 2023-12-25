<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Login_M extends CI_Model {

    public function validasi($username, $password) {
        
        $query = $this->db->where('username', $username)
                          ->get('t_pengguna');

        $user = $query->row();
        if ($user && password_verify($password, $user->password)) {
            return $query->row();
        } else {
            return false;
        }
    }

}

/* End of file Login_M.php */
