 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js">

</script>
<script type="text/javascript" src="https://cdn.staticfile.org/select2/3.4.1/select2.js"></script>
<style type="text/css">
    select {
  width: 100%;
}
</style>
  
 <div class="content">
            <div class="container-fluid">
           
                <div class="row">
                <div class="col-md-6">
                <div class="row">
                <div class="col-md-6">
                   <strong>Select Dish : </strong>
                   </div>
                   <div class="col-md-6">
                   <select class="form-control"   data-placeholder="Select a Dish" id="products">


        <?php foreach ($menu as $key => $value) { ?>
                  <optgroup label="<?php echo $value->catagory_name ?>">
                  <?php foreach ($value->subs as $key => $value) {
                        ?>
                    <option value="<?php echo $value->sub_category_price ?>"><?php echo $value->sub_category_name; ?></option>
                   <?php } ?>
                  </optgroup>

            <?php } ?>

                  </select>
                </div>
                </div>
                
                </div>
                <div class="col-md-6">
                <div class="row">
                 <div class="col-md-6">
                 <strong>Quantity :</strong>
                 </div>
                 <div class="col-md-6">
                    <input  class="form-control" name="qty" placeholder="Enter Quentity" id="qty" type="text" value=""/>
                 </div>
                </div>
                </div>
                <button id="btnAdd" class="btn btn-primary pull-right" onclick="addToCart()" >Add Another Dish</button>
            </div>
             
            <div class="row">
                    

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Dine Order by Table</h4>
                               
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table id="cart1" class="table table-hover table-striped" style="visibility:hidden; width:100%">
                                    <thead>
                                        <th width="20%">Product</th>
                                        <th  width="20%">Price</th>
                                         <th width="20%">Qty</th>
                                         <th  width="20%">Total</th>
                                         <th  width="20%">Action</th>
                                        
                                    </thead>
                                    <tbody id="cart1Body">
                                    
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                   
                </div>
 <form id="dineorderform"   novalidate="novalidate" role="form" method="post" action="<?php echo base_url() ?>updatedineorder?id=<?php echo $dineorderdatabyid[0] ->order_id; ?>">
                <div class="row">
                <div class="col-md-6">
                <div class="row">
                <div class="col-md-6">
                <strong>Select Table</strong>
                </div>
                <div class="col-md-6">
                
                  <?php echo $dineorderdatabyid[0] ->table_name ; ?>
              
                </div>
                </div>
                </div>
             </div>
             <?php //echo $dineorderdatabyid[0] ->order_detils ; die();?>
        <input type="hidden" name="ordertot" id="ordertot" >
        <input type="hidden" name="totalpricedine" id="totalpricedine" >
         <button type="submit" class="btn btn-info btn-sm pull-right" id="mybutton">Update Dine Order</button>
        </form>
             

        </div>
        </div>
       
        



        <script>
        localStorage.cart1 = '<?php echo $dineorderdatabyid[0] ->order_detils ;?>';
        var cart1 = [];
        $(function () {
            if (localStorage.cart1)
            {
              
                cart1 = JSON.parse(localStorage.cart1);

                showCart();
            }
        });

        function addToCart() {
            var price = $("#products").val();
            var name = $("#products option:selected").text();
            var qty = $("#qty").val();

            // update qty if product is already present
            for (var i in cart1) {
                if(cart1[i].Product == name)
                {
                    cart1[i].Qty = qty;
                    showCart();
                    saveCart();
                    return;
                }
            }
            // create JavaScript Object
            var item = { Product: name,  Price: price, Qty: qty }; 
            cart1.push(item);
            saveCart();
            showCart();

        }

        function deleteItem(index){
            cart1.splice(index,1); // delete item at index
            showCart();
            saveCart();
        }

        function saveCart() {
            if ( window.localStorage)
            {
                localStorage.cart1 = JSON.stringify(cart1);
            }
            console.log(cart1);
            $('#ordertot').val(JSON.stringify(cart1));
        }

        function showCart() {
          console.log(cart1.length);
            if (cart1.length == 0) {
                $("#cart1").css("visibility", "hidden");
            }
            var total2 = 0;
for (var i in cart1) {
                     var item = cart1[i];
                     var total1 = parseInt(item.Qty) * parseInt(item.Price);
                     console.log(total1);
                     var total2 = parseInt(total2) + parseInt(total1);

                }
if (cart1 == ""){
     $('#totalpricedine').val('');
}
                localStorage.setItem("total1", total2);
                $('#totalpricedine').val(localStorage.total1);
            $("#cart1").css("visibility", "visible");
            $("#cart1Body").empty();
            for (var i in cart1) {
                var item = cart1[i];
                var row = "<tr><td>" + item.Product + "</td><td>" +
                             item.Price + "</td><td>" + item.Qty + "</td><td>"
                             + item.Qty * item.Price + "</td><td>"
                             + "<button onclick='deleteItem(" + i + ")'>Delete</button></td></tr>";
                $("#cart1Body").append(row);
            }
        }

       // A $( document ).ready() block.
$( document ).ready(function() {
    $('#ordertot').val(JSON.stringify(<?php echo $dineorderdatabyid[0] ->order_detils ;?>));
    $('#totalpricedine').val(<?php echo $dineorderdatabyid[0]->order_total; ?>);
});
    </script>
        <script src="<?php echo base_url() ?>assets/js/adddine.js"></script>
