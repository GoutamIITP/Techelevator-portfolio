<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_details extends CI_Model
{
    private $table;
    private $table2;
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = "plan_master";
        $this->table2 = "users";
    }
    function view_data($where = null, $select = "*")
    {
        $this->db->select($select);
        if ($where)
            $this->db->where($where);
        $this->db->order_by('price');
        return $this->db->get($this->table);
    }
    function view_user_data($user_id)
    {
        $this->db->select("users.* , plan_master.name as plan_name , plan_master.price as plan_price");
        $this->db->join("plan_master", "plan_master.plan_id = users.plan");
        $this->db->where("users.user_id", $user_id);
        return $this->db->get($this->table2);
    }
    function add_data($data)
    {
        $a = $this->db->insert($this->table, $data);
        return $this->db->affected_rows($a);
    }
    function add_user_data($data)
    {
        $this->db->insert($this->table2, $data);
        return $this->db->insert_id();
    }
    function update_data($where, $data)
    {
        $this->db->where($where);
        $a = $this->db->update($this->table, $data);
        return $this->db->affected_rows($a);
    }
    function update_user_data($where, $data)
    {
        $this->db->where($where);
        $a = $this->db->update($this->table2, $data);
        return $this->db->affected_rows($a);

    }
    function delete_data($where)
    {
        $this->db->where($where);
        $a = $this->db->delete($this->table);
        return $this->db->affected_rows($a);
    }
}
