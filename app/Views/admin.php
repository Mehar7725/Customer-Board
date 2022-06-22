

                     <?php include "admin-nav.php"; ?>
                 <?php $session = session(); ?> 

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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($table as  $value) {
                           
                         ?>
                        <tr>
                            <td><?php echo $value['id']; ?></td>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['email']; ?></td>
                            <td><?php echo $value['phone']; ?></td>
                            <td>
                                <?php  
                                if ($value['admin'] == 0) {
                                    ?>
                                <a href="<?php echo base_url('/Admin/userToAdmin/'.$value['id']); ?>" class="btn btn-info userToAdmin" >User to Admin </a>;
                                    <?php
                                }else{
                                    ?>
                                    <a href="<?php echo base_url('/Admin/adminToUser/'.$value['id']); ?>" class="btn btn-primary">Admin to User</a>;
                                    <?php
                                }
                                ?>
                                
                                
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
                </div>
                    

                   <!-- Main Content End -->
                   <!-- Main Content End -->
                   <!-- Main Content End -->

                   <!-- Footer -->
                   <?php include_once "admin-footer.php"; ?>
                    <!-- Footer -->