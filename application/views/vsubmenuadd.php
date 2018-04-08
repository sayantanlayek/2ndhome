 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js">
</script>
<style type="text/css">
    .row.rowpad {
    margin-bottom: 12px;
}
</style>
 <div class="content">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12">
                		 <form id="submenuform" class="form-horizontal"  novalidate="novalidate" role="form" method="post" action="<?php echo base_url() ?>addsubmenu">
                		 	<div class="row rowpad">
                		 		<div class="col-md-6">
                		 			<div class="row">
                		 				<div class="col-md-6">
                		 				<strong>Main Menu : </strong>
                		 				</div>
                		 				<div class="col-md-6">

                                            
                                        <select class="form-control" name="mainmenu" id='mainmenu'>
                                        <option value="">--Select Main Menu--</option>
                                            <?php foreach ($mainmenulist as $key => $value) { ?>
                                                <option value="<?php echo $value->category_id ?>"><?php echo $value->catagory_name ?> </option>
                                            <?php } ?>
                                           

                                        </select>
                		 					
                		 				</div>
                		 				 
                		 			</div>
                		 		</div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <strong>Sub Menu : </strong>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control" name="submenufield" placeholder="Enter Sub Menu Name" id="submenufield" type="text" value="" >
                                        </div>
                                         
                                    </div>
                                </div>
                		 	</div>
                            <div class="row rowpad">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <strong>Sub Menu Description : </strong>
                                        </div>
                                        <div class="col-md-6">
                                        <textarea class="form-control" name="subdescription"  id="subdescription" cols="5" rows="5" placeholder="Enter Sub Menu Description"></textarea>
                                            
                                        </div>
                                         
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                        <strong>Sub Menu Price : </strong>
                                        </div>
                                        <div class="col-md-6">
                                           <input class="form-control" name="submenuprice" placeholder="Enter Sub Menu Price" id="submenuprice" type="text" value="" >
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
        <script src="<?php echo base_url() ?>assets/js/addsubmenu.js"></script>
