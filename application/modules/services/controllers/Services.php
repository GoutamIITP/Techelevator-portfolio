<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Services extends MX_Controller
{

    function homeRelocation()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "home_relocation";
    echo Modules::run('template/layout2', $data);
}

function office()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "office";
    echo Modules::run('template/layout2', $data);
}

function car()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "car";
    echo Modules::run('template/layout2', $data);
}

function courier()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "courier";
    echo Modules::run('template/layout2', $data);
}

function luggage()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "luggage";
    echo Modules::run('template/layout2', $data);
}

function insurance()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "insurance";
    echo Modules::run('template/layout2', $data);
}

}