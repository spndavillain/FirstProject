
<br><br>
<div class="container">
      <div class="view-details well">
        <?php echo form_open(); foreach ($record as $p) {?>
        
            <h1><?= $p->title;?></h1>
        <p>
          <?= $p->content;?>
        </p>
        
        <?php foreach ($state as $key ): ?>

        <p>
          <label for="idState">State: <?=;?></label>
        </p>
        <?php endforeach ?>
         <label>The Author is <?=  $p->idUser; ?></label>

        <?php } echo form_close();?>
        

      </div>

</div>