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
                                <h4 class="title">Sub Menu List view</h4>
                                <a href="<?php echo base_url() ?>foodsubmenuadd" class="pull-right btn btn-denger myaddbtn">Add New Sub Menu</a>
                                <p class="category"><?php if(!empty($this->session->flashdata('SubmenuStatus'))){ ?>
                 <div class="successHandler alert alert-success ">
                        <i class="fa fa-remove-sign"></i> <?php echo $this->session->flashdata('SubmenuStatus'); ?>
                    </div> 
                    <?php } ?> </p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th width="5%">list No</th>
                                        <th  width="20%">Main Menu Name</th>
                                         <th width="15%">Sub Menu Name</th>
                                         <th  width="30%">Sub Menu Description</th>
                                         <th  width="10%">Sub Menu Price</th>
                                        <th width="20%">Action</th>
                                        
                                    </thead>
                                    <tbody>
                                    <?php foreach ($submenulist as $key => $value) {

                                    ?>                                        
                                    <tr>
                                            <td><?php echo ($key+1) ?></td>
                                            <td><?php echo $value->catagory_name ?></td>
                                            <td><?php echo $value->sub_category_name ?></td>
                                            <td><?php echo $value->sub_category_desc ?></td>
                                            <td><i class="fa fa-inr" aria-hidden="true"></i><?php echo $value->sub_category_price ?></td>
                                            <td>
                                                <a href="<?php echo base_url() ?>editsubmenu?id=<?php echo $value->sub_category_id ?>" class="btn btn-primary">Edit</a> 
                                                <a href="<?php echo base_url() ?>Csubmenu/deletesubmenu?id=<?php echo $value->sub_category_id ?>" class="btn btn-denger">Delete</a>

                                               
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



   