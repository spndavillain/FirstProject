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
<body>



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
                  foreach ($delete as $row): 
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


                <?= anchor("MainController/delete/$row->idNews", 'Delete');?>

                </td>
          </tr>

        <?php endforeach; ?>

          </tbody>
        </table>
 </div>

<script type="text/javascript" src="<?=base_url("assets/js/jquery-1.12.3.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/tinymce/tinymce.min.js"); ?>"></script>
<script type="text/javascript">tinymce.init({selector: "#mytextarea"});</script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/script.js')?>"></script>

</body>
</html>