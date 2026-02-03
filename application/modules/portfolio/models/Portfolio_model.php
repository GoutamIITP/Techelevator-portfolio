<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_projects($limit = null, $offset = 0)
    {
        // For now, return sample data. In production, this would query a database
        $projects = [
            [
                'id' => 1,
                'title' => 'E-commerce Platform for Fashion Brand',
                'slug' => 'ecommerce-fashion-platform',
                'short_description' => 'Complete online store with inventory management, payment gateway integration, and mobile-responsive design.',
                'image' => 'assets/images/portfolio/ecommerce-fashion.jpg',
                'additional_images' => [
                    'assets/images/portfolio/ecommerce-fashion-2.jpg',
                    'assets/images/portfolio/ecommerce-fashion-3.jpg'
                ],
                'category' => 'ecommerce',
                'tech_stack' => ['PHP', 'MySQL', 'Bootstrap', 'JavaScript', 'PayPal API'],
                'tags' => 'ecommerce, web development, fashion, online store',
                'client' => 'Fashion Forward Ltd.',
                'client_logo' => 'assets/images/clients/fashion-forward-logo.png',
                'project_url' => 'https://fashionforward.example.com',
                'completion_date' => '2024-01-15',
                'featured' => true
            ],
            [
                'id' => 2,
                'title' => 'Mobile Banking App',
                'slug' => 'mobile-banking-app',
                'short_description' => 'Secure mobile banking application with biometric authentication and real-time transaction processing.',
                'image' => 'assets/images/portfolio/banking-app.jpg',
                'additional_images' => [
                    'assets/images/portfolio/banking-app-2.jpg',
                    'assets/images/portfolio/banking-app-3.jpg',
                    'assets/images/portfolio/banking-app-4.jpg'
                ],
                'category' => 'mobile-apps',
                'tech_stack' => ['React Native', 'Node.js', 'MongoDB', 'Firebase', 'Biometric API'],
                'tags' => 'mobile app, banking, fintech, security',
                'client' => 'SecureBank Solutions',
                'client_logo' => 'assets/images/clients/securebank-logo.png',
                'project_url' => '',
                'completion_date' => '2023-12-20',
                'featured' => true
            ],
            [
                'id' => 3,
                'title' => 'Restaurant Chain SEO Campaign',
                'slug' => 'restaurant-seo-campaign',
                'short_description' => 'Comprehensive SEO strategy that increased organic traffic by 300% and local search visibility.',
                'image' => 'assets/images/portfolio/restaurant-seo.jpg',
                'additional_images' => [
                    'assets/images/portfolio/restaurant-seo-2.jpg'
                ],
                'category' => 'digital-marketing',
                'tech_stack' => ['Google Analytics', 'SEMrush', 'Google My Business', 'Schema Markup'],
                'tags' => 'SEO, digital marketing, restaurant, local SEO',
                'client' => 'Tasty Bites Restaurant',
                'client_logo' => 'assets/images/clients/tasty-bites-logo.png',
                'project_url' => 'https://tastybites.example.com',
                'completion_date' => '2024-02-10',
                'featured' => true
            ],
            [
                'id' => 4,
                'title' => 'Corporate Website Redesign',
                'slug' => 'corporate-website-redesign',
                'short_description' => 'Modern corporate website with responsive design and content management system.',
                'image' => 'assets/images/portfolio/corporate-website.jpg',
                'additional_images' => [
                    'assets/images/portfolio/corporate-website-2.jpg',
                    'assets/images/portfolio/corporate-website-3.jpg'
                ],
                'category' => 'web-development',
                'tech_stack' => ['WordPress', 'PHP', 'MySQL', 'jQuery', 'Bootstrap'],
                'tags' => 'corporate website, CMS, responsive design',
                'client' => 'TechCorp Industries',
                'client_logo' => 'assets/images/clients/techcorp-logo.png',
                'project_url' => 'https://techcorp.example.com',
                'completion_date' => '2023-11-30',
                'featured' => false
            ],
            [
                'id' => 5,
                'title' => 'Brand Identity Design',
                'slug' => 'brand-identity-design',
                'short_description' => 'Complete brand identity package including logo, business cards, and marketing materials.',
                'image' => 'assets/images/portfolio/brand-identity.jpg',
                'additional_images' => [
                    'assets/images/portfolio/brand-identity-2.jpg',
                    'assets/images/portfolio/brand-identity-3.jpg',
                    'assets/images/portfolio/brand-identity-4.jpg'
                ],
                'category' => 'branding',
                'tech_stack' => ['Adobe Illustrator', 'Photoshop', 'InDesign', 'Figma'],
                'tags' => 'branding, logo design, identity, marketing materials',
                'client' => 'StartUp Innovations',
                'client_logo' => 'assets/images/clients/startup-innovations-logo.png',
                'project_url' => '',
                'completion_date' => '2024-01-05',
                'featured' => false
            ],
            [
                'id' => 6,
                'title' => 'Food Delivery Mobile App',
                'slug' => 'food-delivery-app',
                'short_description' => 'Multi-vendor food delivery app with real-time tracking, payment integration, and rating system.',
                'image' => 'assets/images/portfolio/food-delivery-app.jpg',
                'additional_images' => [
                    'assets/images/portfolio/food-delivery-app-2.jpg',
                    'assets/images/portfolio/food-delivery-app-3.jpg'
                ],
                'category' => 'mobile-apps',
                'tech_stack' => ['Flutter', 'Firebase', 'Google Maps API', 'Stripe', 'Push Notifications'],
                'tags' => 'food delivery, mobile app, multi-vendor, real-time tracking',
                'client' => 'QuickEats Delivery',
                'client_logo' => 'assets/images/clients/quickeats-logo.png',
                'project_url' => '',
                'completion_date' => '2023-10-15',
                'featured' => true
            ],
            [
                'id' => 7,
                'title' => 'E-learning Platform UI/UX',
                'slug' => 'elearning-platform-ui-ux',
                'short_description' => 'User-centered design for online learning platform with interactive course modules.',
                'image' => 'assets/images/portfolio/elearning-ui.jpg',
                'additional_images' => [
                    'assets/images/portfolio/elearning-ui-2.jpg',
                    'assets/images/portfolio/elearning-ui-3.jpg',
                    'assets/images/portfolio/elearning-ui-4.jpg'
                ],
                'category' => 'ui-ux',
                'tech_stack' => ['Figma', 'Adobe XD', 'Sketch', 'InVision', 'Principle'],
                'tags' => 'UI/UX design, e-learning, user experience, interactive design',
                'client' => 'EduTech Solutions',
                'client_logo' => 'assets/images/clients/edutech-logo.png',
                'project_url' => 'https://edutech.example.com',
                'completion_date' => '2023-09-20',
                'featured' => false
            ],
            [
                'id' => 8,
                'title' => 'Healthcare App Design',
                'slug' => 'healthcare-app-design',
                'short_description' => 'Mobile app design for healthcare management with appointment booking and patient records.',
                'image' => 'assets/images/portfolio/healthcare-app.jpg',
                'additional_images' => [
                    'assets/images/portfolio/healthcare-app-2.jpg',
                    'assets/images/portfolio/healthcare-app-3.jpg'
                ],
                'category' => 'ui-ux',
                'tech_stack' => ['Figma', 'Adobe XD', 'Prototyping', 'User Research'],
                'tags' => 'healthcare, mobile app design, UI/UX, patient management',
                'client' => 'MediCare Plus',
                'client_logo' => 'assets/images/clients/medicare-logo.png',
                'project_url' => '',
                'completion_date' => '2024-03-10',
                'featured' => true
            ],
            [
                'id' => 9,
                'title' => 'Social Media Campaign',
                'slug' => 'social-media-campaign',
                'short_description' => 'Comprehensive social media marketing campaign that increased engagement by 250%.',
                'image' => 'assets/images/portfolio/social-media-campaign.jpg',
                'additional_images' => [
                    'assets/images/portfolio/social-media-campaign-2.jpg',
                    'assets/images/portfolio/social-media-campaign-3.jpg'
                ],
                'category' => 'digital-marketing',
                'tech_stack' => ['Facebook Ads', 'Instagram', 'Google Ads', 'Analytics', 'Canva'],
                'tags' => 'social media marketing, digital advertising, engagement, brand awareness',
                'client' => 'Lifestyle Brands Co.',
                'client_logo' => 'assets/images/clients/lifestyle-brands-logo.png',
                'project_url' => '',
                'completion_date' => '2023-12-05',
                'featured' => false
            ],
            [
                'id' => 10,
                'title' => 'Luxury Hotel Website',
                'slug' => 'luxury-hotel-website',
                'short_description' => 'Elegant website design for luxury hotel with booking system and virtual tours.',
                'image' => 'assets/images/portfolio/luxury-hotel.jpg',
                'additional_images' => [
                    'assets/images/portfolio/luxury-hotel-2.jpg',
                    'assets/images/portfolio/luxury-hotel-3.jpg'
                ],
                'category' => 'web-development',
                'tech_stack' => ['HTML5', 'CSS3', 'JavaScript', 'PHP', 'Booking API'],
                'tags' => 'luxury hotel, website design, booking system, hospitality',
                'client' => 'Grand Palace Hotel',
                'client_logo' => 'assets/images/clients/grand-palace-logo.png',
                'project_url' => 'https://grandpalace.example.com',
                'completion_date' => '2023-08-15',
                'featured' => true
            ],
            [
                'id' => 11,
                'title' => 'Tech Startup Branding',
                'slug' => 'tech-startup-branding',
                'short_description' => 'Complete branding package for AI-focused tech startup including logo and brand guidelines.',
                'image' => 'assets/images/portfolio/tech-startup-branding.jpg',
                'additional_images' => [
                    'assets/images/portfolio/tech-startup-branding-2.jpg',
                    'assets/images/portfolio/tech-startup-branding-3.jpg'
                ],
                'category' => 'branding',
                'tech_stack' => ['Adobe Creative Suite', 'Figma', 'Brand Strategy', 'Typography'],
                'tags' => 'tech startup, branding, logo design, brand identity, AI',
                'client' => 'AI Innovations Lab',
                'client_logo' => 'assets/images/clients/ai-innovations-logo.png',
                'project_url' => '',
                'completion_date' => '2024-02-28',
                'featured' => false
            ],
            [
                'id' => 12,
                'title' => 'Fitness App Development',
                'slug' => 'fitness-app-development',
                'short_description' => 'Cross-platform fitness app with workout tracking, nutrition planning, and social features.',
                'image' => 'assets/images/portfolio/fitness-app.jpg',
                'additional_images' => [
                    'assets/images/portfolio/fitness-app-2.jpg',
                    'assets/images/portfolio/fitness-app-3.jpg',
                    'assets/images/portfolio/fitness-app-4.jpg'
                ],
                'category' => 'mobile-apps',
                'tech_stack' => ['React Native', 'Firebase', 'HealthKit', 'Google Fit', 'Push Notifications'],
                'tags' => 'fitness app, health tracking, mobile development, cross-platform',
                'client' => 'FitLife Technologies',
                'client_logo' => 'assets/images/clients/fitlife-logo.png',
                'project_url' => '',
                'completion_date' => '2023-11-10',
                'featured' => true
            ]
        ];

        if ($limit) {
            return array_slice($projects, $offset, $limit);
        }

        return $projects;
    }

    public function get_project_by_slug($slug)
    {
        $projects = $this->get_all_projects();

        foreach ($projects as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }

        return false;
    }

    public function get_projects_by_category($category)
    {
        $projects = $this->get_all_projects();

        return array_filter($projects, function ($project) use ($category) {
            return $project['category'] === $category;
        });
    }

    public function get_featured_projects($limit = 6)
    {
        $projects = $this->get_all_projects();

        $featured = array_filter($projects, function ($project) {
            return $project['featured'] === true;
        });

        return array_slice($featured, 0, $limit);
    }

    public function get_related_projects($category, $exclude_id, $limit = 3)
    {
        $projects = $this->get_projects_by_category($category);

        $related = array_filter($projects, function ($project) use ($exclude_id) {
            return $project['id'] !== $exclude_id;
        });

        return array_slice($related, 0, $limit);
    }

    public function get_categories()
    {
        return [
            'web-development' => 'Web Development',
            'mobile-apps' => 'Mobile Apps',
            'ecommerce' => 'E-commerce',
            'ui-ux' => 'UI/UX Design',
            'branding' => 'Branding',
            'digital-marketing' => 'Digital Marketing'
        ];
    }
}
