<html>
<meta name="viewport" content="width=device-width, initial-scale-1">
<link rel="stylesheet" href="w3.css">
<center>
    <div class="w3-container w3-blue">
        <h1>
            <b>
                FORM PENJUALAN ANAK
        </h1>
            </b>
    </div>    
<table>
    <?php
    error_reporting(0);
    $nama = $_POST['nama'];
    $barang = $_POST['barang'];
    $a1 = $_POST['batery'];
    $a2 = $_POST['charger'];
    $a3 = $_POST['flashdisk'];
    $a4 = $_POST['ssd'];
    $bayar = $_POST['jenis'];
    $harga = 0;
    $ha1 = 0;
    $ha2 = 0;
    $ha3 = 0;
    $ha4 = 0;
    $diskon = 0;
    $total= 0;

    if ($barang == 'PRINTER'){
        $harga = 2000000;
    } else if ($barang == 'MONITOR'){
        $harga = 1500000;
    } else if ($barang == 'LAPTOP'){
        $harga = 2500000;
    } else if ($barang == 'KOMPUTER'){
        $harga = 4500000;
    }

    echo "<tr><td class='w3-text-orange'>Nama Pembeli</td><td>: $nama</td></tr>";
    echo "<tr><td class='w3-text-orange'>Nama Barang</td><td>: $barang</td></tr>";
    echo "<tr><td class='w3-text-orange'>Harga Barang</td><td>: ".number_format($harga)."</td></tr>";

    if ($a1){
    $ha1 = 1500000;
        echo "<tr><td class='w3-text-orange'>$a1</td><td>: ".number_format($ha1)."</td></tr>";    
    }
    
    if ($a2){
    $ha2 = 1000000;
        echo "<tr><td class='w3-text-orange'>$a2</td><td>: ".number_format($ha2)."</td></tr>";    
    }
    if ($a3){
    $ha3 = 1200000;
        echo "<tr><td class='w3-text-orange'>$a3</td><td>: ".number_format($ha3)."</td></tr>";    
    }
    if ($a4){
    $ha4 = 1400000;
        echo "<tr><td class='w3-text-orange'>$a4</td><td>: ".number_format($ha4)."</td></tr>";    
    }

    $totalh = $harga + $ha1 + $ha2 + $ha3 + $ha4;

    echo "<tr><td class='w3-text-blue'>Total Harga</td><td>".number_format($totalh)."</td></tr>";  
    echo "<tr><td class='w3-text-blue'>Pembayaran</td><td>$bayar</td></tr>";
    
    if ($bayar == 'CASH'){
        $diskon = $totalh * 0,1;
        echo "<tr><td class='w3-text-blue'>Diskon 10%</td><td>".number_format($diskon)."</td></tr>";        
        
        $tbayar = $harga + $ha1 + $ha2 + $ha3 + $ha4 - $diskon;
        echo "<tr><td class='w3-text-blue'>Total Bayar</td><td>".number_format($bayar)."</td></tr>"; 
    }
    elseif($bayar == 'CREDIT'){
        $diskon = $totalh * 2,0;
        echo "<tr><td class='w3-text-blue'>CAS 20%</td><td>".number_format($diskon)."</td></tr>"; 
        
            
    //     $tbayar = $harga + $ha1 + $ha2 + $ha3 + $ha4 + $diskon;
    //     echo "<tr><td class='w3-text-blue'>Total Bayar</td><td>".number_format($tbayar)."</td></tr>"; 
       
    // }
    echo "<tr><td class='w3-text-blue'>Total Bayar</td><td>".number_format($totalh)."</td></tr>"; 
         
    ?>
</table>
</center>
</html>

     



