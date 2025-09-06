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

        $this->comp['phone'] = '180012-181818';
        $this->comp['phonehtml'] = 'tel: 180012181818';
        $this->comp['phone1'] = '+91 7090-678-678';
        $this->comp['phonehtml1'] = 'tel:+91 7090678678';
        $this->comp['supportmail'] = 'support@arshad.in';
        $this->comp['replyToMail'] = 'info@arshad.in';
        $this->comp['mail'] = 'info@moversfederation.org';
        $this->comp['mailhtml'] = "mailto:info@moversfederation.org";
        $this->comp['company3'] = 'Movers Federation Of India';
        $this->comp['companydomain'] = 'moversfederation.com';

        $this->comp['facebookhtml'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitterhtml'] = "";
        $this->comp['linkedinhtml'] = "";
        $this->comp['whatsapphtml'] = "";

        $this->comp['address'] = "<address>1st floor Road No 1 Near Bank of India Ramkrishna Nagar Patna (800027)</address>";
        $this->comp['address1'] = "1st floor Road No 1 Near Bank of India";
        $this->comp['address2'] = "Ramkrishna Nagar Patna";
        $this->comp['registeredAddress'] = "<address class='mb-0'>4/488, 2nd Floor, Vibhav Khand, Gomti Nagar, Lucknow, Uttar Pradesh 206010, India.</address>";
        $this->comp['officeAddress'] = "<address class='mb-0'>MFI Movers, Business Park, 118, North, near Navachethana School, Yelahanka Hobli, Singanayakanahalli, Bengaluru, Karnataka - 560119, India.</address>";
        $this->comp['addressRegion'] = "Patna";
        $this->comp['postalCode'] = "800027";
        $this->comp['companystate'] = "Bihar";
        $this->comp['themeColor'] = "#e21b22";

        $this->comp['sku'] = "MFI65123";
        $this->comp['mpn'] = "MFI65123";
        // Review
        $this->comp['ratingValue'] = "4.8";
        $this->comp['ratingCount'] = "1839";
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
