<?php                                    
    require('database.php');
	$queryselect = "select * from tambahitem";
	$hasilselect = mysqli_query($koneksi1,$queryselect);
	$jumlah = mysqli_num_rows($hasilselect);
	if ($jumlah>0){
		while ($row = mysqli_fetch_array($hasilselect)){
		//Slider Item
		    echo "<div class='featured_slider_item'>
					<div class='border_active'></div>
					<div class='product_item is_new d-flex flex-column align-items-center justify-content-center text-center'><a href='getInfoProduct.php?product=".$row['id_barang']."'>
						<div class='product_image d-flex flex-column align-items-center justify-content-center'><img src='images/".$row['image_barang_1']."' alt=''></div>
							<div class='product_content'>
								<div class='product_price'>Rp.".number_format($row['harga_barang'])."</div>
								<div class='product_name'><div><a href='getInfoProduct.php?product=".$row['id_barang']."'>".$row['nama_barang']."</a></div></div>
								<div class='product_extras'>
									<div class='product_color'>
										<input type='radio' checked name='product_color' style='background:#b19c83'>
										<input type='radio' name='product_color' style='background:#000000'>
										<input type='radio' name='product_color' style='background:#999999'>
									</div>
									";
									//risky tambah link add to cart.php
									//<button class='product_cart_button active'>Add to Cart</button>
									//<button class='product_cart_button active'><a href='../tubes_prak_pemweb/user/add_to_cart.php?target=".$row['id_barang']."'>Add to Cart</a></button>

									echo"
									<button class='product_cart_button active'><a href='index.php?target=add_to_cart&target1=".$row['id_barang']."'>Add to Cart</a></button>
								
								</div></a>
							</div>
							<ul class='product_marks'>
								<li class='product_mark product_discount'></li>
								<li class='product_mark product_new'>new</li>
							</ul>
						</div>
					</div>";
		}
    }
?>