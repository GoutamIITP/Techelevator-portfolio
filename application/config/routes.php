<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING - TechElevatr Digital Solutions
| -------------------------------------------------------------------------
*/

// Default Routes
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['translate_uri_dashes'] = TRUE;

// Home & Core Pages
$route['search'] = 'home/search';

// Services Routes (New Structure)
$route['services'] = 'services/index';
$route['services/web-development'] = 'services/webDevelopment';
$route['services/app-development'] = 'services/appDevelopment';
$route['services/seo-services'] = 'services/seoServices';
$route['services/crm-erp'] = 'services/crmErp';
$route['services/lead-generation'] = 'services/leadGeneration';
$route['services/hosting-domain'] = 'services/hostingDomain';
$route['services/e-commerce-web'] = 'services/ecommerceWeb';
$route['services/e-commerce-app'] = 'services/ecommerceApp';
$route['services/data-analysis']   = 'services/dataAnalysis';
$route['services/custom-software'] = 'services/customSoftware';

// Portfolio Routes (Replaces packers_movers)
$route['portfolio'] = 'portfolio/index';
$route['portfolio/category/(:any)'] = 'portfolio/category/$1';
$route['portfolio/(:any)'] = 'portfolio/view/$1';

// Testimonials Routes (Replaces reviews)
$route['testimonials'] = 'testimonials/index';

// Free Quote Form (Replaces details/join-us)
$route['free-quote'] = 'freequote/index';
$route['thank-you'] = 'freequote/thank_you';

// About Routes
$route['about'] = 'about/index';
$route['why-choose-us'] = 'about/choose';
$route['our-team'] = 'about/team';

// Blog Routes
$route['blog'] = 'blog/index';
$route['blog/(:any)'] = 'blog/view/$1';

// Contact Routes
$route['contact'] = 'contacts/index';

// Careers Routes
$route['careers'] = 'careers/index';
$route['careers/apply'] = 'careers/apply';
$route['careers/job/(:num)'] = 'careers/job_details/$1';

// Gallery Routes (Keep for backward compatibility)
$route['photo-gallery'] = 'gallery/photo_gallery';
$route['video-gallery'] = 'gallery/video_gallery';

// Policy Pages
$route['terms-and-conditions'] = 'home/terms';
$route['privacy-and-policy'] = 'home/privacy';
$route['cancellation-and-refund-policy'] = 'home/cancellation';
$route['shipping-and-delivery'] = 'home/shipping';

// Legacy Routes (For backward compatibility - redirect to new structure)
$route['home-relocation'] = 'services/webDevelopment';
$route['courier-and-cargo'] = 'services/appDevelopment';
$route['luggage-delivery'] = 'services/seoServices';
$route['goods-insurance'] = 'services/crmErp';
$route['office-relocation'] = 'services/leadGeneration';
$route['car-transportation-service'] = 'services/hostingDomain';
$route['join-us'] = 'freequote/index';

// Old packers_movers routes redirect to portfolio
$route['our-branches'] = 'portfolio/index';
$route['packers-movers-(:any)-india'] = 'portfolio/index';
$route['(:any)/packers-movers-(:any)'] = 'portfolio/index';

// Catch-all for old .htm files
$route['(:any).htm'] = 'home/error';
