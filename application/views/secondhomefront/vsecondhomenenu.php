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
</style>
<?php //echo "<pre>"; print_r($menu); ?>
<div class="main">
		<div class="wrap">
			<div class="menu_list">

				<div class="row">
				<?php foreach ($menu as $key => $value) { ?>
					<div class="col-md-6">
					<div class="mainmenu"><?php echo $value->catagory_name ?></div>
					
					<?php foreach ($value->subs as $key => $value) {
						?>
						<div class="row">

							<div class="col-md-9">
								<div class="platename"><?php echo $value->sub_category_name ?></div>
								<div class="plateshortdesc"><?php echo $value->sub_category_desc ?></div>

							</div>
							<div class="col-md-3">&#x20b9 <?php echo $value->sub_category_price ?>
								
								<button class="btn btn-primary">Add to cart</button>
							</div>
						</div>
						<?php } ?>

					</div>
					
				<?php } ?>	
				</div>


			</div>
		</div>
</div>