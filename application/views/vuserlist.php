

 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">User List</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                       <th>User Number</th>
                                        <th>User Name</th>
                                        <th>User Email</th>
                                        <th>User Address</th>
                                        <th>User Phone</th>
                                        
                                    </thead>
                                    <tbody>
                                     <?php foreach ($userlist as $key => $value) {

                                    ?>                                        
                                    <tr>
                                            <td><?php echo ($key+1) ?></td>
                                            <td><?php echo $value->user_name ?></td>
                                            <td>
                                                <?php echo $value->user_email ?>

                                               
                                            </td>
                                            <td>
                                                <?php echo $value->user_phone ?>
                                            </td>
                                            <td>
                                                <?php echo $value->user_address ?>
                                            </td>
                                            
                                        </tr>

                                      <?php   } ?>
                                        
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                   
                </div>


            </div>
        </div>




