<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 62958 27525';
        $this->comp['phonehtml'] = 'tel:+916295827525';
        $this->comp['phone1'] = '+91 62958 27525';
        $this->comp['phonehtml1'] = 'tel:+916295827525';
        $this->comp['supportmail'] = 'techelevatr@gmail.com';
        $this->comp['replyToMail'] = 'techelevatr@gmail.com';
        $this->comp['mail'] = 'techelevatr@gmail.com';
        $this->comp['mailhtml'] = "mailto:techelevatr@gmail.com";
        $this->comp['company3'] = 'TechElevatr Digital Solutions';
        $this->comp['companydomain'] = 'techelevator.com';

        $this->comp['facebookhtml'] = "https://facebook.com/techelevator";
        $this->comp['youtubehtml'] = "https://youtube.com/@techelevator";
        $this->comp['instagramhtml'] = "https://instagram.com/techelevator";
        $this->comp['twitterhtml'] = "https://twitter.com/techelevator";
        $this->comp['linkedinhtml'] = "https://linkedin.com/company/techelevator";
        $this->comp['whatsapphtml'] = "https://wa.me/916295827525";

        $this->comp['address'] = "<address>TechElevatr, Siliguri, West Bengal, India</address>";
        $this->comp['address1'] = "TechElevatr";
        $this->comp['address2'] = "Siliguri, West Bengal, India";
        $this->comp['registeredAddress'] = "<address class='mb-0'>TechElevatr, Siliguri, West Bengal, India</address>";
        $this->comp['officeAddress'] = "<address class='mb-0'>TechElevatr, Siliguri, West Bengal, India</address>";
        $this->comp['addressRegion'] = "West Bengal";
        $this->comp['postalCode'] = "734001";
        $this->comp['companystate'] = "West Bengal";
        $this->comp['googleMapsUrl'] = "https://www.google.com/maps/place/TechElevatr/@26.7673514,88.3777813,741m/data=!3m1!1e3!4m6!3m5!1s0x39e4479f5ec40d61:0x11a1b7680111183c!8m2!3d26.7673251!4d88.3781995!16s%2Fg%2F11zjxvplwk?entry=ttu&g_ep=EgoyMDI2MDEyNi4wIKXMDSoKLDEwMDc5MjA2OUgBUAM%3D";
        $this->comp['themeColor'] = "#1E40AF";

        $this->comp['sku'] = "TECH-2024-001";
        $this->comp['mpn'] = "TE-WEB-001";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "250";
        $this->comp['datePublished'] = "15 july, 2024";
        $this->comp['reviewBody'] = "The service was seamless and professional from start to finish. The team is highly responsive, and they made sure everything was delivered on time. I really appreciate the clarity and transparency throughout the process.";
        $this->comp['reviewperson'] = "Rohan Sharma";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
