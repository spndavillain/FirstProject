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
                  foreach ($news as $row): 
                  $idState=($row->idState==1)?'Published':'Unpublished';
              ?>
          <tr>
                <td><?=$row->idNews;?></td>
                <td><?= $row->title;?></td>
                <td><?= $row->datePublication;?></td>
                <td><?= $idState;?>&nbsp&nbsp&nbsp&nbsp
                <!-- Glyphicon -->
                <td>

                <a class="preview-link"  data-action="<?php echo base_url('index.php/MainController/preview')."/".$row->idNews; ?>" onmouseover="" style="cursor: pointer;">View</a>



                <a class="edit-link"  data-action="<?php echo base_url('index.php/MainController/edit')."/".$row->idNews; ?>" onmouseover="" style="cursor: pointer;">Edit</a>



                <a class="delete-link" data-action= "<?php echo base_url('index.php/MainController/delete')."/".$row->idNews;?>"onmouseover="" style="cursor: pointer;"> Delete</a>

                </td>
          </tr>

        <?php endforeach; ?>

          </tbody>
        </table>
        <script type="text/javascript" src="<?=base_url('assets/js/script.js')?>"></script>