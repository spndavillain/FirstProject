
<br><br>
<div class="container">
      <div class="view-details well">
        <?php echo form_open(); foreach ($record as $p) {?>
        
            <h1><?= $p->title;?></h1>
        <p>
          <?= $p->content;?>
        </p>
        <p>
        <label>State: <?=$p->description?></label>
        </p>
        <?php } echo form_close();?>
      </div>

</div>

