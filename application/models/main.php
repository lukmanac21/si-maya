<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_MODEL{
    function check_login($table,$where){
        return $this->db->get_where($table,$where);
    }
    function get_login_data($table,$where){
        $query = $this->db->get_where($table,$where);
		return $query->row_array();
    }
    function get_data($table){
        $query = $this->db->get($table);
        return $query->result();
    }
    function get_data_where($table,$where){
        $query = $this->db->get_where($table,$where);
        return $query->result();
    }
    function get_data_where_dinas($table,$where){
        $query = $this->db->select('*')->from($table)->where($where)->get();
        return $query->result();
    }
    function get_data_join($table,$table_join,$where){
        $query = $this->db->select('*')->from($table)->join($table_join,$where)->get();
        return $query->result();
    }
    function get_data_join_by_dinas($table,$table_join,$where,$id_dinas){
        $query = $this->db->select('*')->from($table)->join($table_join,$where)->where('tbl_user.id_role != 1 and tbl_user.id_dinas =',$id_dinas)->get();
        return $query->result();
    }
    function get_data_two_join_by_dinas($table,$table_join,$where,$table_joins,$wheres,$id_dinas){
        $query = $this->db->select('*')->from($table)->join($table_join,$where)->join($table_joins,$wheres)->where('tbl_user.id_role != 1 and tbl_user.id_dinas =',$id_dinas)->get();
        return $query->result();
    }
    function get_menu_selected($role_id){
        $this->db->select('*')
        ->from('tbl_user_access')
        ->join('tbl_sub_menu','tbl_user_access.id_sub_menu = tbl_sub_menu.id_sub_menu')
        ->join('tbl_menu','tbl_menu.id_menu = tbl_sub_menu.id_menu')
        ->where('tbl_user_access.id_role =',$role_id )
        ->group_by('tbl_menu.id_menu');
        $query = $this->db->get();
        return $query->result();
    }
    function get_fetch_state($id_dinas){
        $this->db->where('id_dinas', $id_dinas)
        ->where('id_bagian != 12')
        ->order_by('nama_bagian', 'ASC');
        $query = $this->db->get('tbl_bagian');
        $output = '<option value="">--Pilih Penanggung Jawab--</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->id_bagian.'">'.$row->nama_bagian.'</option>';
        }
        return $output;

    }
    function insert_data($table,$data){
        $this->db->insert($table,$data);
    }
    function update_data($table,$data,$where){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete_data($table,$where){
        $this->db->where($where);
        $this->db->delete($table);
    }

}
?>