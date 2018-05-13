<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="header">
                                <h4 class="title">Dine orders</h4>
                                 <a href="<?php echo base_url() ?>dineorder" class="pull-right btn btn-denger myaddbtn">Add New Dine</a>
                                <p class="category"><?php if(!empty($this->session->flashdata('diineStatus'))){ ?>
                 <div class="successHandler alert alert-success ">
                        <i class="fa fa-remove-sign"></i> <?php echo $this->session->flashdata('diineStatus'); ?>
                    </div> 
                    <?php } ?> </p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Order Number</th>
                                        <th>Total Expense</th>
                                        <th>Delivery Status</th>
                                        <th>Detailed View</th>
                                        
                                    </thead>
                                    <tbody>
                                    <?php foreach ($dineorderdata as $key => $value) {

                                    ?>                                        
                                    <tr>
                                            <td><?php echo ($key+1) ?></td>
                                            <td><?php echo $value->order_total ?></td>
                                            <td>
                                                <div class="successHandler alert <?php if($value->order_status != 'Pending'){ ?>alert-success <?php } else { ?> alert-danger <?php } ?> "><?php echo $value->order_status ?></div>

                                               
                                            </td>
                                            <td>
                                            	<a href="<?php echo base_url() ?>detailsdine?id=<?php echo $value->order_id ?>" class="btn btn-primary">Details</a>
                                                <?php if( $value->order_status == 'Pending' && $value->user_id == '1'){ ?>
                                                <a href="<?php echo base_url() ?>dinedone?id=<?php echo $value->order_id ?>" class="btn btn-danger">Dine Done</a>
                                                <?php } ?>
                                            </td>
                                            
                                        </tr>

                                      <?php   } ?>
                                        
                                    </tbody>
                                </table>

                            </div>
                   
                </div>


            </div>
        </div>
        <script type="text/javascript">
        	localStorage.removeItem('cart1');
        	localStorage.removeItem('total1');
        </script>


