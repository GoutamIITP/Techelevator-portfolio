<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Careers_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_active_jobs()
    {
        // For now, return static data. In production, this would query a database
        return [
            [
                'id' => 1,
                'title' => 'Web Developer (Intern / Junior)',
                'type' => 'Internship / Full-Time',
                'location' => 'Siliguri / Remote',
                'skills' => ['HTML', 'CSS', 'Bootstrap', 'JavaScript', 'jQuery', 'PHP', 'CodeIgniter', 'MySQL'],
                'description' => 'Join our web development team and work on real client projects using modern technologies.',
                'requirements' => [
                    'Strong knowledge of HTML, CSS, and Bootstrap',
                    'JavaScript and jQuery experience',
                    'PHP programming skills (CodeIgniter preferred)',
                    'Basic MySQL database knowledge',
                    'Responsive design understanding',
                    'Problem-solving mindset'
                ],
                'responsibilities' => [
                    'Develop responsive websites using HTML, CSS, and JavaScript',
                    'Work with PHP and CodeIgniter framework',
                    'Collaborate with design team for UI implementation',
                    'Participate in code reviews and testing',
                    'Learn and implement best practices'
                ],
                'status' => 'active'
            ],
            [
                'id' => 2,
                'title' => 'Mobile App Developer (Intern)',
                'type' => 'Internship',
                'location' => 'Remote',
                'skills' => ['Android', 'Flutter', 'React Native', 'API Integration', 'UI Design'],
                'description' => 'Develop mobile applications for Android and iOS platforms using modern frameworks.',
                'requirements' => [
                    'Knowledge of Android development or Flutter or React Native',
                    'Understanding of API integration',
                    'Basic UI/UX design principles',
                    'Problem-solving skills',
                    'Eagerness to learn new technologies'
                ],
                'responsibilities' => [
                    'Develop mobile applications using chosen framework',
                    'Integrate APIs and third-party services',
                    'Collaborate with backend developers',
                    'Test applications on different devices',
                    'Maintain code quality and documentation'
                ],
                'status' => 'active'
            ],
            [
                'id' => 3,
                'title' => 'UI/UX Designer',
                'type' => 'Freelance / Internship',
                'location' => 'Remote',
                'skills' => ['Figma', 'Adobe XD', 'Responsive Design', 'Web Design', 'Mobile UI'],
                'description' => 'Create beautiful and functional user interfaces for web and mobile applications.',
                'requirements' => [
                    'Proficiency in Figma or Adobe XD',
                    'Understanding of responsive design concepts',
                    'Experience with web and mobile UI design',
                    'Knowledge of design systems and style guides',
                    'Creative problem-solving abilities'
                ],
                'responsibilities' => [
                    'Design user interfaces for web and mobile applications',
                    'Create wireframes and prototypes',
                    'Collaborate with development team',
                    'Maintain design consistency across projects',
                    'Stay updated with design trends'
                ],
                'status' => 'active'
            ],
            [
                'id' => 4,
                'title' => 'Digital Marketing Executive',
                'type' => 'Part-Time / Full-Time',
                'location' => 'Siliguri',
                'skills' => ['SEO', 'Social Media Marketing', 'Content Planning', 'Google Analytics', 'PPC'],
                'description' => 'Drive digital marketing campaigns and help businesses grow their online presence.',
                'requirements' => [
                    'Basic knowledge of SEO principles',
                    'Social media marketing experience',
                    'Content planning and creation skills',
                    'Understanding of Google Analytics',
                    'Communication and analytical skills'
                ],
                'responsibilities' => [
                    'Plan and execute digital marketing campaigns',
                    'Manage social media accounts',
                    'Create engaging content for various platforms',
                    'Monitor and analyze campaign performance',
                    'Collaborate with clients and internal teams'
                ],
                'status' => 'active'
            ]
        ];
    }

    public function get_job_by_id($job_id)
    {
        $jobs = $this->get_active_jobs();

        foreach ($jobs as $job) {
            if ($job['id'] == $job_id) {
                return $job;
            }
        }

        return false;
    }

    public function save_application($data)
    {
        // In a real application, this would insert into a database table
        // For now, we'll simulate saving and return a mock ID

        // Example database insert:
        // $this->db->insert('job_applications', $data);
        // return $this->db->insert_id();

        // Mock implementation
        return rand(1000, 9999);
    }

    public function get_application_by_id($application_id)
    {
        // In a real application, this would query the database
        // $this->db->where('id', $application_id);
        // return $this->db->get('job_applications')->row_array();

        return false;
    }

    public function get_all_applications($limit = null, $offset = 0)
    {
        // In a real application, this would query the database
        // if ($limit) {
        //     $this->db->limit($limit, $offset);
        // }
        // return $this->db->get('job_applications')->result_array();

        return [];
    }
}
