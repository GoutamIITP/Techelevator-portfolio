<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller
{
    function error()
    {
        $data['title'] = "404 - Page Not Found | TechElevatr Digital Solutions";
        $data['description'] = "The page you are looking for could not be found.";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }

    function index()
    {
        $data['title'] = "TechElevatr Digital Solutions - Web Development, App Development & IT Services";
        $data['description'] = "Transform your business with TechElevatr's professional web development, mobile app development, SEO services, CRM/ERP solutions, and digital marketing. Trusted by 500+ businesses across India.";
        $data['keywords'] = "web development, app development, SEO services, CRM, ERP, digital marketing, IT solutions, software development, website design, mobile apps, TechElevatr";
        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | TechElevatr Digital Solutions";
        $data['description'] = "Read the terms and conditions for using TechElevatr's IT services. Understand your rights, responsibilities, and service policies before engaging our services.";
        $data['keywords'] = "terms and conditions, service agreement, IT services terms, TechElevatr policies";
        $data['module'] = "home";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | TechElevatr Digital Solutions";
        $data['description'] = "Your privacy is important to us. Learn how TechElevatr collects, uses, and safeguards your personal information while providing IT services.";
        $data['keywords'] = "privacy policy, data protection, information security, TechElevatr privacy";
        $data['module'] = "home";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function cancellation()
    {
        $data['title'] = "Cancellation & Refund Policy | TechElevatr Digital Solutions";
        $data['description'] = "Know our cancellation and refund policy before engaging our services. Transparent terms for stress-free project management.";
        $data['keywords'] = "cancellation policy, refund policy, service cancellation, TechElevatr refunds";
        $data['module'] = "home";
        $data['view_file'] = "cancellation";
        echo Modules::run('template/layout2', $data);
    }

    function shipping()
    {
        $data['title'] = "Service Delivery Policy | TechElevatr Digital Solutions";
        $data['description'] = "Understand our service delivery policy for IT projects. We ensure timely, quality delivery with transparent communication throughout the project lifecycle.";
        $data['keywords'] = "service delivery, project delivery, IT services delivery, TechElevatr delivery policy";
        $data['module'] = "home";
        $data['view_file'] = "shipping";
        echo Modules::run('template/layout2', $data);
    }

    function search()
    {
        $data['title'] = "Search Results | TechElevatr Digital Solutions";
        $data['description'] = "Search results for TechElevatr services and content.";
        $data['keywords'] = "search, find services, TechElevatr search";
        $data['module'] = "home";
        $data['view_file'] = "search";
        echo Modules::run('template/layout2', $data);
    }
}
