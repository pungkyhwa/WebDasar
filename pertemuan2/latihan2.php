<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form PHP</title>
</head>
<body>
    <form action="post.php" name="form2" method="post">
        <ol>
            <li>Nim : <input type="text" name="nim" id=""></li>
            <li>Nama : <input type="text" name="nama" id=""></li>
            <li>
                Jenis Kelamin : 
                Laki <input type="radio" name="jns_kel" id="" value="L">
                Perempuan <input type="radio" name="jns_kel" id="" value="P">
            </li>
            <li>
                tempat,tgl Lahir :
                <input type="text" name="tmp_lahir" id="">
                <input type="date" name="tgl_lahir" id="">
            </li>
            <li>
                umur :
                <input type="number" name="umur" id="">
            </li>
            <li>
                hobi :
                <input type="checkbox" id="" name="hobi[]" value="mancing">
                mancing 

                <input type="checkbox" id="" name="hobi[]" value="sepedaan">
                sepedaan

                <input type="checkbox" id="" name="hobi[]" value="rebaan">
                rebaan     
            </li>
            <li>
                pendidikan terakhir :
                <select name="pendidikan" id="">
                    <option value="">- = pilih = -</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </li>
            <li>
                alamat :
                <textarea name="alamat" id="" cols="30" rows="10"></textarea>
            </li>
            <li>
                email :
                <input type="email" name="" id="">
            </li>
            <li>
                password :
                <input type="password" name="" id="">
            </li>
            <li><input type="submit" name="simpan" value="proses"> <input type="reset" name="reset" value="reset"></li>
        </ol>
    </form>
    
</body>
</html>