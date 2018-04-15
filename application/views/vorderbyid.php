 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <?php //echo"<pre>"; print_r(json_decode($orderdatabyid[0]->order_detils)); print_r($orderdatabyid[0]->order_total); 

                        $orderbyidnew = json_decode($orderdatabyid[0]->order_detils)


                    ?>
                    <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Item name</th>
                                        <th>Item price</th>
                                        <th>Item Qty</th>
                                        <th>Item Qty</th>
                                        
                                    </thead>
                                    <tbody>
                                     <?php foreach ($orderbyidnew as $key => $value) {

                                    ?> 
                                        <tr>
                                        <td><?php echo $value->Product; ?></td>
                                        <td><i class="fa fa-inr" aria-hidden="true"></i><?php echo $value->Price; ?></td>
                                        <td><?php echo $value->Qty; ?></td>
                                        <td><i class="fa fa-inr" aria-hidden="true"></i><?php echo ($value->Qty *$value->Price); ?></td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                    </table>
                                    <strong>Total = </strong><i class="fa fa-inr" aria-hidden="true"></i><?php echo $orderdatabyid[0]->order_total; ?> 

                   
                </div>

            </div>
        </div>


