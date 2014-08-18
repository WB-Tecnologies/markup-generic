<?php
$projectName = "project";
$projectTitle = "Generic Project";
?>
<!doctype html>
<!--[if lte IE 7]> <html class="no-js ie67 ie" lang="ru"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie" lang="ru"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9 ie" lang="ru"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?= $title ? $title. " | " . $projectTitle : $projectTitle ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="static/css/<?= $projectName ?>.all.css">
<link rel="stylesheet" href="static/css/<?= $projectName ?>.print.css" media="print">
<!--[if IE]><link rel="stylesheet" type="text/css" href="static/css/<?= $projectName ?>.ie.css"><![endif]-->
<link rel="icon" sizes="16x16" href="favicon.ico">
<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script>document.documentElement.className=document.documentElement.className.replace('no-js','js');</script>
</head>
<body>
<header class="l-header">
    <div class="l-restrictor">
        <nav class="header-nav">
            <ul class="header-nav_list">
                <li class="header-nav_item"><a href="index.html" class="header-nav_link">Index</a>
                <li class="header-nav_item"><a href="home.html" class="header-nav_link">Home</a>
                <li class="header-nav_item"><a href="about.html" class="header-nav_link">About</a>
                <li class="header-nav_item"><a href="contacts.html" class="header-nav_link">Contacts</a>
            </ul>
        </nav>
    </div>
</header>
