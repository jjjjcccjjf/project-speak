<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            <?php echo $type ?>
            <?php if ($flash_msg = $this->session->flash_msg): ?>
              <br><sub style="color: <?php echo $flash_msg['color'] ?>"><?php echo $flash_msg['message'] ?></sub>
            <?php endif; ?>
          </header>
          <div class="panel-body">
            <p>
              <button type="button" class="add-btn btn btn-success btn-sm">Add new</button>
            </p>
            <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="1">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (count($res) > 0 ): ?>

                    <?php foreach ($res as $key => $value): ?>
                      <tr>
                        <th scope="row"><?php echo $starty++ ?></th>
                        <td><?php echo $value->name ?></td>
                        <td><?php echo $value->description ?></td>
                        <td><a target="_blank" href="<?php echo $value->image_url ?>"><img src='<?php echo $value->image_url ?>' style="height:50px"/></a></td>
                        <td>
                          <button type="button"
                          data-payload='<?php echo json_encode(['id' => $value->id, 'name' => $value->name, 'description' => $value->description, 'image_url' => $value->image_url], JSON_HEX_APOS|JSON_HEX_QUOT)?>'
                          class="edit-row btn btn-info btn-xs">Edit</button>
                          <button type="button" data-id='<?php echo $value->id; ?>' data-type='<?php echo $type_lower; ?>'
                            class="btn btn-delete btn-danger btn-xs">Delete</button>
                        </td>
                        </tr>
                      <?php endforeach; ?>


                    <?php else: ?>
                      <tr>
                        <td colspan="5" style="text-align:center">Empty table data</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>

                <ul class="pagination">
                  <ul class='pagination'>
                    <?php
                    for ($i=1; $i <= $total_pages; $i++) { ?>
                      <li><a
                        class="<?php echo ($i == $page) ? 'active_lg' : '' ?>"
                        href="<?php echo base_url($this->uri->uri_string())
                        . "?page=" . $i;
                        ?>"><?php echo $i ?></a></li>
                      <?php } ?>
                    </ul>
                  </ul>
              </div>
            </div>
          </section>
        </div>
      </div>
      <!-- page end-->
    </section>
  </section>

  <!-- Modal -->
  <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Manage</h4>
        </div>
        <div class="modal-body">

          <form role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label ><?php echo $type ?> name</label>
              <input type="text" class="form-control" name="name" placeholder="<?php echo $type ?> name">
              <input type="hidden" name="type" value="<?php echo $type_lower ?>">
            </div>            
            <div class="form-group">
              <label >Description</label>
              <textarea class="form-control" name="description" placeholder="Description"></textarea>
            </div>            
            <div class="form-group">
              <label >Image</label>
              <a target="_blank" href=""><img src='' class="modal-img" style="height:50px"/></a>
              <input type="file" name="image_file">
            </div>
 
          </div>
          <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
            <input class="btn btn-info" type="submit" value="Save changes">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- modal -->

  <script src="<?php echo base_url('public/admin/js/custom/') ?>rateables_management.js"></script>
  <script src="<?php echo base_url('public/admin/js/custom/') ?>generic.js"></script>
