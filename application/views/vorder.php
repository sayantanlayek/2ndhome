<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="header">
                                <h4 class="title">My order</h4>
                                <p class="category"><?php if(!empty($this->session->flashdata('CheckoutStatus'))){ ?>
                 <div class="successHandler alert alert-success ">
                        <i class="fa fa-remove-sign"></i> <?php echo $this->session->flashdata('CheckoutStatus'); ?>
                    </div> 
                    <?php } ?> </p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Order Number</th>
                                        <th>Total Expense</th>
                                        <th>Action</th>
                                        <th>Detailed View</th>
                                        
                                    </thead>
                                    <tbody>
                                    <?php foreach ($orderdata as $key => $value) {

                                    ?>                                        
                                    <tr>
                                            <td><?php echo ($key+1) ?></td>
                                            <td><?php echo $value->order_total ?></td>
                                            <td>
                                                <div class="successHandler alert <?php if($value->order_status != 'Pending'){ ?>alert-success <?php } else { ?> alert-danger <?php } ?> "><?php echo $value->order_status ?></div>

                                               
                                            </td>
                                            <td>
                                            	<a href="<?php echo base_url() ?>detailsorder?id=<?php echo $value->order_id ?>" class="btn btn-primary">Details</a>
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
        	localStorage.removeItem('cart');
        	localStorage.removeItem('total');
        </script>


