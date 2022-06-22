
                     <?php include "admin-nav.php"; ?>
                  

                  <!-- Content Row -->
                 <!-- Main Content Star -->
                 <!-- Main Content Star -->
                 <!-- Main Content Star -->
                 <div class="container">

                 
                 <table class="table table-striped table-bordered">
                  <thead style="font-weight: 600; color:black;">
                      <tr>
                          <th>id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Note</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php
                        foreach ($table as  $value) {
                           if($value['admin'] == 0 && $value['borded'] == 0 && $value['note'] == 1){

 
                    
                      ?>
                      <tr>
                      <td><?php echo $value['id'] ?></td>
                          <td><?php echo $value['name'] ?></td>
                          <td><?php echo $value['email'] ?></td>
                          <td><?php echo $value['phone'] ?></td>
                          <td><?php echo $value['ad_note'] ?></td>
                          <td>
                              <a href="<?php echo base_url('/Admin/removenote/'.$value['id']); ?>" class="btn btn-primary"> Remove Note</a>
                            
                      </td>
                      </tr>
                      <?php          }   } ?>
                  </tbody>

              </table>
              </div>
                  

                 <!-- Main Content End -->
                 <!-- Main Content End -->
                 <!-- Main Content End -->

                 <!-- Footer -->
                 <?php include_once "admin-footer.php"; ?>
                  <!-- Footer -->