<?php                                    
    require('database.php');
	$queryselect = "select * from tambahitem";
	$hasilselect = mysqli_query($koneksi1,$queryselect);
	$jumlah = mysqli_num_rows($hasilselect);
	if ($jumlah){
		while ($row = mysqli_fetch_array($hasilselect)){
		//Slider Item
		    echo "<div class='featured_slider_item'>
					<div class='border_active'></div>
					<div class='product_item is_new d-flex flex-column align-items-center justify-content-center text-center'>
						<div class='product_image d-flex flex-column align-items-center justify-content-center'><img src='images/".$row['image_barang_1']."' alt=''></div>
							<div class='product_content'>
								<div class='product_price'>Rp.".number_format($row['harga_barang'])."</div>
								<div class='product_name'><div><a href='product.html'>".$row['nama_barang']."</a></div></div>
								<div class='product_extras'>
									<div class='product_color'>
										<input type='radio' checked name='product_color' style='background:#b19c83'>
										<input type='radio' name='product_color' style='background:#000000'>
										<input type='radio' name='product_color' style='background:#999999'>
									</div>
									<button class='product_cart_button active'>Add to Cart</button>
								</div>
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