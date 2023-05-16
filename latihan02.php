<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form 02</title>
</head>
<body>
    <form name="latihan02" id="latihan02" method="POST"onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" id="nim" name="txNIM">
        </div>

        <div>
            Nama
            <input type="text" id="nama" name="txNAMA">
        </div>

        <div>
            Jenis Kelamin
            <input type="radio" id="jk" name="txJK" value="L">Laki-Laki
            <input type="radio" id="jk" name="txJK" value="P">Perempuan
        </div>

        <div>
            Jurusan
            <select name="txJURUSAN" id=jurusan>
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
            <input type="checkbox" id="txhobby" name="musik">musik
            <input type="checkbox" id="txhobby" name="tari">tari
            <input type="checkbox" id="txhobby" name="membaca">membaca
            <input type="checkbox"id="txhobby" name="tidur">tidur
            <input type="checkbox" id="txhobby" name="lari">lari
        </div>

        <div>
            <button type="submit">kirim data</button>
        </div>
    </form>
    
    <script>
        function checkform(frm){
            let f = document.getElementById("latihan02").elements;
            let nim = f.nim.value;
            let nama = f.nama.value;
            let jkel = f.jk.value;
            let jrs = f.jurusan.value;
            let hobby_musik = f.txhobby[0].checked;
            let hobby_tari = f.txhobby[1].checked;
            let hobby_membaca = f.txhobby[2].checked;
            let hobby_tidur= f.txhobby[3].checked;
            let hobby_lari = f.txhobby[4].checked;
        
           


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