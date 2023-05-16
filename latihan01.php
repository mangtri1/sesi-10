<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form 01</title>
</head>
<body>
    <form name="latihan01" method="POST"onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>

        <div>
            Nama
            <input type="text" name="txNAMA">
        </div>

        <div>
            Jenis Kelamin
            <input type="radio" name="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>

        <div>
            Jurusan
            <select name="txJURUSAN">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option>
                <option value="DGM">DGM</option>
                <option value="TIPAR">TI PAR</option>
                <option value="SK">SK</option>

             </select>

        </div>

        <div>
            Hobby
            <input type="checkbox" name="musik">musik
            <input type="checkbox" name="tari">tari
            <input type="checkbox" name="membaca">membaca
            <input type="checkbox" name="tidur">tidur
            <input type="checkbox" name="lari">lari
        </div>

        <div>
            <button type="submit">kirim data</button>
        </div>
    </form>
    
    <script>
        function checkform(frm){
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value;
            let nama = f.namedItem("txNAMA").value;
            let jk = f.namedItem("txJK").value;
            let jrs = f.namedItem("txJURUSAN").value;
            let hobby_musik = f.namedItem("musik").checked;
            let hobby_tari = f.namedItem("tari").checked;
            let hobby_membaca = f.namedItem("membaca").checked;
            let hobby_tidur= f.namedItem("tidur").checked;
            let hobby_lari = f.namedItem("lari").checked;
        
           


            console.log("NIM: "+nim);
            console.log("Nama: "+nama);
            console.log("Jenis Kelamin :"+jk)
            console.log("JURUSAN :"+jrs)
            console.log("musik :"+hobby_musik)
            console.log("tari :"+hobby_tari)
            console.log("membaca :"+hobby_membaca)
            console.log("tidur :"+hobby_tidur)
            console.log("lari :"+hobby_lari)
            return false;
        }
    </script>
</body>
</html>