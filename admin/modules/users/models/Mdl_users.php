<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_users extends CI_Model
{
    private $table;
    function __construct()
    {
        parent::__construct();
        $this->table = "users";
    }
    function view_data($where=null)
    {
        $this->db->select('users.* , plan_master.name as plan_name, plan_master.price as plan_price');
        $this->db->join('plan_master', 'plan_master.plan_id = users.plan');
        if($where) 
            $this->db->where($where);
        $this->db->order_by('user_id',"desc");
        return $this->db->get( $this->table);
    }
    function add_data($data)
    {
        $a=$this->db->insert($this->table,$data);
        return $this->db->affected_rows($a);
    }
    function update_data($where,$data)
    {
        $this->db->where($where);
        $a=$this->db->update($this->table,$data);
        return $this->db->affected_rows($a);
    }
    function delete_data($where)
    {
        $this->db->where($where);
        $a=$this->db->delete($this->table);
        return $this->db->affected_rows($a);
    }
    
}