 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js">
</script>
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                		 <form id="mainmenuform" class="form-horizontal"  novalidate="novalidate" role="form" method="post" action="<?php echo base_url() ?>addfoodtable">
                		 	<div class="row">
                		 		<div class="col-md-6">
                		 			<div class="row">
                		 				<div class="col-md-6">
                		 				<strong>Table name : </strong>
                		 				</div>
                		 				<div class="col-md-6">
                		 					<input class="form-control" name="tablename" placeholder="Enter Table name" id="tablename" type="text" value="" >
                		 				</div>
                		 				 
                		 			</div>
                		 		</div>
                		 	</div>
                		 	<button type="submit" class="btn btn-info btn-sm pull-right" id="mybutton">Submit</button>
                		 </form>

                	</div>
                   
                </div>

            </div>
        </div>
        <script src="<?php echo base_url() ?>assets/js/addtable.js"></script>
