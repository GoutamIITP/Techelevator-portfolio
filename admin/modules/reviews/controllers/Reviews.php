<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Reviews extends MX_Controller
{
    //wGtRkO8VoEyUjS
    function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_reviews');
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
        $this->form_validation->set_rules("description", "Description", "required|trim");
        $this->form_validation->set_rules("price", "Price", "required|trim");
        $this->form_validation->set_rules("country", "Country", "required|trim");
        $this->form_validation->set_rules("status", "status", "trim");

        if ($this->form_validation->run() == TRUE) {
            $data['name'] = trim($_POST['name']);
            $data['description'] = trim($_POST['description']);
            $data['price'] = $_POST['price'] ?: null;
            $data['country'] = $_POST['country'] ?: null;
            $data['status'] = trim($_POST['status'] ? 1 : 0);

            // Check for update or insert
            if (!empty($_POST['plan_id'])) {
                $where['plan_id'] = $_POST['plan_id'];
                echo $this->mdl_reviews->update_data($where, $data);
            } else {
                echo $this->mdl_reviews->add_data($data);
            }
        } else {
            echo validation_errors();
        }
    }


    function view_data()
    {
        $where = null;
        if (isset($_GET['plan_id']))
            $where['plan_id'] = $_GET['plan_id'];

        if (isset($_GET['data']))
            $select = $_GET['data'];
        else
            $select = "*";

        $return = $this->mdl_reviews->view_data($where, $select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }

    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id']) {

            $where['plan_id'] = $_GET['id'];
            echo $this->mdl_reviews->delete_data($where);
        } else
            echo "Not Deleted";
    }


}