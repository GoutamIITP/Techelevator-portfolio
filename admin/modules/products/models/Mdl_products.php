<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_products extends CI_Model
{
    private $table;
    function __construct()
    {
        parent::__construct();
        $this->table = "products";
    }
    function view_data($where = null, $select = "*")
    {
        $this->db->select($select);
        if ($where)
            $this->db->where($where);
        $this->db->order_by('p_id', "desc");
        return $this->db->get($this->table);
    }
    public function view_featured()
    {
        $this->db->select('p.*,f.f_status');
        $this->db->from('featured_products f');
        $this->db->join('products p', 'p.p_id = f.p_id');
        $this->db->order_by('f.f_id', 'desc');
        return $this->db->get();
    }

    public function view_newarrival()
    {
        $this->db->select('p.*,n.na_status');
        $this->db->from('new_arrival_products n');
        $this->db->join('products p', 'p.p_id = n.p_id');
        $this->db->order_by('n.na_id', 'desc');
        return $this->db->get();
    }
    function add_data($data)
    {
        $a = $this->db->insert($this->table, $data);
        return $this->db->affected_rows($a);
    }
    function update_data($where, $data)
    {
        $this->db->where($where);
        $a = $this->db->update($this->table, $data);
        return $this->db->affected_rows($a);
    }
    function delete_data($where)
    {
        $this->db->where($where);
        $a = $this->db->delete($this->table);
        return $this->db->affected_rows($a);
    }
    function delete_f_data($where)
    {
        $this->db->where($where);
        $a = $this->db->delete("featured_products");
        return $this->db->affected_rows($a);
    }
    function delete_na_data($where)
    {
        $this->db->where($where);
        $a = $this->db->delete("new_arrival_products");
        return $this->db->affected_rows($a);
    }

    function add_to_featured($p_id)
    {
        $data = array('p_id' => $p_id, 'f_status' => 1);
        $this->db->insert('featured_products', $data);
        return $this->db->affected_rows();
    }

    function add_to_new_arrival($p_id)
    {
        $data = array('p_id' => $p_id, 'na_status' => 1);
        $this->db->insert('new_arrival_products', $data);
        return $this->db->affected_rows();
    }
}
