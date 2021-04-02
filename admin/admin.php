<?php 
  if($_SESSION['status']!="login"){
    session_start();
    header("location:../index.php?target=login");
  }
?>

<h3><i class="fas fa-user mr-3"></i><b>Admin</b> </h3>
<hr class="bg-dark ">
<div class="row ">
    <div class="col-md-4 ml-4 mr-5 mt-3 "> 
        <div class="card" style="width: 18rem;">
      
            <!-- <i class="fas fa-user mr-3 mt-2 mb-3  fa-4x"> </i>-->
            <div class="card-body bg-info ">
           <center><img src="admin.png "  class="card-img-top mr-3 mt-2 mb-3"  alt="..." > </center>
                <h5 class="card-title text-white">Nama Admin</h5>
                <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-light text-info">Ubah Password</a>
            </div>
        </div>

    </div>
    <div class="col-md-4">
        
    </div>
    
</div>