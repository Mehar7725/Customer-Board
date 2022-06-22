
                     <?php include "admin-nav.php"; ?>
                  

                  <!-- Content Row -->
                 <!-- Main Content Star -->
                 <!-- Main Content Star -->
                 <!-- Main Content Star -->
                 <div class="container ">
 
       


                <div class="row justify-content-center ">
                                    <div class="col-md-8 p-3 mt-5 rounded ad_note_section " style=" border: 1px solid rgb(215, 215, 215); z-index: 700; box-shadow: 2px 2px 16px -1px rgba(174,55,76,0.7);
                -webkit-box-shadow: 2px 2px 16px -1px rgba(174,55,76,0.7);
                -moz-box-shadow: 2px 2px 16px -1px rgba(174,55,76,0.7); ">
                                        <h3 class="text-info">Add Note</h3> <hr>
                                        <form action="<?php echo base_url('/Admin/updateaddnote'); ?>" method="POST">
                                        <div class="form-group mt-3">
                                            <input type="hidden" name="id" value="<?php echo $table['id'] ?>">
                                    <label for="" >Add Note:</label>
                                    <textarea name="adnote" id="" width="80%" rows="4" class="form-control"></textarea>
                                </div>
                                <div class="form-group mt-3">
                                        <button class="btn btn-primary" type="submit">Add Note</button>
                                        
                                </div>

                                </form>
                            </div>
                        </div>






             
              </div>
                

                 <!-- Main Content End -->
                 <!-- Main Content End -->
                 <!-- Main Content End -->

                 <!-- Footer -->
                 <?php include_once "admin-footer.php"; ?>
                  <!-- Footer -->


               