<?php 
require 'app/init.php';

// $product1 = new Komik("Naruto", "Masashi Kisimoto", "Shounen Jump", 30000, 100);
// $product2 = new Game("Uncharted", "Neil Druckman", "Sony", 250000, 50);

// $cetakProduct = new CetakInfoProduct;
// $cetakProduct->tambahProduct($product1);
// $cetakProduct->tambahProduct($product2);
// echo $cetakProduct->cetak();

use App\Service\User as ServiceUser;
use App\Product\User as ProductUser;

new ServiceUser;
echo "<br>";
new ProductUser;