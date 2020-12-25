<?php
	require('database.php');
	$id_barang=$_SESSION['id_barang'];
	$queryselect="SELECT * FROM tambahitem WHERE id_barang='$id_barang'";
	$result=mysqli_query($koneksi1,$queryselect);
	if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_assoc($result);
	} else echo"no item selected";
	$nullcheck2="SELECT image_barang_2 FROM tambahitem WHERE id_barang='$id_barang'";
	$nullcheck3="SELECT image_barang_3 FROM tambahitem WHERE id_barang='$id_barang'";
	$c2=mysqli_query($koneksi1,$nullcheck2);
	$c3=mysqli_query($koneksi1,$nullcheck3);
?>
<!-- Images -->
<div class="col-lg-2 order-lg-1 order-2">
					<ul class="image_list">
						<li data-image="iamges/single_4.jpg"><img src="images/<?php echo $row['image_barang_1'];?>" alt=""></li>
						<li data-image="images/single_2.jpg"><img src="<?php if($c2>0){echo "images/".$row['image_barang_2'];}?>" alt=""></li>
						<li data-image="images/single_3.jpg"><img src="<?php if($c3>0){echo "images/".$row['image_barang_3'];}?>" alt=""></li>
					</ul>
				</div>

				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img src="images/<?php echo $row['image_barang_1'];?>" alt=""></div>
				</div>

				<!-- Description -->
				<div class="col-lg-5 order-3">
					<div class="product_description">
						<div class="product_category"><?php echo $row['jenis_barang'];?></div>
						<div class="product_name"><?php echo $row['nama_barang'];?></div>
						<div class="product_text"><p><?php echo $row['desc_barang'];?></p></div>
						<div class="order_info d-flex flex-row">
							<form action="#">
								<div class="clearfix" style="z-index: 1000;">

									<!-- Product Quantity -->
									<div class="product_quantity clearfix mb-10">
										<span>Quantity: </span>
										<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
										
									</div>

									<!-- Product Color -->
									<ul class="product_color">
										<li>
											<span>Color: </span>
											<div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
											<div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

											<ul class="color_list">
												<li><div class="color_mark" style="background: #999999;"></div></li>
												<li><div class="color_mark" style="background: #b19c83;"></div></li>
												<li><div class="color_mark" style="background: #000000;"></div></li>
											</ul>
										</li>
									</ul>

								</div>

								<div class="product_price" style="margin-top: -5px;"><?php echo "Rp".number_format($row['harga_barang']);?></div>
								<div class="button_container">
									<button type="button" class="button cart_button"><a href="index.php?target=kuitansi">Add to Cart</a></button>
									<div class="product_fav"><i class="fas fa-heart"></i></div>
								</div>
								
							</form>
						</div>
					</div>
				</div>
				
