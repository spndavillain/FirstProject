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
    <?=anchor("MainController/preview/$row->idNews", "Preview")?>
    &nbsp&nbsp
    <?= anchor("MainController/edit/$row->idNews", 'Edit');?>
    &nbsp&nbsp
    <?= anchor("MainController/delete/$row->idNews", 'Delete');?>

    </td>
  </tr>

  <?php endforeach; ?>
  </div>
</body>
</html>