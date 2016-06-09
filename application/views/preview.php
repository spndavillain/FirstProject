
<div class="container">
      <div class=" well">
        <?php echo form_open(); foreach ($record as $p) {?>
        
            <h1><?= $p->title;?></h1>
        <p>
          <?= $p->content;?>
        </p>
        <p>
          <label for="idState">State: <?=($p->idState)? "Published" : "unPublished";?></label>
        </p>
        <label>The Author is <?=  $p->idUser; ?></label>
        <?php } echo form_close();?>
        

        

      </div>

</div>