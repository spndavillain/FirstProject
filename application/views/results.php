<!DOCTYPE html>
<html>
<head>
  <title>Hello There</title>
  <link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>" />
<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/main.css">
</head>
<body>
<div class="display2">
<table class="table col-md-4" border="2" cellpadding="2" cellspacing="2">
  <tr class="active">

    <td>No.</td>
    <td>Title</td>
    
    <td>Date</td>

    <td>State</td>
    <td></td>
  </tr>
<?php 
  foreach ($news as $row): 
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
  </div>
</body>
</html>