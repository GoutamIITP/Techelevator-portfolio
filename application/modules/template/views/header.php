<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $title ?? 'TechElevatr Digital Solutions - Web Development, App Development & IT Services' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
  // Default values for TechElevatr
  $company_name = "TechElevatr Digital Solutions";
  $company_tagline = "Elevate Your Digital Presence";

  if (!isset($description) || empty($description)) {
    $description = "TechElevatr Digital Solutions offers professional web development, mobile app development, SEO services, CRM/ERP solutions, and digital marketing. Transform your business with cutting-edge technology.";
  }

  if (!isset($keywords) || empty($keywords)) {
    $keywords = "web development, app development, SEO services, CRM, ERP, digital marketing, IT solutions, software development, website design, mobile apps";
  }

  // Contact Information (using dynamic values from controller)
  $phone = $phone ?? "+91 62958 27525";
  $phone1 = $phone1 ?? "+91 62958 27525";
  $phonehtml = $phonehtml ?? "tel:+916295827525";
  $phonehtml1 = $phonehtml1 ?? "tel:+916295827525";
  $mail = $mail ?? "techelevatr@gmail.com";
  $mailhtml = $mailhtml ?? "mailto:techelevatr@gmail.com";

  // Address Information
  $registeredAddress = $registeredAddress ?? "TechElevatr, Siliguri, West Bengal, India";
  $officeAddress = $officeAddress ?? "TechElevatr, Siliguri, West Bengal, India";
  $addressRegion = $addressRegion ?? "West Bengal";
  $postalCode = $postalCode ?? "734001";

  // SEO & Schema Data
  $ratingValue = "4.9";
  $ratingCount = "250";
  $datePublished = "2024-01-15";
  $reviewBody = "TechElevatr delivered an exceptional website for our business. Professional team, timely delivery, and excellent support!";
  $reviewperson = "Rajesh Kumar";
  $sku = "TECH-WEB-001";
  $mpn = "TE-2024-001";
  $themeColor = "#1E40AF";

  // URL Management
  $img = base_url('assets/images/logo/techelevator-logo.png');
  $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $url = ($url == site_url('home')) ? site_url() : strtolower($url);
  ?>

  <!-- SEO Meta Tags -->
  <meta name="description" content="<?= $description ?>" />
  <meta name="keywords" content="<?= $keywords ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <link rel="canonical" href="<?= $url ?>" />
  <meta name="author" content="<?= $company_name ?>" />
  <meta name="copyright" content="<?= $company_name ?>" />
  <meta name="reply-to" content="<?= $mail ?>" />
  <meta name="expires" content="never" />

  <!-- Open Graph Meta Tags -->
  <meta name="og_title" property="og:title" content="<?= $title ?>">
  <meta property="og:type" content="website">
  <meta name="og_site_name" property="og:site_name" content="<?= $company_name ?>" />
  <meta property="og:image" content="<?= $img ?>" />
  <meta name="og_url" property="og:url" content="<?= $url ?>" />
  <meta property="og:description" content="<?= $description ?>" />

  <!-- Additional Meta Tags -->
  <meta name="coverage" content="Worldwide" />
  <meta name="allow-search" content="yes" />
  <meta name="robots" content="index, follow" />
  <meta property="al:web:url" content="<?= site_url() ?>">
  <meta name="theme-color" content="<?= $themeColor ?>">
  <meta name="HandheldFriendly" content="True">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="<?= $themeColor ?>">
  <meta name="revisit-after" content="weekly" />
  <meta name="distribution" content="global" />
  <meta name="language" content="en" />

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="<?= base_url('assets/images/logo/instagram-files/logo-2.jpg') ?>">
  <link rel="shortcut icon" href="<?= base_url('assets/images/logo/instagram-files/logo-2.jpg') ?>">
  <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo/instagram-files/logo-2.jpg') ?>">

  <!-- Schema.org Markup - Organization -->
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "<?= $company_name ?>",
      "url": "<?= site_url() ?>",
      "logo": "<?= base_url('assets/images/logo/techelevator-logo.png') ?>",
      "description": "<?= $description ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?= $registeredAddress ?>",
        "addressLocality": "Noida",
        "postalCode": "<?= $postalCode ?>",
        "addressRegion": "<?= $addressRegion ?>",
        "addressCountry": "India"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "<?= $phone ?>",
        "contactType": "Customer Service",
        "email": "<?= $mail ?>"
      },
      "sameAs": [
        "https://www.facebook.com/techelevator",
        "https://www.linkedin.com/company/techelevator",
        "https://twitter.com/techelevator"
      ]
    }
  </script>

  <!-- Schema.org Markup - Local Business -->
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "LocalBusiness",
      "name": "<?= $company_name ?>",
      "url": "<?= site_url() ?>",
      "image": ["<?= base_url('assets/images/logo/techelevator-logo.png') ?>"],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?= $registeredAddress ?>",
        "addressLocality": "Noida",
        "postalCode": "<?= $postalCode ?>",
        "addressRegion": "<?= $addressRegion ?>",
        "addressCountry": "India"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "<?= $ratingValue ?>",
        "ratingCount": "<?= $ratingCount ?>",
        "bestRating": "5",
        "worstRating": "1"
      },
      "review": [{
        "@type": "Review",
        "datePublished": "<?= $datePublished ?>",
        "reviewBody": "<?= $reviewBody ?>",
        "author": {
          "@type": "Person",
          "name": "<?= $reviewperson ?>"
        },
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "5",
          "bestRating": "5"
        }
      }],
      "priceRange": "₹₹₹",
      "telephone": "<?= $phone ?>",
      "email": "<?= $mail ?>"
    }
  </script>

  <!-- Schema.org Markup - Service -->
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Service",
      "serviceType": "Web Development & IT Solutions",
      "provider": {
        "@type": "Organization",
        "name": "<?= $company_name ?>",
        "url": "<?= site_url() ?>"
      },
      "areaServed": {
        "@type": "Country",
        "name": "India"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "IT Services",
        "itemListElement": [{
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Website Development"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Mobile App Development"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "SEO Services"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "CRM/ERP Solutions"
            }
          }
        ]
      }
    }
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- TechElevatr Custom Theme -->
  <link href="<?= base_url('assets/css/techelevator-theme.css') ?>" rel="stylesheet">

  <!-- jQuery -->
  <script src="<?= base_url('assets/admin/js/jquery.min.js') ?>"></script>

</head>

<body>