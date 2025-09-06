<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Wreviews extends MX_Controller
{
    //wGtRkO8VoEyUjS
    function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_wreviews');
    }

    function index()
    {
        $this->load->view('data');
    }

    function save_data()
    {
        // print_r($_POST);
        // die();
        $this->load->library('form_validation');

        // Validation rules
        $this->form_validation->set_rules("name", "Name", "required|trim");
        $this->form_validation->set_rules("message", "Message", "required|trim");
        $this->form_validation->set_rules("star", "Star", "required|trim");

        if ($this->form_validation->run() == TRUE) {
            $data['name'] = trim($_POST['name']);
            $data['message'] = trim($_POST['message']);
            $data['star'] = trim($_POST['star']);
            $data['status'] = isset($_POST['status']) ? 1 : 0;

            // Check for update or insert
            if (!empty($_POST['pr_id'])) {
                $where['pr_id'] = $_POST['pr_id'];
                echo $this->mdl_wreviews->update_data($where, $data);
            } else {
                echo $this->mdl_wreviews->add_data($data);
            }
        } else {
            echo validation_errors();
        }
    }


    function view_data()
    {
        $where = null;
        if (isset($_GET['pr_id']))
            $where['pr_id'] = $_GET['pr_id'];

        if (isset($_GET['data']))
            $select = $_GET['data'];
        else
            $select = "*";

        $return = $this->mdl_wreviews->view_data($where, $select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }

    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id']) {

            $where['pr_id'] = $_GET['id'];
            echo $this->mdl_wreviews->delete_data($where);
        } else
            echo "Not Deleted";
    }


}