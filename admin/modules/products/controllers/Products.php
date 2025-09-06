<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Products extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_products');
    }

    function index()
    {
        $this->load->view('data');
    }

    function add_to_featured()
    {
        $p_id = $this->input->post('p_id');
        $already_added = $this->db->get_where('featured_products', array('p_id' => $p_id));
        if ($already_added->num_rows() > 0) {
            echo 2;
            return;
        }
        $added =  $this->mdl_products->add_to_featured($p_id);
        if ($added) {
            echo 1;
        } else {
            echo 0;
        }
    }

    function add_to_new_arrival()
    {
        $p_id = $this->input->post('p_id');
         $already_added = $this->db->get_where('new_arrival_products', array('p_id' => $p_id));
        if ($already_added->num_rows() > 0) {
            echo 2;
            return;
        }
        $added = $this->mdl_products->add_to_new_arrival($p_id);
        if ($added) {
            echo 1;
        } else {
            echo 0;
        }
    }

    function save_data()
    {
        $this->load->library('form_validation');

        // Validation rules
        $this->form_validation->set_rules("name", "Name", "required|trim");
        $this->form_validation->set_rules("description", "Description", "required|trim");
        $this->form_validation->set_rules("price", "Price", "required|trim");
        $this->form_validation->set_rules("discount", "Discount", "trim");
        $this->form_validation->set_rules("status", "status", "trim");

        if ($this->form_validation->run() == TRUE) {
            $data['name'] = trim($_POST['name']);
            $data['description'] = trim($_POST['description']);
            $data['price'] = $_POST['price'];
            $data['discount'] = $_POST['discount'];
            $data['status'] = isset($_POST['status']) && $_POST['status'] ? 1 : 0;

            if (!empty($_FILES['image']['name'])) {
                $data['image'] = $this->thumbnail_upload('image');
                if (isset($_POST['old_image']) && $_POST['old_image']) {
                    $this->remove_thumbnail($_POST['old_image']);
                }
            } else {
                if (empty($_POST['p_id'])) {
                    echo "Please select image";
                    return;
                }
            }

            if (!empty($_POST['p_id'])) {
                $where['p_id'] = $_POST['p_id'];
                echo $this->mdl_products->update_data($where, $data);
            } else {
                echo $this->mdl_products->add_data($data);
            }
        } else {
            echo validation_errors();
        }
    }


    function view_data()
    {
        $where = null;
        if (isset($_GET['p_id']))
            $where['p_id'] = $_GET['p_id'];

        if (isset($_GET['data']))
            $select = $_GET['data'];
        else
            $select = "*";

        $return = $this->mdl_products->view_data($where, $select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }
    public function view_featured()
    {
        $result = $this->mdl_products->view_featured();
        $this->output->set_content_type('application/json')->set_output(json_encode($result->result_array()));
    }
    public function view_newarrival()
    {
        $result = $this->mdl_products->view_newarrival();
        $this->output->set_content_type('application/json')->set_output(json_encode($result->result_array()));
    }

    function delete_data()
    {
        if (isset($_GET['p_id']) && $_GET['p_id']) {

            $where['p_id'] = $_GET['p_id'];
            echo $this->mdl_products->delete_data($where);
        } else
            echo "Not Deleted";
    }
    function delete_f_data()
    {
        if (isset($_GET['p_id']) && $_GET['p_id']) {

            $where['p_id'] = $_GET['p_id'];
            echo $this->mdl_products->delete_f_data($where);
        } else
            echo "Not Deleted";
    }
    function delete_na_data()
    {
        if (isset($_GET['p_id']) && $_GET['p_id']) {

            $where['p_id'] = $_GET['p_id'];
            echo $this->mdl_products->delete_na_data($where);
        } else
            echo "Not Deleted";
    }

    function thumbnail_upload($file)
    {
        $folder = "products";
        $config['upload_path'] = './assets/temp';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';
        $config['new_image'] = "./assets/uploads/$folder/thumbnail/";
        $config['min_width'] = 100;

        $rand_number = mt_rand(0, 85);
        $timestamp = time();
        $config['file_name'] = "profile" . $rand_number . $timestamp;

        $config['overwrite'] = false;
        $config['remove_spaces'] = true;

        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($file)) {
            echo $this->upload->display_errors();
            die();
        } else {
            $file_data = $this->upload->data();
            $file_ext = strtolower($file_data['file_ext']);

            // If it's an image, resize and make thumb
            if (in_array($file_ext, ['.jpg', '.jpeg', '.webp', '.png', '.gif'])) {
                // Resize main image
                $resize_config['source_image'] = $file_data['full_path'];
                $resize_config['maintain_ratio'] = TRUE;
                $resize_config['width'] = ($file_data['image_width'] > 720) ? 720 : $file_data['image_width'];
                $resize_config['new_image'] = "./assets/uploads/$folder/thumbnail";

                $this->load->library('image_lib', $resize_config);
                $this->image_lib->initialize($resize_config);

                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                    die();
                }
                $this->image_lib->clear();

                // Create thumbnail
                $thumb_config['source_image'] = $file_data['full_path'];
                $thumb_config['maintain_ratio'] = TRUE;
                $thumb_config['width'] = 100;
                $thumb_config['new_image'] = "./assets/uploads/$folder/thumbnail/thumb/";
                $this->image_lib->initialize($thumb_config);

                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                    die();
                }
            } else {
                // Move PDF or document to final directory
                copy($file_data['full_path'], "./assets/uploads/$folder/thumbnail/" . $file_data['file_name']);
            }

            // Delete from temp folder
            unlink($file_data['full_path']);

            return $file_data['file_name'];
        }
    }

    function remove_thumbnail($title)
    {
        if (substr($title, 0, 4) != "http") {
            $path1 = "./assets/uploads/products/thumbnail/" . $title;
            unlink($path1);
            $path2 = "./assets/uploads/products/thumbnail/thumb/" . $title;
            unlink($path2);
        }
    }
}
