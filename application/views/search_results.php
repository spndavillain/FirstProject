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

                <?=anchor("MainController/preview/$row->idNews", "Preview");?>

                &nbsp&nbsp

                <?= anchor("MainController/edit/$row->idNews", 'Edit');?>

                &nbsp&nbsp

                <?= anchor("MainController/delete/$row->idNews", 'Delete');?>

                </td>
          </tr>

        <?php endforeach; ?>

          </tbody>
        </table>