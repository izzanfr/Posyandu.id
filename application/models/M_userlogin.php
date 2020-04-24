<?php 
class M_userlogin extends CI_Model {
		
	public function login($data) {
		$query = $this->db->where('username', $data['username'])->where('password', $data['password'])->get('user');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
    }

    public function getProfile($username) {
		$this->db->where('username', $username);
        $query = $this->db->get('user');
        return $query->row_array();
    }
}
?>