<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  if (!@$description) {
    $description = "$company3 offers reliable and efficient moving and storage solutions, ensuring your belongings are transported safely and securely to your new destination.";
  }
  if (!@$city) $city = "$addressRegion";
  if (!@$state) $state = "$companystate";
  if (!@$img) $img = base_url('') . "assets/images/logo/mfi_favicon.png";
  $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $url = ($url == site_url('home')) ? site_url() : strtolower($url);
  ?>
  <meta name="description" content="<?= @$description ?>" />
  <meta name="keywords" content="<?= @$keywords ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <link rel="canonical" href="<?= @$url ?>" />
  <meta name="author" content="<?= $company3 ?>" />
  <meta name="copyright" content="<?= $company3 ?>" />
  <meta name="reply-to" content="<?= $replyToMail ?>" />
  <meta name="expires" content="never" />
  <meta name="og_title" property="og:title" content="<?= @$title ?>">
  <meta property="og:type" content="website">
  <meta name="og_site_name" property="og:site_name" content="<?= $company3 ?>" />
  <meta property="og:image" content="<?= $img ?>" />
  <meta name="og_url" property="og:url" content="<?= @$url ?>" />
  <meta property="og:description" content="<?= @$description ?>" />
  <meta name="coverage" content="Worldwide" />
  <meta name="allow-search" content="yes" />
  <meta name="robots" content="index, follow" />
  <meta property="al:web:url" content="<?= site_url() ?>">
  <meta name="theme-color" content="<?= $themeColor ?>">
  <meta name="HandheldFriendly" content="True">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="<?= $themeColor ?>">
  <meta name="allow-search" content="yes" />
  <meta name="revisit-after" content="weekly" />
  <meta name="distribution" content="global" />
  <meta name="language" content="en" />
  <link rel="apple-touch-icon" href="<?= base_url('assets/images/logo/mfi_favicon.png') ?>">
  <link rel="shortcut icon" href="<?= base_url('assets/images/logo/mfi_favicon.png') ?>">
  <link rel="apple-touch-icon" href="<?= base_url('assets/images/logo/mfi_favicon.png') ?>">

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "<?= $company3 ?>",
      "url": "<?= site_url() ?>",
      "logo": "<?= base_url() ?>assets/images/logo/mfi_logo.png"
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "LocalBusiness",
      "name": "<?= $company3 ?>",
      "url": "<?= site_url() ?>",
      "image": ["<?= base_url() ?>assets/images/logo/mfi_logo.png"],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "  
        <?= $address1 ?> ",
        "addressLocality": "<?= $address2 ?>",
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
        }
      }],
      "paymentAccepted": ["Cash", "Master Card", "Visa Card", "Debit Cards", "Cheques", "Credit Card"],
      "priceRange": "500 - 40000",
      "telephone": "<?= $phone ?>",
      "email": "<?= $mail ?>"
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Product",
      "sku": "<?= $sku ?>",
      "mpn": "<?= $mpn ?>",
      "name": "Movers Federation Of India",
      "image": "<?= $img ?>",
      "description": "<?= @$description ?>",
      "url": "<?= $url ?>",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "<?= $ratingValue ?>",
        "ratingCount": "<?= $ratingCount ?>"
      },
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "<?= $ratingValue ?>",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "<?= $company3 ?>"
        }
      },
      "offers": {
        "@type": "Offer",
        "price": "4999.00",
        "priceCurrency": "INR",
        "priceValidUntil": "<?= date("Y-m-") ?>30",
        "availability": "https://schema.org/InStock",
        "url": "<?= $url ?>"
      },
      "brand": {
        "@type": "Brand",
        "name": "<?= $company3 ?>",
        "image": "<?= $img ?>"
      }
    }
  </script>

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">




  <!-- <link href="<?= base_url("assets") ?>/admin/css/main.css" rel="stylesheet"> -->
  <script src="<?= base_url() ?>assets/admin/js/jquery.min.js"></script>
  <style>
    :root {
      --mfi-primary: #6f42c1;
      /* inspired accent */
      --mfi-dark: #0b0b12;
      --mfi-light: #f8f9fc;
      --mfi-grad: linear-gradient(135deg, #6f42c1 0%, #0d6efd 50%, #20c997 100%);
    }

    body {
      background: var(--mfi-dark);
      color: #e9ecef;
    }

    .text-gradient {
      background: var(--mfi-grad);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    /* Hero */
    .hero {
      position: relative;
      overflow: hidden;
      background: radial-gradient(1200px 600px at 80% -10%, rgba(13, 110, 253, .25), transparent 60%),
        radial-gradient(1000px 500px at -10% 10%, rgba(111, 66, 193, .25), transparent 60%),
        linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0));
    }

    .hero .orb {
      position: absolute;
      border-radius: 50%;
      filter: blur(60px);
      opacity: .5;
    }

    .orb.orb-1 {
      width: 380px;
      height: 380px;
      background: #0d6efd;
      top: -60px;
      right: -120px;
    }

    .orb.orb-2 {
      width: 280px;
      height: 280px;
      background: #20c997;
      bottom: -80px;
      left: -60px;
    }

    .nav-link {
      color: #cbd5e1 !important;
    }

    .nav-link:hover {
      color: #fff !important;
    }

    .glass {
      background: rgba(255, 255, 255, .06);
      border: 1px solid rgba(255, 255, 255, .12);
      backdrop-filter: blur(8px);
      border-radius: 1rem;
    }

    .section-pad {
      padding: 3rem 0;
    }

    .brand-badge {
      border: 1px dashed rgba(255, 255, 255, .2);
      border-radius: 1rem;
      padding: 1.25rem;
    }

    .logo-tile {
      height: 56px;
      border-radius: .75rem;
      background: rgba(255, 255, 255, .06);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .logo-tile img {
      max-height: 32px;
      opacity: .9;
      filter: grayscale(1) contrast(.9);
    }

    .card {
      background: #111321;
      border: 1px solid rgba(255, 255, 255, .08);
    }

    .card h3,
    .card h4 {
      color: #fff;
    }

    .stat {
      font-size: clamp(2rem, 6vw, 3.5rem);
      font-weight: 800;
      letter-spacing: -.02em;
    }

    .muted {
      color: #aab0b7;
    }

    .footer {
      background: #0a0c16;
    }

    .btn-gradient {
      background: var(--mfi-grad);
      color: #fff;
      border: 0;
    }

    .btn-gradient:hover {
      filter: brightness(1.05);
      color: #fff;
    }

    .link-arrow {
      transition: transform .2s ease;
      display: inline-flex;
      align-items: center;
      gap: .5rem;
    }

    .link-arrow:hover {
      transform: translateX(4px);
    }

    /* Accessibility focus */
    :focus-visible {
      outline: 3px dashed #20c997;
      outline-offset: 4px;
    }

    /* Smooth anchors */
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body>