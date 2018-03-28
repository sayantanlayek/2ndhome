 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Main Menu List view</h4>
                                <p class="category">We will list all the main menu</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>list No</th>
                                        <th>Menu Name</th>
                                        <th>Action</th>
                                        
                                    </thead>
                                    <tbody>
                                    <?php foreach ($mainmenulist as $key => $value) {

                                    ?>                                        
                                    <tr>
                                            <td><?php echo ($key+1) ?></td>
                                            <td><?php echo $value->catagory_name ?></td>
                                            <td>
                                                
                                                <a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-denger">Delete</a>

                                               
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



   