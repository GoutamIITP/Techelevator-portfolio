<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        $data['title'] = "Our IT Services | TechElevatr Digital Solutions";
        $data['description'] = "Comprehensive IT services including web development, mobile app development, SEO, CRM/ERP solutions, lead generation, and hosting services.";
        $data['keywords'] = "IT services, web development, app development, SEO, CRM, ERP, digital marketing, hosting";
        $data['module'] = "services";
        $data['view_file'] = "index";
        echo Modules::run('template/layout2', $data);
    }

    function webDevelopment()
    {
        $data['title'] = "Website Development Services | TechElevatr";
        $data['description'] = "Professional website development services. Custom, responsive, and SEO-optimized websites that drive business growth.";
        $data['keywords'] = "website development, web design, responsive websites, custom websites, SEO websites";
        $data['module'] = "services";
        $data['view_file'] = "web_development";
        echo Modules::run('template/layout2', $data);
    }

    function appDevelopment()
    {
        $data['title'] = "Mobile App Development Services | TechElevatr";
        $data['description'] = "Native and cross-platform mobile app development for iOS and Android. Build powerful apps that users love.";
        $data['keywords'] = "mobile app development, iOS app, Android app, React Native, Flutter, app design";
        $data['module'] = "services";
        $data['view_file'] = "app_development";
        echo Modules::run('template/layout2', $data);
    }

    function seoServices()
    {
        $data['title'] = "SEO Services | Search Engine Optimization | TechElevatr";
        $data['description'] = "Professional SEO services to boost your online visibility. Rank higher on Google and drive organic traffic to your website.";
        $data['keywords'] = "SEO services, search engine optimization, Google ranking, organic traffic, local SEO, technical SEO";
        $data['module'] = "services";
        $data['view_file'] = "seo_services";
        echo Modules::run('template/layout2', $data);
    }

    function crmErp()
    {
        $data['title'] = "CRM & ERP Solutions | Business Management Software | TechElevatr";
        $data['description'] = "Custom CRM and ERP solutions to streamline your business operations. Manage customers, sales, inventory, and more.";
        $data['keywords'] = "CRM software, ERP system, business management, customer relationship management, enterprise resource planning";
        $data['module'] = "services";
        $data['view_file'] = "crm_erp";
        echo Modules::run('template/layout2', $data);
    }

    function leadGeneration()
    {
        $data['title'] = "Lead Generation Services | Digital Marketing | TechElevatr";
        $data['description'] = "Drive quality leads and grow your sales pipeline with targeted digital marketing campaigns and lead generation strategies.";
        $data['keywords'] = "lead generation, digital marketing, PPC, social media marketing, email marketing, conversion optimization";
        $data['module'] = "services";
        $data['view_file'] = "lead_generation";
        echo Modules::run('template/layout2', $data);
    }

    function hostingDomain()
    {
        $data['title'] = "Web Hosting & Domain Services | TechElevatr";
        $data['description'] = "Reliable web hosting with 99.9% uptime, free SSL certificates, and domain registration services. Fast, secure, and affordable.";
        $data['keywords'] = "web hosting, domain registration, SSL certificate, cloud hosting, VPS hosting, shared hosting";
        $data['module'] = "services";
        $data['view_file'] = "hosting_domain";
        echo Modules::run('template/layout2', $data);
    }

    // Legacy routes for backward compatibility (redirect to new services)
    function homeRelocation()
    {
        redirect('services/web-development');
    }

    function office()
    {
        redirect('services/app-development');
    }

    function car()
    {
        redirect('services/seo-services');
    }

    function courier()
    {
        redirect('services/crm-erp');
    }

    function luggage()
    {
        redirect('services/lead-generation');
    }

    function insurance()
    {
        redirect('services/hosting-domain');
    }
}
