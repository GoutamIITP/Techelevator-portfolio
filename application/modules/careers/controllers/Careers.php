<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Careers extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('careers_model');
        $this->load->helper(['url', 'form']);
        $this->load->library(['form_validation', 'session']);
    }

    public function index()
    {
        $data['page_title'] = 'Careers - Build Your Career With TechElevatr';
        $data['title'] = 'Careers - Build Your Career With TechElevatr';
        $data['description'] = 'Join TechElevatr Digital Solutions. Build your career with real-world projects, mentorship, and growth opportunities.';

        // Get current job openings
        $data['job_openings'] = $this->careers_model->get_active_jobs();

        // Add footer variables
        $data['googleMapsUrl'] = 'https://maps.google.com/maps?q=Siliguri,+West+Bengal,+India';
        $data['phonehtml'] = 'tel:+916295827525';
        $data['phone'] = '+91 62958 27525';
        $data['mailhtml'] = 'mailto:techelevatr@gmail.com';
        $data['mail'] = 'techelevatr@gmail.com';
        $data['whatsapphtml'] = 'https://wa.me/916295827525';

        // Load the view with template parts
        $this->load->view('template/header', $data);
        $this->load->view('template/navigation', $data);
        $this->load->view('careers/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function apply()
    {
        // Set form validation rules
        $this->form_validation->set_rules('full_name', 'Full Name', 'required|trim|max_length[100]');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|max_length[100]');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|trim|max_length[15]');
        $this->form_validation->set_rules('position', 'Position', 'required|trim');
        $this->form_validation->set_rules('message', 'Message', 'trim|max_length[1000]');

        if ($this->form_validation->run() == FALSE) {
            // Return to careers page with validation errors
            $this->session->set_flashdata('error', validation_errors());
            redirect('careers');
        } else {
            // Handle file upload
            $resume_path = '';
            if (!empty($_FILES['resume']['name'])) {
                $config['upload_path'] = './assets/uploads/resumes/';
                $config['allowed_types'] = 'pdf|doc|docx';
                $config['max_size'] = 5120; // 5MB
                $config['file_name'] = time() . '_' . $_FILES['resume']['name'];

                // Create directory if it doesn't exist
                if (!is_dir($config['upload_path'])) {
                    mkdir($config['upload_path'], 0755, true);
                }

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('resume')) {
                    $upload_data = $this->upload->data();
                    $resume_path = 'assets/uploads/resumes/' . $upload_data['file_name'];
                } else {
                    $this->session->set_flashdata('error', 'Resume upload failed. Please try again.');
                    redirect('careers');
                }
            }

            // Prepare application data
            $application_data = [
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'position' => $this->input->post('position'),
                'message' => $this->input->post('message'),
                'resume_path' => $resume_path,
                'application_date' => date('Y-m-d H:i:s'),
                'status' => 'pending'
            ];

            // Save application
            $application_id = $this->careers_model->save_application($application_data);

            if ($application_id) {
                $this->session->set_flashdata('success', 'Your application has been submitted successfully! We will contact you soon.');
            } else {
                $this->session->set_flashdata('error', 'There was an error submitting your application. Please try again.');
            }

            redirect('careers');
        }
    }

    public function job_details($job_id)
    {
        $job = $this->careers_model->get_job_by_id($job_id);

        if (!$job) {
            show_404();
        }

        $data['job'] = $job;
        $data['page_title'] = $job['title'] . ' - TechElevatr Careers';
        $data['title'] = $job['title'] . ' - TechElevatr Careers';

        // Add footer variables
        $data['googleMapsUrl'] = 'https://maps.google.com/maps?q=Siliguri,+West+Bengal,+India';
        $data['phonehtml'] = 'tel:+916295827525';
        $data['phone'] = '+91 62958 27525';
        $data['mailhtml'] = 'mailto:techelevatr@gmail.com';
        $data['mail'] = 'techelevatr@gmail.com';
        $data['whatsapphtml'] = 'https://wa.me/916295827525';

        $this->load->view('template/header', $data);
        $this->load->view('template/navigation', $data);
        $this->load->view('careers/job_details', $data);
        $this->load->view('template/footer', $data);
    }
}
