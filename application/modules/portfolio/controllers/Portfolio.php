<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portfolio_model');
    }

    public function index()
    {
        $data['title'] = "Portfolio - Our Work | TechElevatr Digital Solutions";
        $data['description'] = "Explore TechElevatr's portfolio showcasing successful web development, mobile app development, SEO, and digital marketing projects. See our proven track record of delivering exceptional IT solutions.";
        $data['keywords'] = "portfolio, web development projects, mobile app portfolio, SEO case studies, digital marketing projects, TechElevatr work, IT solutions showcase";

        // Get portfolio projects
        $data['projects'] = $this->Portfolio_model->get_all_projects();
        $data['categories'] = $this->Portfolio_model->get_categories();

        $data['module'] = "portfolio";
        $data['view_file'] = "portfolio";
        echo Modules::run('template/layout2', $data);
    }

    public function view($slug = '')
    {
        if (empty($slug)) {
            redirect('portfolio');
        }

        $project = $this->Portfolio_model->get_project_by_slug($slug);

        if (!$project) {
            show_404();
        }

        $data['title'] = $project['title'] . " - Portfolio | TechElevatr Digital Solutions";
        $data['description'] = $project['short_description'];
        $data['keywords'] = $project['tags'];
        $data['project'] = $project;
        $data['related_projects'] = $this->Portfolio_model->get_related_projects($project['category'], $project['id'], 3);

        $data['module'] = "portfolio";
        $data['view_file'] = "project_detail";
        echo Modules::run('template/layout2', $data);
    }

    public function category($category = '')
    {
        if (empty($category)) {
            redirect('portfolio');
        }

        $data['title'] = ucfirst($category) . " Projects - Portfolio | TechElevatr Digital Solutions";
        $data['description'] = "View our " . $category . " projects and case studies. See how TechElevatr delivers exceptional results in " . $category . ".";
        $data['keywords'] = $category . " projects, " . $category . " portfolio, TechElevatr " . $category;

        $data['projects'] = $this->Portfolio_model->get_projects_by_category($category);
        $data['categories'] = $this->Portfolio_model->get_categories();
        $data['current_category'] = $category;

        $data['module'] = "portfolio";
        $data['view_file'] = "portfolio";
        echo Modules::run('template/layout2', $data);
    }
}
