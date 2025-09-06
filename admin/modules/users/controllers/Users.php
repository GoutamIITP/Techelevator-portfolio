<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Users extends MX_Controller
{
    //wGtRkO8VoEyUjS
    function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_users');
    }

    function index()
    {
        $this->load->view('data');
    }
    public function save_data()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("name", "Name", "required|trim");
        $this->form_validation->set_rules("email", "Email", "required|valid_email|trim");
        $this->form_validation->set_rules("phone", "Phone", "required|trim|numeric");
        $this->form_validation->set_rules("company_name", "Company Name", "required|trim");
        $this->form_validation->set_rules("website", "Website", "valid_url|trim");
        $this->form_validation->set_rules("off_add", "Office Address", "trim");
        $this->form_validation->set_rules("pan_no", "PAN Number", "trim");
        $this->form_validation->set_rules("gst_no", "GST Number", "trim");
        $this->form_validation->set_rules("city", "City", "required|trim");
        $this->form_validation->set_rules("total_years", "Total Years", "numeric|trim");
        $this->form_validation->set_rules("turnover", "Turnover", "numeric|trim");
        $this->form_validation->set_rules("r_name", "Referral's Name", "trim");
        $this->form_validation->set_rules("r_phone", "Referral's Phone", "numeric|trim");
        $this->form_validation->set_rules("status", "Status", "trim");

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'name'          => trim($this->input->post('name')),
                'email'         => trim($this->input->post('email')),
                'phone'         => trim($this->input->post('phone')),
                'company_name'  => trim($this->input->post('company_name')),
                'website'       => trim($this->input->post('website')),
                'office_add'       => trim($this->input->post('office_add')),
                'pan_no'        => trim($this->input->post('pan_no')),
                'gst_no'        => trim($this->input->post('gst_no')),
                'city'          => trim($this->input->post('city')),
                'total_years'   => $this->input->post('total_years') ?: null,
                'turnover'      => $this->input->post('turnover') ?: null,
                'r_name'        => trim($this->input->post('r_name')),
                'r_phone'       => trim($this->input->post('r_phone')),
                'status'        => $this->input->post('status') ? 1 : 0,
            ];

            if (!empty($this->input->post('user_id'))) {
                $where['user_id'] = $this->input->post('user_id');
                echo $this->mdl_users->update_data($where, $data);
            } else {
                echo 0;
            }
        } else {
            echo validation_errors();
        }
    }



    function view_data()
    {
        $where = null;
        if (isset($_GET['user_id']))
            $where['user_id'] = $_GET['user_id'];

        // if (isset($_GET['data']))
        //     $select = $_GET['data'];
        // else
        //     $select = "*";

        $return = $this->mdl_users->view_data($where);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }

    function delete_data()
    {
        if (isset($_GET['user_id']) && $_GET['user_id']) {

            $where['user_id'] = $_GET['user_id'];
            $user = $this->mdl_users->view_data($where)->row_array();
            $this->remove_profile_pic($user['image']);
            $this->remove_logo($user['company_logo']);
            $this->remove_gst($user['gst_certificate']);
            echo $this->mdl_users->delete_data($where);
        } else
            echo "Not Deleted";
    }

    function remove_profile_pic($title)
    {
        if (substr($title, 0, 4) != "http") {
            $path1 = FCPATH . "assets/uploads/documents/profile_pic/" . $title;
            @unlink($path1);
            $path2 = FCPATH . "assets/uploads/documents/profile_pic/thumb/" . $title;
            @unlink($path2);
        }
    }
    function remove_logo($title)
    {
        if (substr($title, 0, 4) != "http") {
            $path1 = FCPATH . "assets/uploads/documents/logo/" . $title;
            @unlink($path1);
            $path2 = FCPATH . "assets/uploads/documents/logo/thumb/" . $title;
            @unlink($path2);
        }
    }
    function remove_gst($title)
    {
        if (substr($title, 0, 4) != "http") {
            $path1 = FCPATH . "assets/uploads/documents/gst/" . $title;
            @unlink($path1);
            $path2 = FCPATH . "assets/uploads/documents/gst/thumb/" . $title;
            @unlink($path2);
        }
    }
}
