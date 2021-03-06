
          <div class="panel-body">

            <div class="row">

              <div class="col-md-6">
                <table class="table table-striped">
                  <tr>
                    <th colspan="4" style="text-align: center"><h4>Services - Internal</h4></th>
                  </tr>                  
                  <tr>
                    <th>Rateable name</th>
                    <th colspan='2'>Rating</th>
                    <th>Action</th>
                  </tr>
                  <?php foreach ($services as $value): ?>
                  <tr>
                    <td><?php echo $value->name ?></td>
                    <td>Average rating: <?php echo round($value->ratingy, 2) ?> ⭐</td>
                    <td>Total Ratings: <?php echo $value->total ?></td>
                    <td><button class="btn btn-xs btn-success comment-btn" data-comments='<?php echo json_encode($value->comments, JSON_HEX_QUOT|JSON_HEX_APOS) ?>'><i class="fa fa-comments-o"></i> Details</button></td>
                  </tr>
                  <?php endforeach; ?>

                   
                    <?php foreach ($services_zero as $value):
                    ?>
                  <tr>
                    <td><?php echo $value->name ?></td>
                    <td>Average rating: 0 ⭐</td>
                    <td>Total Ratings: 0</td>
                    <td></td>
                  </tr>
                  <?php 
                    endforeach;  ?>    


                    <?php if(!$services && !$services_zero): ?>     
                  <tr>
                    <td colspan="3">Empty table data</td>
                  </tr>
                  <?php endif ?>
                </table>
              </div>
              <div class="col-md-12">
                <br>
              </div>

              <div class="col-md-6">
                <table class="table table-striped">
                  <tr>
                    <th colspan="4" style="text-align: center"><h4>People - Internal</h4></th>
                  </tr>                  
                  <tr>
                    <th>Rateable name</th>
                    <th colspan='2'>Rating</th>
                    <th>Action</th>
                  </tr>
                  <?php 
                      foreach ($people as $value):
                    ?>
                  <tr>
                    <td><?php echo $value->name ?></td>
                    <td>Average rating: <?php echo round($value->ratingy, 2) ?> ⭐</td>
                    <td>Total Ratings: <?php echo $value->total ?></td>
                    <td><button class="btn btn-xs btn-success comment-btn" data-comments='<?php echo json_encode($value->comments, JSON_HEX_QUOT|JSON_HEX_APOS) ?>'><i class="fa fa-comments-o"></i> Details</button></td>
                  </tr>
                  <?php 
                    endforeach; ?>

                    <?php foreach ($people_zero as $value):
                    ?>
                  <tr>
                    <td><?php echo $value->name ?></td>
                    <td>Average rating: 0 ⭐</td>
                    <td>Total Ratings: 0</td>
                    <td></td>
                  </tr>
                  <?php 
                    endforeach; ?>    


                      <?php if (!$people && !$people_zero):  ?>                    
                  <tr>
                    <td colspan="3">Empty table data</td>
                  </tr>
                  <?php endif ?>
                </table>
              </div>

              <div class="col-md-12">
                <br>
              </div>

              <div class="col-md-6">
                <table class="table table-striped">
                  <tr>
                    <th colspan="4" style="text-align: center"><h4>Experience - Internal</h4></th>
                  </tr>                  
                  <tr>
                    <th>Rateable name</th>
                    <th colspan='2'>Rating</th>
                    <th>Action</th>
                  </tr>

                  <?php foreach ($experience as $value): ?>
                  <tr>
                    <td><?php echo $value->name ?></td>
                    <td>Average rating: <?php echo round($value->ratingy, 2) ?> ⭐</td>
                    <td>Total Ratings: <?php echo $value->total ?></td>
                    <td><button class="btn btn-xs btn-success comment-btn" data-comments='<?php echo json_encode($value->comments, JSON_HEX_QUOT|JSON_HEX_APOS) ?>'><i class="fa fa-comments-o"></i> Details</button></td>
                  </tr>
                  <?php  endforeach; ?> 

                  <?php foreach ($experience_zero as $value):
                    ?>
                  <tr>
                    <td><?php echo $value->name ?></td>
                    <td>Average rating: 0 ⭐</td>
                    <td>Total Ratings: 0</td>
                    <td></td>
                  </tr>
                  <?php  endforeach; ?>    

                    <?php if (!$experience && !$experience_zero):  ?>                    
                  <tr>
                    <td colspan="3">Empty table data</td>
                  </tr>
                  <?php endif; ?>
                </table>
              </div>

            </div>
          	 
          </div>
       