 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form id="order" class="form-horizontal"  role="form" method="post" action="<?php echo base_url() ?>order">
                    <table class="table table-bordered">
                         <thead>
                          <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Qty</th> 
                            <th>Total</th> 
                        </tr>
                         </thead>
                        <tbody id="cartBody">
                      

                        </tbody>

                    </table>
                    <input type="hidden" value="" id="myorderlist" name="myorderlist">
                    <input type ="hidden" value="" id="mytotalprice" name="mytotalprice">
                    <button type="submit" class="btn btn-info btn-sm pull-right" id="mybutton">Order My Food</button>
                    </form>
                   <strong>Total =</strong><span id="total-price"></span>
                </div>

            </div>
        </div>




    <script type="text/javascript">
        $(document).ready(function(){

            
             $('#myorderlist').val(localStorage.cart);
             $('#mytotalprice').val(localStorage.total);
             var cart = $.parseJSON(localStorage.cart);
            $('#total-price').html(" <i class='fa fa-inr' aria-hidden='true'></i>" + localStorage.total);
             $("#cartBody").empty();
            for (var i in cart) {
                var item = cart[i];

                var row = "<tr><td>" + item.Product + "</td><td><i class='fa fa-inr' aria-hidden='true'></i>" +
                             item.Price + "</td><td>" + item.Qty + "</td><td><i class='fa fa-inr' aria-hidden='true'></i>"
                             + item.Qty * item.Price + "</td>"
                             + "</tr>";
                $("#cartBody").append(row);
            }

        });
    </script>