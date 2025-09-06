<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Details extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_details');
        $this->load->library('session');
    }

    function index()
    {
        //just for setting user_id default for testing also for current step

        // $this->session->set_userdata('user_id',5);
        // $this->session->set_userdata('current_step', 6);
        // $this->session->set_userdata('country', 'India');
        // $this->session->set_userdata('edit', 0);

        // only the testing details above 

        if ($this->session->userdata('edit') === null)
            $this->session->set_userdata('edit', 0);
        if ($this->session->userdata('back') === null)
            $this->session->set_userdata('back', 0);

        $step = $this->session->userdata('current_step') ?? 1;
        $edit = $this->session->userdata('edit') ?? 0;
        $back = $this->session->userdata('back') ?? 0;
        $user_id = $this->session->userdata('user_id') ?? null;

        $user_details = $this->mdl_details->view_user_data($this->session->userdata('user_id'))->result();
        if ($user_details[0]->status == 1) {
            redirect('details/thank_you');
        }

        $data['back'] = $back;
        $data['step'] = $step;
        $data['edit'] = $edit;
        $data['user_id'] = $user_id;

        $data['title'] = "User Details";
        $data['description'] = "";
        $data['keywords'] = "";
        $data['module'] = "details";
        $data['view_file'] = "view";
        echo Modules::run('template/layout2', $data);
    }
    function thank_you()
    {
        $data['title'] = "Thank You";
        $data['description'] = "";
        $data['keywords'] = "";
        $data['module'] = "details";
        $data['view_file'] = "thank_you";
        echo Modules::run('template/layout2', $data);
    }
    function fetch_plans()
    {
        if ($this->session->userdata('country'))
            $plans = $this->mdl_details->view_data(array('country' => $this->session->userdata('country'), 'status' => 1))->result();
        echo json_encode($plans);
    }
    function fetch_user_details()
    {
        $user_details = [];
        if ($this->session->userdata('user_id'))
            $user_details = $this->mdl_details->view_user_data($this->session->userdata('user_id'))->result();
        echo json_encode($user_details);
    }
    public function set_edit_mode()
    {
        $this->session->set_userdata('edit', 1);
        $this->session->set_userdata('current_step', $this->input->post('current_step'));
    }
    public function back_button()
    {
        $back = $this->session->userdata('back');
        $back = $back + 1;
        $this->session->set_userdata('back', $back);
        $this->session->set_userdata('current_step', $this->input->post('back_step'));
    }
    public function update_user_status()
    {
        $where = array('user_id' => $this->session->userdata('user_id'));
        $this->mdl_details->update_user_data($where, array('status' => 1));
        echo 1;
    }
    function save_country()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("country", "Country", "required|trim");

        if ($this->form_validation->run() == TRUE) {
            $data['country'] = trim($_POST['country']);
            if ($this->session->userdata('user_id')) {
                $where['user_id'] = $this->session->userdata('user_id');
                $updated = $this->mdl_details->update_user_data($where, $data);
                if ($updated) {
                    $this->session->set_userdata('current_step', 2);
                    $this->session->set_userdata('country', $data['country']);
                    echo 1;
                } else {
                    if ($this->session->userdata('edit') == 1) {
                        $this->session->set_userdata('current_step', 2);
                        $this->session->set_userdata('country', $data['country']);
                        echo 1;
                    } else if ($this->session->userdata('back') > 0) {
                        $this->session->set_userdata('current_step', 2);
                        $this->session->set_userdata('country', $data['country']);

                        $back = $this->session->userdata('back');
                        $back = $back - 1;
                        $this->session->set_userdata('back', $back);

                        echo 1;
                    } else {
                        echo 0;
                    }
                }
            } else {
                $user_id = $this->mdl_details->add_user_data($data);
                if ($user_id) {
                    $this->session->set_userdata('current_step', 2);
                    $this->session->set_userdata('user_id', $user_id);
                    $this->session->set_userdata('country', $data['country']);
                    echo 1;
                } else {
                    echo 0;
                }
            }
        } else {
            echo validation_errors();
        }
    }

    function save_plan()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("plan", "Plan", "required|trim");

        if ($this->form_validation->run() == TRUE) {
            $data['plan'] = trim($_POST['plan']);

            if ($this->session->userdata('user_id')) {
                $where['user_id'] = $this->session->userdata('user_id');
                $updated = $this->mdl_details->update_user_data($where, $data);
                if ($updated) {
                    if ($this->session->userdata('edit') == 1) {
                        $this->session->set_userdata('edit', 0);
                        $this->session->set_userdata('current_step', 6);
                    } else {
                        $this->session->set_userdata('current_step', 3);
                    }
                    echo 1;
                } else {
                    if ($this->session->userdata('edit') == 1) {
                        $this->session->set_userdata('edit', 0);
                        $this->session->set_userdata('current_step', 6);
                        echo 1;
                    } else if ($this->session->userdata('back') > 0) {
                        $this->session->set_userdata('current_step', 3);

                        $back = $this->session->userdata('back');
                        $back = $back - 1;
                        $this->session->set_userdata('back', $back);

                        echo 1;
                    } else {
                        echo 0;
                    }
                }
            } else {
                echo 0;
            }
        } else {
            echo validation_errors();
        }
    }
    function save_user_details()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("name", "Name", "required|trim");
        $this->form_validation->set_rules("email", "Email", "required|trim");
        $this->form_validation->set_rules("phone", "Phone", "required|trim");
        $this->form_validation->set_rules("company_name", "Comapany Name", "required|trim");
        $this->form_validation->set_rules("website", "Company Website", "required|trim");
        $this->form_validation->set_rules("office_add", "Office Address", "required|trim");
        $this->form_validation->set_rules("pan_no", "PAN NO.", "required|trim");
        $this->form_validation->set_rules("gst_no", "GST NO.", "required|trim");
        $this->form_validation->set_rules("city", "City", "required|trim");
        $this->form_validation->set_rules("total_years", "Total Years of Establishment", "trim|numeric");
        $this->form_validation->set_rules("turnover", "Company's Yearly Turnover", "trim");

        if ($this->form_validation->run() == TRUE) {
            $data['name'] = trim($_POST['name']);
            $data['email'] = trim($_POST['email']);
            $data['phone'] = trim($_POST['phone']);
            $data['company_name'] = trim($_POST['company_name']);
            $data['website'] = trim($_POST['website']);
            $data['office_add'] = trim($_POST['office_add']);
            $data['pan_no'] = trim($_POST['pan_no']);
            $data['gst_no'] = trim($_POST['gst_no']);
            $data['city'] = trim($_POST['city']);
            $data['total_years'] = trim($_POST['total_years']);
            $data['turnover'] = trim($_POST['turnover']);


            if ($this->session->userdata('user_id')) {
                $where['user_id'] = $this->session->userdata('user_id');
                $updated = $this->mdl_details->update_user_data($where, $data);
                if ($updated) {
                    if ($this->session->userdata('edit') == 1) {
                        $this->session->set_userdata('edit', 0);
                        $this->session->set_userdata('current_step', 6);
                    } else {
                        $this->session->set_userdata('current_step', 4);
                    }
                    echo 1;
                } else {
                    if ($this->session->userdata('edit') == 1) {
                        $this->session->set_userdata('edit', 0);
                        $this->session->set_userdata('current_step', 6);
                        echo 1;
                    } else if ($this->session->userdata('back') > 0) {
                        $this->session->set_userdata('current_step', 4);

                        $back = $this->session->userdata('back');
                        $back = $back - 1;
                        $this->session->set_userdata('back', $back);

                        echo 1;
                    } else {
                        echo 0;
                    }
                }
            } else {
                echo 0;
            }
        } else {
            echo validation_errors();
        }
    }
    function save_documents()
    {
        // print_r($_POST);
        // die();
        $data = array();
        if (!empty($_FILES['image']['name'])) {
            $data['image'] = $this->profile_pic_upload('image');
            if (isset($_POST['old_image']) && $_POST['old_image']) {
                $this->remove_profile_pic($_POST['old_image']);
            }
        }
        if (!empty($_FILES['company_logo']['name'])) {
            $data['company_logo'] = $this->logo_upload('company_logo');
            if (isset($_POST['old_company_logo']) && $_POST['old_company_logo']) {
                $this->remove_logo($_POST['old_company_logo']);
            }
        }
        if (!empty($_FILES['gst_certificate']['name'])) {
            $data['gst_certificate'] = $this->gst_upload('gst_certificate');
            if (isset($_POST['old_gst']) && $_POST['old_gst']) {
                $this->remove_gst($_POST['old_gst']);
            }
        }
        if ($this->session->userdata('edit') == 0) {
            if (!$data['image'] || !$data['company_logo'] || !$data['gst_certificate']) {
                echo 2;
                return;
            }
        }

        if (!empty($data)) {
            if ($this->session->userdata('user_id')) {
                $where['user_id'] = $this->session->userdata('user_id');
                $updated = $this->mdl_details->update_user_data($where, $data);
                if ($updated) {
                    if ($this->session->userdata('edit') == 1) {
                        $this->session->set_userdata('edit', 0);
                        $this->session->set_userdata('current_step', 6);
                    } else {
                        $this->session->set_userdata('current_step', 5);
                    }
                    echo 1;
                } else {
                    if ($this->session->userdata('back') > 0) {
                        $this->session->set_userdata('current_step', 5);

                        $back = $this->session->userdata('back');
                        $back = $back - 1;
                        $this->session->set_userdata('back', $back);

                        echo 1;
                    } else {
                        echo 0;
                    }
                }
            } else {
                echo 0;
            }
        } else {
            if ($this->session->userdata('edit') == 1) {
                $this->session->set_userdata('edit', 0);
                $this->session->set_userdata('current_step', 6);
                echo 1;
            } else if ($this->session->userdata('back') > 0) {
                $this->session->set_userdata('current_step', 5);

                $back = $this->session->userdata('back');
                $back = $back - 1;
                $this->session->set_userdata('back', $back);

                echo 1;
            } else {
                echo 0;
            }
        }
    }

    function save_referral()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("r_name", "Referrer's Name", "trim");
        $this->form_validation->set_rules("r_phone", "Referrer's Contact No.", "trim");

        if ($this->form_validation->run() == TRUE) {
            $data['r_name'] = trim($_POST['r_name']);
            $data['r_phone'] = trim($_POST['r_phone']);

            if (!$data['r_name'] && !$data['r_phone']) {
                $this->session->set_userdata('current_step', 6);
                echo 1;
                die();
            }


            if ($this->session->userdata('user_id')) {
                $where['user_id'] = $this->session->userdata('user_id');
                $updated = $this->mdl_details->update_user_data($where, $data);
                if ($updated) {
                    if ($this->session->userdata('edit') == 1) {
                        $this->session->set_userdata('edit', 0);
                    }
                    $this->session->set_userdata('current_step', 6);
                    echo 1;
                } else {
                    if ($this->session->userdata('edit') == 1) {
                        $this->session->set_userdata('edit', 0);
                        $this->session->set_userdata('current_step', 6);
                        echo 1;
                    } else {
                        echo 0;
                    }
                }
            } else {
                echo 0;
            }
        } else {
            echo validation_errors();
        }
    }

    function profile_pic_upload($file)
    {
        $folder = "documents";
        $config['upload_path'] = './assets/temp';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';
        $config['new_image'] = "./assets/uploads/$folder/profile_pic";
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
                $resize_config['new_image'] = "./assets/uploads/$folder/profile_pic";

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
                $thumb_config['new_image'] = "./assets/uploads/$folder/profile_pic/thumb/";
                $this->image_lib->initialize($thumb_config);

                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                    die();
                }
            } else {
                // Move PDF or document to final directory
                copy($file_data['full_path'], "./assets/uploads/$folder/profile_pic/" . $file_data['file_name']);
            }

            // Delete from temp folder
            unlink($file_data['full_path']);

            return $file_data['file_name'];
        }
    }

    function remove_profile_pic($title)
    {
        if (substr($title, 0, 4) != "http") {
            $path1 = "./assets/uploads/documents/profile_pic/" . $title;
            unlink($path1);
            $path2 = "./assets/uploads/documents/profile_pic/thumb/" . $title;
            unlink($path2);
        }
    }
    function logo_upload($file)
    {
        $folder = "documents";
        $config['upload_path'] = './assets/temp';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';
        $config['new_image'] = "./assets/uploads/$folder/logo/";
        $config['min_width'] = 100;

        $rand_number = mt_rand(0, 85);
        $timestamp = time();
        $config['file_name'] = "logo" . $rand_number . $timestamp;

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
                $resize_config['new_image'] = "./assets/uploads/$folder/logo/";

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
                $thumb_config['new_image'] = "./assets/uploads/$folder/logo/thumb/";
                $this->image_lib->initialize($thumb_config);

                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                    die();
                }
            } else {
                // Move PDF or document to final directory
                copy($file_data['full_path'], "./assets/uploads/$folder/logo/" . $file_data['file_name']);
            }

            // Delete from temp folder
            unlink($file_data['full_path']);

            return $file_data['file_name'];
        }
    }

    function remove_logo($title)
    {
        if (substr($title, 0, 4) != "http") {
            $path1 = "./assets/uploads/documents/logo/" . $title;
            unlink($path1);
            $path2 = "./assets/uploads/documents/logo/thumb/" . $title;
            unlink($path2);
        }
    }

    function gst_upload($file)
    {
        $folder = "documents";
        $config['upload_path'] = './assets/temp';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp|pdf';
        $config['new_image'] = "./assets/uploads/$folder/gst/";
        $config['min_width'] = 100;

        $rand_number = mt_rand(0, 85);
        $timestamp = time();
        $config['file_name'] = "gst" . $rand_number . $timestamp;

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
                $resize_config['new_image'] = "./assets/uploads/$folder/gst/";

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
                $thumb_config['new_image'] = "./assets/uploads/$folder/gst/thumb/";
                $this->image_lib->initialize($thumb_config);

                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                    die();
                }
            } else {
                // Move PDF or document to final directory
                copy($file_data['full_path'], "./assets/uploads/$folder/gst/" . $file_data['file_name']);
            }

            // Delete from temp folder
            unlink($file_data['full_path']);

            return $file_data['file_name'];
        }
    }
    function remove_gst($title)
    {
        if (substr($title, 0, 4) != "http") {
            $path1 = "./assets/uploads/documents/gst/" . $title;
            unlink($path1);
            $path2 = "./assets/uploads/documents/gst/thumb/" . $title;
            unlink($path2);
        }
    }
}
