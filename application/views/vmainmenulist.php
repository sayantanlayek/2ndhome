 <style>
a.pull-right.btn.btn-denger.myaddbtn {
    z-index: 1234567;
    position: relative;
    margin-top: -38px;
}
 </style>

 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Main Menu List view</h4>
                                <a href="<?php echo base_url() ?>foodmainmenuadd" class="pull-right btn btn-denger myaddbtn">Add New Main Menu</a>
                                <p class="category"><?php if(!empty($this->session->flashdata('MainmenuStatus'))){ ?>
                 <div class="successHandler alert alert-success ">
                        <i class="fa fa-remove-sign"></i> <?php echo $this->session->flashdata('MainmenuStatus'); ?>
                    </div> 
                    <?php } ?> </p>
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
                                                <a href="<?php echo base_url() ?>editmainmenu?id=<?php echo $value->category_id ?>" class="btn btn-primary">Edit</a>

                                                 <a href="<?php echo base_url() ?>Cmainmenu/deletemainmenu?id=<?php echo $value->category_id ?>" class="btn btn-denger">Delete</a>

                                               
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



   