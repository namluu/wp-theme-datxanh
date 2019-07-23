<?php

// default
$title = 'Đất Xanh Bắc Miền Trung - bất động sản, đất nền, nhà phố';
$desc = 'Đất Xanh Bắc Miền Trung - bất động sản, đất nền, nhà phố';
$key = 'Đất Xanh Bắc Miền Trung, dat xanh bac mien trung, bat dong san, bất động sản';
$smallImage = site_url('/inan.JPG');
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

<meta name="description" content="<?php echo $desc; ?>" />
<meta name="keywords" content="<?php echo $key; ?>" />
<meta name="robots" content="index,follow" />

<meta name="author" content="inanphuquoc.vn">
<meta name="copyright" content="inanphuquoc.vn">
<meta http-equiv="content-language" content="vi" />
<link rel="alternate" href="http://inanphuquoc.vn" hreflang="vi-vn" />

<!-- Open Graph Data - FB -->
<!--<meta property="fb:app_id" content="505851136287676" />-->
<meta property="og:title" content="<?php echo $title; ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="<?php echo $smallImage ?>"/>
<meta property="og:site_name" content="<?php echo $title; ?>"/>
<meta property="og:description" content="<?php echo $desc; ?>"/>
<meta property="og:image:width" content="300" />
<meta property="og:image:height" content="300" />
<meta property="og:url" content="<?php echo $url ?>" />
