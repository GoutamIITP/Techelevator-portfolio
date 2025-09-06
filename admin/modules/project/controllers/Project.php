<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Project extends MX_Controller
{
    //wGtRkO8VoEyUjS
    function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_project');
    }

    function index()
    {
        $this->load->view('form');
    }

    function save_data()
    {
        // print_r($_POST);
        // die();
        $this->load->library('form_validation');

        // Validation rules
        $this->form_validation->set_rules("name", "Project Name", "required|trim");
        $this->form_validation->set_rules("start_date", "Start Date", "trim");
        $this->form_validation->set_rules("end_date", "End Date", "trim");
        $this->form_validation->set_rules("client_name", "Client Name", "trim");
        $this->form_validation->set_rules("manager", "Project Manager", "trim");
        $this->form_validation->set_rules("phone", "Phone", "trim");
        $this->form_validation->set_rules("phone2", "Phone2", "trim");
        $this->form_validation->set_rules("email", "Email", "trim|valid_email");
        $this->form_validation->set_rules("website", "Website", "trim|valid_url");
        $this->form_validation->set_rules("budget", "Budget", "trim|numeric");
        $this->form_validation->set_rules("description", "Project Description", "trim");

        if ($this->form_validation->run() == TRUE) {
            $data['name'] = trim($_POST['name']);
            $data['location'] = trim($_POST['location']);
            $data['start_date'] = $_POST['start_date'] ?: null;
            $data['end_date'] = $_POST['end_date'] ?: null;
            $data['client_name'] = trim($_POST['client_name']);
            $data['manager'] = trim($_POST['manager']);
            $data['phone'] = trim($_POST['phone']);
            $data['phone2'] = trim($_POST['phone2']);
            $data['email'] = trim($_POST['email']);
            $data['website'] = trim($_POST['website']);
            $data['budget'] = $_POST['budget'] ?: null;
            $data['description'] = trim($_POST['description']);
            $data['status'] = isset($_POST['status']) && $_POST['status'] == '1' ? 1 : 0;

            // Check for update or insert
            if (!empty($_POST['project_id'])) {
                $where['project_id'] = $_POST['project_id'];
                echo $this->mdl_project->update_data($where, $data);
            } else {
                echo $this->mdl_project->add_data($data);
            }
        } else {
            echo validation_errors();
        }
    }


    function view_data()
    {
        $where = null;
        if (isset($_GET['project_id']))
            $where['project_id'] = $_GET['project_id'];

        if (isset($_GET['data']))
            $select = $_GET['data'];
        else
            $select = "*";

        $return = $this->mdl_project->view_data($where, $select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }

    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id']) {

            $this->db->where('c_id', $_GET['id']);
            foreach ($this->db->get("branches")->result() as $row) {
                $image_delete_path1 = "./files/citybanner/$row->image";
                $image_delete_path2 = "./files/citybanner/thumb/$row->image";
            }
            unlink($image_delete_path1);
            unlink($image_delete_path2);

            $where['c_id'] = $_GET['id'];
            echo $this->mdl_project->delete_data($where);
        } else
            echo "Not Deleted";
    }
    function image_upload()
    {
        $folder = "city";
        // upload coder starts here
        $config['upload_path'] = './assets/temp';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp|jfif|WEBP|JFIF';
        $config['new_image'] = "./files/citybanner/";
        $config['min_width'] = 100;

        $rand_number = mt_rand(0, 85);
        $timestamp = time();
        //             $title = str_replace(" ", "_", $title);
        $config['file_name'] = $rand_number . $timestamp;

        $config['overwrite'] = false;
        $config['remove_spaces'] = true;


        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('image')) {
            echo $this->upload->display_errors();
            die();
        } else {
            $image = $this->upload->data();
            if ($this->input->post('width')) {
                $config['width'] = $this->input->post('width');
            } else {
                if ($image['image_width'] > 720)
                    $config['width'] = 720;
            }
            // image manipulation resizing 1
            $config['source_image'] = './assets/temp/' . $image['file_name'];
            $config['maintain_ratio'] = TRUE;

            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);

            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
                die();
            }

            $this->image_lib->clear();
            // image manipulation resizing 2
            $config['source_image'] = './assets/temp/' . $image['file_name'];
            $config['new_image'] = "./files/citybanner/thumb/";
            $config['file_name'] = $rand_number . $timestamp;
            $config['maintain_ratio'] = TRUE;
            if ($image['image_width'] > 100) {
                $config['width'] = 100;
            }
            $config['overwrite'] = FALSE;
            $this->load->library('image_lib', $config);
            $this->image_lib->initialize($config);
            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
                die();
            } else {
                unlink($config['source_image']);
                return $image['file_name'];
            }
        }
    }

    function remove_image($title)
    {
        if (substr($title, 0, 4) != "http") {
            $path1 = "./files/citybanner/" . $title;
            unlink($path1);
            $path2 = "./files/citybanner/thumb/" . $title;
            unlink($path2);
        }

    }


}