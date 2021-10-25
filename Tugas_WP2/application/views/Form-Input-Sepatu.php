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
            <legend>Input Penjualan Sepatu</legend>
    <center> 
        <form action="<?= base_url('P07_Review/cetak'); ?>" method="post">
        <table>
                <th>Nama Customer</th> 
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr> 
                
            <tr> 
                <th>No HP</th> 
                <td>:</td> 
                <td><input type="text" name="nhp" id="nhp"></td> 
            </tr>
                
            <tr> 
                <th>Merk</th> 
                <td>:</td> 
                <td><select name="merk" id="merk">
                    <option value="">-- Pilih --</option> 
                    <option value="Adidas">Adidas</option>
                    <option value="Nike">Nike</option>
                    <option value="Kickers">Kickers</option>
                    <option value="Eiger">Eiger</option>
                    <option value="Bucherri">Bucherri</option>
                    </select>
                </td> 
            </tr> 
                
            <tr> 
                <th>Ukuran</th> 
                <td>:</td> 
                <td><select name="ukuran" id="ukuran">
                    <option value="">-- Pilih --</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                    </select>
                </td> 
            </tr> 

            <tr>
                <td colspan="3" align="center"> 
                <input type="submit" value="Submit"> 
                </td> 
            </tr>

        </table> 
        </form>
    </fieldset> 
    </center> 
</body> 
 
</html>