<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $data['title'] = "Error";
        $data['description'] = "Error Page";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = "India’s Trusted Network of Relocation Companies | Packers & Movers";
        $data['description'] = "Find verified packers and movers across India with our trusted relocation network. Hassle-free shifting, reliable services, and affordable moving solutions.";
        $data['keywords'] = "packes and movers";
        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }
    function terms()
    {

        $data['title'] = "Terms & Conditions | Trusted Packers and Movers Network";
        $data['description'] = "Read the terms and conditions for using our relocation services. Understand your rights, responsibilities, and service policies before booking packers and movers.";
        $data['keywords'] = "packes and movers";
        $data['module'] = "home";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout1', $data);
    }
    function privacy()
    {
        $data['title'] = "Privacy Policy | Packers & Movers Network India";
        $data['description'] = "Your privacy is important to us. Learn how we collect, use, and safeguard your personal information while connecting with trusted relocation companies.";
        $data['keywords'] = "packes and movers";
        $data['module'] = "home";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout1', $data);
    }
    function cancellation()
    {
        $data['title'] = "Cancellation & Refund Policy | Trusted Packers and Movers";
        $data['description'] = "Know our cancellation and refund policy before booking. Flexible relocation services with transparent cancellation terms for stress-free shifting.";
        $data['keywords'] = "packes and movers";
        $data['module'] = "home";
        $data['view_file'] = "cancellation";
        echo Modules::run('template/layout1', $data);
    }
    function shipping()
    {
        $data['title'] = "Shipping & Delivery Policy | Packers and Movers Services";
        $data['description'] = "Understand our shipping and delivery policy for relocation services. We ensure timely, safe, and hassle-free moving across India with trusted packers and movers.";
        $data['keywords'] = "packes and movers";
        $data['module'] = "home";
        $data['view_file'] = "shipping";
        echo Modules::run('template/layout1', $data);
    }
}
