<?php function sanitize_output($buffer) {$search = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s');$replace = array('>','<','\\1'); $buffer = preg_replace($search, $replace, $buffer); return $buffer; } ob_start("sanitize_output"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en-ca" class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html lang="en-ca" class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html lang="en-ca" class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-ca"> <!--<![endif]-->
<head>

    <!-- GENERAL STUFF -->
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="MobileOptimized" content="320" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- SITE/PAGE INFO -->
    <title><?php echo $page->metatitle()->bool() ?> | <?php echo $site->title()->html() ?></title>
    <meta name="google-site-verification" content="tjwlg8Q7I3CmF58-9XruF1_DkX8qTxEUmc0uq-Da4Aw" />
    <meta name="google-site-verification" content="rCvHQ0fTKBNbi7CBf3tZMp8uB4IjaU7S3NmUmgvfErY" />
    <meta name="description" content="<?php echo $page->metadesc()->html() ?>" />
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>" />
    <meta name="author" content="<?php echo $site->title()->html() ?>" />
    <link rel="canonical" href="<?php echo $page->metacanon() ?>" />

    <!-- FACEBOOK OPEN GRAPH -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $page->url() ?>" />
<?php if($image = $page->images()->sortBy('sort', 'asc')->first()): ?>
    <meta property="og:image" content="<?php echo $page->image('_meta.png')->url() ?>" /><?php endif ?>    
    <meta property="og:title" content="<?php echo $page->metatitle()->bool() ?>" />
    <meta property="og:author" content="https://facebook.com/bengroulx" />
    <meta property="og:site_name" content="Ben Groulx, Designer" />
    <meta property="og:description" content="<?php echo $page->metadesc()->html() ?>" />
    
    <!-- TWITTER CARDS -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="<?php echo $page->url() ?>" />
<?php if($image = $page->images()->sortBy('sort', 'asc')->first()): ?>
    <meta name="twitter:image" content="<?php echo $page->image('_meta.png')->url() ?>" /><?php endif ?>
    
    <meta name="twitter:title" content="<?php echo $page->metatitle()->bool() ?> | <?php echo $site->title()->html() ?>" />
    <meta name="twitter:creator" content="@bengroulx" />
    <meta name="twitter:site" content="@bengroulx" />
    <meta name="twitter:description" content="<?php echo $page->metadesc()->html() ?>" />

    <!-- BROWSER SPECIFICS -->
    <!--[if IEMobile]> <meta http-equiv="cleartype" content="on" /> <![endif]-->
    <!--[if lt IE 9]> <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script> <![endif]-->

    <!-- STYLES -->
    <style><?php readfile("assets/css/min.screen.css"); ?></style>

    <!-- LIBRARIES -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <!-- JAVASCRIPT -->
    <script src="//use.typekit.net/bcc4dok.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script><?php readfile("assets/js/min.fitvids.js"); ?></script>
    <script><?php readfile("assets/js/min.navigation.js"); ?></script>

    <!-- ICONS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title"   content="Ben Groulx" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo url('assets/icons/apple-icon-57.png') ?>" />
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo url('assets/icons/apple-icon-60.png') ?>" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo url('assets/icons/apple-icon-72.png') ?>" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo url('assets/icons/apple-icon-76.png') ?>" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo url('assets/icons/apple-icon-114.png') ?>" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo url('assets/icons/apple-icon-120.png') ?>" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo url('assets/icons/apple-icon-144.png') ?>" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo url('assets/icons/apple-icon-152.png') ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo url('assets/icons/apple-icon-180.png') ?>" />
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo url('assets/icons/android-icon-192.png') ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo url('assets/icons/favicon-32.png') ?>" />
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo url('assets/icons/favicon-96.png') ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo url('assets/icons/favicon-16.png') ?>" />
    <meta name="msapplication-TileImage" content="<?php echo url('assets/icons/ms-icon-144.png') ?>" />
    <meta name="msapplication-TileColor" content="#121b92" />

</head>
<body>

<?php snippet('menu') ?>

<!-- OPEN AROUND CONTENT -->
<main class="home">

<header id="top">
    <a href="<?php echo url('/') ?>">
        <img src="<?php echo url('assets/images/ben-groulx-signature.svg') ?>" onerror="this.onerror=null; this.src='<?php echo url('assets/images/ben-groulx-signature.png') ?>'" alt="Ben Groulx signature" title="Ben Groulx signature" width="250" height="95" />
    </a>
</header>

<section class="home-hero">
    <h1>Happy <?php date_default_timezone_set('America/Vancouver'); echo date("l"); ?>! <?php echo html($page->h1()) ?></h1>
        <a class="button" href="<? echo url('about'); ?>">More about me &rarr;</a>
        <a class="button" href="<? echo url('writings'); ?>">Read articles on design &rarr;</a>
</section>

<section class="diagonal reverse work">
    <?php foreach(page('projects')->children()->visible()->limit(3) as $project): ?>
    <a href="<?php echo $project->url() ?>" class="product" style="background-color:<?php echo $project->colour()->html() ?>">
        <h3 class="diagonal-inner"><?php echo $project->title()->html() ?> <span><?php echo $project->type()->html() ?></span></h3>
        <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" width="500" height="320" />
        <?php endif ?>
    </a>
    <?php endforeach ?>
    <a href="<? echo url('projects'); ?>" class="product" style="background-color:rgba(255,255,255,.15)">
        <h3 class="diagonal-inner">More work &rarr; <span>View all projects</span></h3>
    </a>
</section>

<section class="diagonal" style="background:#fff">
    <div class="diagonal-inner contain">
        <article class="blog-recent">
            <?php foreach($pages->find('writings')->children()->visible()->flip()->paginate(1) as $article): ?>
                <span class="title">Latest Article: <time datetime="<?php echo $article->date('d F Y') ?>" pubdate="pubdate"><?php echo $article->date('d F Y') ?></time></span>
                <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
                <?php echo excerpt($article->text(), 400) ?> <a href="<?php echo $article->url() ?>">Keep&nbsp;reading&nbsp;&rarr;</a>
            <?php endforeach ?>
            <a class="button" href="<? echo url('writings'); ?>">Read more articles &rarr;</a>
        </article>
    </div>
</section>

<?php snippet('footer') ?>