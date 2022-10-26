<!DOCTYPE html>
<?php
include "show-data.php"
?>
<html lang="en">
<head>
    
    <title>Profile Page</title>
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>
    <nav>
        <div class="menu-mobile">
            <a href="#" onclick="showMenu()">Menu</a>

        </div>
        <ul id="menu">
              <li><a href="beranda.html">Beranda</a></li>  
              <li><a href="product.html">Product</a></li>
              <li><a href="berita.html">Berita</a></li>
              <li><a href="pengaturan.html">Pengaturan</a></li>
              <li><a href="data admin.html">Data Admin</a></li>        
               
        </ul>
    </nav>
    <section id="box-profile">
        <div class="img-profile">
           <div class="photo" style="background-image:url(Assets/img/Foto.jpg)"></div>
          
        </div>
        <div class="description">
        <h1 id="pName">Bayu Rizqi Fachreza Ramadhan</h1>
        <p id="pSekolah">SMK Telkom Malang</p>
        <a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
        <a href="#"class="button border-blue">Resume</a>
       
    </div>
    <div class="information">
        <div class="data">
        <p class="field">Umur</p>
        <p id="pUmur" class="text-gray">16 Tahun</p>
        </div>
        <div class="data">
            <p class="field">Agama</p>
            <p id="pAgama" class="text-gray">Islam</p>
        </div>
        <div class="data">
        <p class="field">Lokasi</p>
            <p id="pLokasi" class="text-gray">Malang,Jawa Timur</p>
            </div>
            <div class="data">
                    <p class="field">Nomor Telepon</p>
                    <p id="pNomor" class="text-gray">081335213260</p>
                </div>
                <div class="data">
                        <p class="field">Email</p>
                        <p id="pEmail" class="text-gray">bayu_rizqi_27rpl@student.smktelkom-mlg.sch.id</p>
                    </div>
                    
    </div>
    </section>
    <section id="input-form">
        <form method="#" action="#">
        <div class="form">
        <label>Nama</label>
        <input id="inpNama" type="text" name="Nama">
    </div>

    <div class="form">
            <label>Sekolah</label>
            <input id="inpSekolah" type="text" name="Sekolah">
        </div>

        <div class="form">
                <label>Lokasi</label>
                <input id="inpLokasi" type="tetx" name="Lokasi">
            </div>
            
    <div class="form">
            <label>Umur</label>
            <input id="inpUmur" type="number" name="Umur">
        </div>
         
                <div class="form">
                        <label>Nomor Telepon</label>
                        <input id="inpNomor" type="text" name="Nomor Telepon">
                    </div>
                    <div class="form">
                            <label>Email</label>
                            <input id="inpEmail" type="email" name="Email">
                        </div>
                        <div class="form">
                            <input onclick="simpanForm()" type="submit" name="Submit" value="SUBMIT" class="bg-blue">
                        </div>
                    </form>
    </section>
    <script>
        var formMenu = document.getElementById("input-form");
        formMenu.style.display = "none";

        function editForm(){
            if(formMenu.style.display === "none"){
                formMenu.style.display = "block";
            }else{
                formMenu.style.display = "none";
            }
            var name = document.getElementById("pName").innerHTML;
            var Sekolah = document.getElementById("pSekolah").innerHTML;
            var Lokasi = document.getElementById("pLokasi").innerHTML;
            var Umur = document.getElementById("pUmur").innerHTML;
            var Nomor = document.getElementById("pNomor").innerHTML;
            var Email = document.getElementById("pEmail").innerHTML;


           document.getElementById("inpNama").value = name ;
           document.getElementById("inpSekolah").value = Sekolah;
           document.getElementById("inpLokasi").value = Lokasi;
           document.getElementById("inpUmur").value=Umur;
           document.getElementById("inpNomor").value=Nomor;
           document.getElementById("inpEmail").value=Email;

        }

       function simpanForm(){
           formMenu.style.display = "none";
            var name = document.getElementById("inpNama").value;
            var Sekolah = document.getElementById("inpSekolah").value;
            var Lokasi = document.getElementById("inpLokasi").value;
            var Umur = document.getElementById("inpUmur").value;
            var Nomor = document.getElementById("inpNomor").value;
            var Email = document.getElementById("inpEmail").value;

            document.getElementById("pNama").innerHTML = name ;
           document.getElementById("pSekolah").innerHTML = Sekolah;
           document.getElementById("pLokasi").innerHTML = Lokasi;
           document.getElementById("pUmur").innerHTML=Umur;
           document.getElementById("pNomor").innerHTML=Nomor;
           document.getElementById("pEmail").innerHTML=Email;
        }
        
    function showMenu(){
        var menu = document.getElementById("menu");
        var box = document.getElementById("box-profile");

        if(menu.style.display === "block"){
            menu.style.display ="none";
            box.style.paddingTop="0px";
        }else{
            menu.style.display="block";
            box.style.paddingTop="125px";
        }
    }
    </script>
    </body>
    </html>