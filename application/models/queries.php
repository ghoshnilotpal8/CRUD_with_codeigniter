<?php

    class queries extends CI_Model{

        public function add($data){

            $this->load->database();
            $count = $this->db->insert('candidate_info',$data);
            if($count > 0){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateuserbyid($data, $id){
            $this->load->database();
            $this->db->where('id',$id);
            $this->db->update('candidate_info', $data);
            return true;
        }

        public function getuser(){
            $this->load->database();
            $data = $this->db->get('candidate_info');
            return $data->result();
        }

        public function getuserbyid($id){
            $this->load->database();
            $this->db->where('id', $id);
            $data = $this->db->get('candidate_info');
            return $data->result();
        }

        function deleteuser($id){
            $this->load->database();
            $this->db->where('id', $id);
            $this->db->delete('candidate_info');
            return true;
        }
    }

?>