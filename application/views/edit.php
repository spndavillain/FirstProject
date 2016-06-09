<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body style="padding-top:10px;">



<div class=" well">
      <form class="form-edit" action="<?=base_url('index.php/MainController/update');?>" method="post"?>
        <?php foreach ($record as $value) {?>
        <input type="hidden" name="idNews" title="idNews" value="<?=$value->idNews;?>">
          <h1>
            <label>Title</label>
          </h1>
          <div>
            <input type="text" name="title" id="title" value="<?=$value->title;?>">
          </div>
          <h1>
            <label>Content</label>
          </h1>
          <div>
            <textarea id="textarea" name="content"><?=$value->content;?></textarea>
          </div>
          <div class="mybutton">
          <button id="submit" class="btn btn-primary edit-button" >Save</button>
          </div>
          <h1>Publishing: <?=($value->idState)? "Published" : "unPublished";?></h1> 
          <?php }form_close();?>
      </form>
      </div>

       <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
      <script type="text/javascript">tinymce.init({selector: "#textarea"});</script>


</body>
</html>

      
