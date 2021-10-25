<html> 
 
<head> 
    <title>Input Penjualan</title> 
</head>

<style>
    fieldset{
        width: 40%;
        margin: 20px auto;
        border-radius: 5px;
    }
</style>
 
<body>
<fieldset>
    <legend>Output Penjualan Sepatu</legend>
    <center> 
        <table>    
            <tr>
                <th>Nama Customer</th> 
                <td> : </td>
                <td><?= $nama; ?></td> 
            </tr> 
                
            <tr> 
                <th>No HP</th> 
                <td> : </td> 
                <td><?= $nhp; ?></td>
            </tr>
                
            <tr> 
                <th>Merk</th> 
                <td> : </td> 
                <td><?= $merk; ?></td>
                </td> 
            </tr> 
                
            <tr> 
                <th>Ukuran</th> 
                <td> : </td> 
                <td><?= $ukuran; ?></td> 
            </tr>

            <tr> 
                <th>Harga</th> 
                <td>:</td>
                <td><?= $harga; ?></td> 
            </tr> 

            <td colspan="3" align="center"> 
                    <a href="<?= base_url('P07_Review'); ?>">Kembali</a> 
                </td>
                </tr> 
        </table>
</fieldset>
    </center> 
</body> 
 
</html>