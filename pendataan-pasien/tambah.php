<html>
<head>
</head>
<body>
    <center><h1>DAFTAR PASIEN</h1>
    <form action="proses-tambah.php" method="POST">
    <form>
    <fieldset>
    <p>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" />
    </p>   
                
    <p>
        <label for="alamat">alamat pasien : </label>
        <textarea name="alamat" row="5"></textarea>
    </p>   

    <p>
        <label for="jk">jenis kelamin : </label>
        <label><input type="radio" name="jk" value="laki-laki"/> laki-laki </label>
        <label><input type="radio" name="jk" value="perempuan"/> perempuan </label>
    </p>
    
    <p>
        <label for="notelp">no. telp : </label>
        <input type="number" name="notelp" />
    </p>   
                
    <p>
        <label for="agama">agama : </label>
        <select name="agama" >
        <option value="islam"> Islam </option>
        <option value="Kristen">  Kristen</option>
        <option value="Budha"> Budha </option>
        <option value="konghucu"> Konghucu </option>
        <option value="Katolik"> katolik </option>
        <option value="Hindu"> Hindu </option>
        </select>
    </p>   

    <p>
        <label for="tanggal_masuk">tanggal masuk : </label>
        <input type="date" name="tanggal_masuk" />
    </p>    
    
    <p>
        <label for="gejala">gejala : </label>
        <input type="text" name="gejala" />
    </p>   

    <p>
        <label for="tempat_lahir">tempat_lahir : </label>
        <input type="text" name="tempat_lahir" />
    </p>
                
    <p>
        <label for="tanggal_lahir">tanggal lahir : </label>
        <input type="date" name="tanggal_lahir" />
    </p>   
                
    <p>
        <label for="no_kamar">no. kamar : </label>
        <input type="number" name="no_kamar" />
    </p>   
                
    <p>
        <input type="submit" value="tambah pasien" name="tambah" />
    </p>    
</fieldset>
</form> 
</body>
</html>