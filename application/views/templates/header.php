<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CI BLOG</title>
    
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">Ciblog</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>about">About</a></li>
            <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
              <li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
              <li><a href="<?php echo base_url(); ?>categories/create">Create Categories</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
