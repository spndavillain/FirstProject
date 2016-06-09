<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
  <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/modern-business.css');?>" rel="stylesheet">
    <link rel = "stylesheet" href = "<?php echo base_url("assets/css/main.css"); ?>">

    <!-- Custom Fonts -->
    <link href="<?=base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body >



<!--|||||||||||||||||||||||||||||||||||||||||||| Navigation |||||||||||||||||||||||||||||||||||||||||||||||-->
<!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">News Management System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Hello <?=$username?></a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Full Width Page</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Sidebar Page</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="404.html">404</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=base_url('index.php/MainController/logout')?>">Logout</a>         <!--Make a pop to show email -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!--|||||||||||||||||||||||||||||||||||||||||||| Head Carousel ||||||||||||||||||||||||||||||||||||||||||||-->
<!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->

    <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill firstpic"></div>
                    <div class="carousel-caption">
                        <h2>Announcements</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill secondpic" ></div>
                    <div class="carousel-caption">
                        <h2>Daily News</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill thirdpic"></div>
                    <div class="carousel-caption">
                        <h2>Hardware/Software Releases</h2>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>

<!--|||||||||||||||||||||||||||||||||||||||||||| MY TABS START HERE |||||||||||||||||||||||||||||||||||||||-->
<!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->
<div class="col-md-12"><br><br></div>

<div class="container">
<div class="pull-right col-md-1"><button class="btn btn-primary" id="addNews">Add News</button></div>
    <ul class="nav nav-tabs tab-panels tabrow">

      <li  class="active homeTab listofnews"><a data-toggle="tab" href="#home">List Of News</a></li>
      <li class="addNewsTab " style="display:none;"><a data-toggle="tab" href="#menu1">New News</a></li>
      <li class="previewTab " style="display:none;" ><a data-toggle="tab" href="#menu2">Preview News</a></li>
      <li class="editTab " style="display:none;"><a data-toggle="tab" href="#menu3">Edit News</a></li>
      <!--|||||||BUTTON TO BE AWARE OF ||||||-->
      
      <!--|||||||BUTTON TO BE AWARE OF ||||||-->
      
    </ul>
    <!--|||||||TABS CONTENT RIGHT HERE||||||-->

<div class="tab-content">

<!--|||||||TABS CONTENT ****HOME**** ||||||-->

    <div id="home" class="tab-pane fade in active">
            
            <br><br>
            <div class="col-md-3 well mysearch">
                <form class="form-search" action="<?=base_url('index.php/MainController/searchAjax');?>" method="post">
                  <h2>Search</h2>
                  <hr>
                  <label>Title</label><br>
                  <input type="text" value="" id="title" name="title" class="form-control"><br>
                  <label>Date</label><br>
                  <input type="date" value="" id="datePublication" name="datePublication" class="form-control"><br>
                   <label>State</label><br>
                  <select id="idState" name="idState"  class="form-control">
                    <option value="">Options</option>
                  <?php foreach ($state as $value): ?>
                   
                    <option id="idState" value="<?=$value->idState?>"><?=$value->description?></option>
                  <?php endforeach; ?>
                  </select>
                  <input class = "submit-search btn btn-primary" type="button" name="Submit" value="Search" id="d" />
                </form>
            </div>


<div class="delete">
      <div class="col-md-offset-2 col-md-7 search-result well mytable">
        <table class="table" id="t01" cellpadding="5" margin="0" cellspacing="5">
          <thead>
            <tr >
              <th>#</th>
              <th>Title</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              <?php 
                  foreach ($user as $row): 
                  $idState=($row->idState==1)?'Published':'Unpublished';
              ?>
          <tr>
                <td><?=$row->idNews;?></td>
                <td><?= $row->title;?></td>
                <td><?= $row->datePublication;?></td>
                <td><?= $idState;?>&nbsp&nbsp&nbsp&nbsp
                
                <td>

                <a class="preview-link"  data-action="<?php echo base_url('index.php/MainController/preview')."/".$row->idNews; ?>" onmouseover="" style="cursor: pointer;">View</a>



                <a class="edit-link"  data-action="<?php echo base_url('index.php/MainController/edit')."/".$row->idNews; ?>" onmouseover="" style="cursor: pointer;">Edit</a>


                <a class="delete-link" data-action= "<?php echo base_url('index.php/MainController/delete')."/".$row->idNews;?>"onmouseover="" style="cursor: pointer;"> Delete</a>

                </td>
          </tr>

        <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>

  </div>

<!--|||||||TABS CONTENT ****ONE**** ||||||-->

<div id="menu1" class="tab-pane fade ">
    <div class="col-md-offset-4 col-md-4 col-md-offset-4 fill well">

      <form method ="POST" action="<?=base_url('index.php/MainController/submit');?>" >

        Title: <br>
        <?php foreach ($author as $key) { ?>
        <input type="hidden" name="idUser" title="idUser" value="<?=$key->idUser;?>">

        <?php }?>
        <?php echo form_error('title'); ?>
        <input type="text" id="title" name="title" value="<?php echo set_value('title'); ?>"><br>

        State: <br>
        <?php echo form_error('idState'); ?>
        <select id="idState" name="idState">
                    <option value="">Choose</option>
                    <?php foreach ($state as $value): ?>
                    <option value="<?=$value->idState?>" ><?=$value->description?></option>
                  <?php endforeach; ?>
                  </select>
        Date: <br>
        <?php echo form_error('dataPublication'); ?>
        <input type="date" id="datePublication" name="datePublication"><br><br><br>
        <?php echo form_error('textcontent'); ?>
        <textarea id="mytextarea" name="textcontent" id="mytextarea"  rows="10" cols="44"></textarea>
        <button class="btn btn-primary save" id="submit">Save</button>

      </form>

    </div>
</div>

<!--|||||||TABS CONTENT ****TWO**** ||||||-->

<div><br><br>
<div id="menu2" class="tab-pane fade previewTab  preview-tab">





</div>
</div>
<!--|||||||TABS CONTENT ****THREE**** ||||||-->
<div id="menu3" class="tab-pane fade ">
<br><br>
    <div class="edit-tab">
    


    </div>
</div>



<script type="text/javascript" src="<?=base_url("assets/js/jquery-1.12.3.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/tinymce/tinymce.min.js"); ?>"></script>
<script type="text/javascript">tinymce.init({selector: "#mytextarea"});</script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/script.js')?>"></script>
<script>
  $('.carousel').carousel({
    interval:5000
  })
</script>
</body>
</html>