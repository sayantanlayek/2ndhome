<style>
.mainmenu {
    font-size: 1.4pc;
    font-weight: 800;
    color: #beac7c;
}
.platename {
    font-size: 13px;
    font-weight: 600;
}
.plateshortdesc {
    font-size: 11px;
}
.row.marginfortop {
    margin-top: 14px;
}
.mymodelcart{
    text-align: right;
}
span#curttotal {
    background-color: #beac7c;
    width: 25px;
    height: 25px;
    position: absolute;
    margin-left: -9px;
    margin-top: -15px;
    border-radius: 7px;
    color: #ffffff;
    clear: both;
    text-align: center;
}
</style>
<?php //echo "<pre>"; print_r($menu); ?>
<div class="main">
		<div class="wrap">
			<div class="menu_list">
<!-- Button trigger modal -->
<div class="row mymodelcart">
<button type="button" class="btn btn-small btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg" onclick="showCart();"><i class="fa fa-shopping-cart" aria-hidden="true" ></i></button><span id="curttotal"></span>
</div>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">My Cart</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
         <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Qty</th> 
            <th>Total</th> 
            <th>Remove my Item</th>
        </tr>
         </thead>
          <tbody id="cartBody">
          

        </tbody>

              </table>
              <strong>Total =</strong><span id="total-price"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Add Anothr Item</button>
        <button type="button" class="btn btn-primary" onclick="checkout()">Checkout</button>
      </div>
    </div>
  </div>
</div>
				<div class="row">
				<?php foreach ($menu as $key => $value) { ?>
					<div class="col-md-6">
					<div class="mainmenu"><?php echo $value->catagory_name ?></div>
					
					<?php foreach ($value->subs as $key => $value) {
						?>
						<div class="row marginfortop">

							<div class="col-md-8">
								<div class="platename" id="plaemainname_<?php echo $value->sub_category_id ?>" data-subcatname="<?php echo $value->sub_category_name ?>" ><?php echo $value->sub_category_name ?></div>
								<div class="plateshortdesc" ><?php echo $value->sub_category_desc ?></div>

							</div>
							<div class="col-md-4" id="productprice_<?php echo $value->sub_category_id ?>" data-price="<?php echo $value->sub_category_price ?>"><i class='fa fa-inr' aria-hidden='true'></i> <?php echo $value->sub_category_price ?>
								
								<select id="qty_<?php echo $value->sub_category_id ?>">
								<?php for($i=1;$i<=20 ; $i++) {?>
									<option value="<?php echo $i ?>"><?php echo $i ?></option>
									<?php } ?>
								</select>

								<button class="btn btn-primary" onclick="addToCart(<?php echo $value->sub_category_id ?>)"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>


							</div>
						</div>
						<?php } ?>

					</div>
					
				<?php } ?>	
				</div>


			</div>
		</div>
</div>


<script> 
        var cart = [];
        var total = 0;
        $(function () {
            if (localStorage.cart)
            {
                cart = JSON.parse(localStorage.cart);
                //showCart();
            }
        });

        function addToCart(asd) {
        	var priceid = '#productprice_'+asd;
        	var subcatname = '#plaemainname_'+asd
            var price = $(priceid).attr("data-price");
            var name = $(subcatname).attr("data-subcatname");
            var qtymain = '#qty_'+asd
            var qty = $(qtymain).val();

            // update qty if product is already present
            for (var i in cart) {
                if(cart[i].Product == name)
                {
                    cart[i].Qty = qty;
                    //showCart();
                    saveCart();
                    return;
                }
            }
            // create JavaScript Object
            var item = { Product: name,  Price: price, Qty: qty }; 
            cart.push(item);
            saveCart();
            showCart()
        }

        function saveCart() {
            var total1 = 0;
            if ( window.localStorage)
            {
                localStorage.cart = JSON.stringify(cart);
                var totalcart = cart.length;
                $('#curttotal').html(totalcart);
                for (var i in cart) {
                     var item = cart[i];
                     var total = parseInt(item.Qty) * parseInt(item.Price);
                     var total1 = parseInt(total1) + parseInt(total);

                }
                localStorage.setItem("total", total1);
            }
        }
        console.log(localStorage.total) ;
        var totalcart = $.parseJSON(localStorage.cart).length;
                $('#curttotal').html(totalcart);
function showCart() {
    $('#total-price').html(" <i class='fa fa-inr' aria-hidden='true'></i>" + localStorage.total);
            if (cart.length == 0) {
               $('#curttotal').html(cart.length);
            }
console.log(cart);
            //$("#cart").css("visibility", "visible");
            $("#cartBody").empty();
            for (var i in cart) {
                var item = cart[i];

                var row = "<tr><td>" + item.Product + "</td><td><i class='fa fa-inr' aria-hidden='true'></i>" +
                             item.Price + "</td><td>" + item.Qty + "</td><td><i class='fa fa-inr' aria-hidden='true'></i>"
                             + item.Qty * item.Price + "</td><td>"
                             + "<button class='btn btn-danger' onclick='deleteItem(" + i + ")'><i class='fa fa-close'></i></button></td></tr>";
                $("#cartBody").append(row);
            }

        }

        function deleteItem(index){
            cart.splice(index,1); // delete item at index
            saveCart();
            showCart()
        }
function checkout(){
    window.location.href = "<?php echo base_url() ?>checkoutpage";
}
</script>