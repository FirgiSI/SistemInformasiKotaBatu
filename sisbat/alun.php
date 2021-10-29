<?php
$title = "Alun-Alun Kota Batu";
include 'header.php';
?>
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-12 blog-body">
            <div class="single-blog-post">
                <div class="post-img">
                    <img style="width: 100%; height: 500px;" src="asset/images/wisata/alun.jpg" class="img-responsive"
                        alt="Blog image">
                </div>
                <h1 class="post-title">Alun-Alun Kota Batu</h1>
                <h4>Deskripsi</h4>
                <p class="post-content">Alun-alun ramai didominasi oleh Bianglala terkenal, serta patung penuh warna dan
                    kedai mi.</p>
                <hr style="backgroun-color: #ddd;">
                <h4>Alamat</h4>
                <p class="post-content"> Alun - Alun Kota Wisata Batu, Jl. Diponegoro, Sisir, Kec. Batu, Kota Batu, Jawa
                    Timur 65314</p>
                <hr>
                <h4>Lokasi</h4>
                <br>
                <div id="map" style="width:100%;height:380px;"></div>
                <script>
                function initMap() {
                    var alun = {
                        lat: -7.8711289,
                        lng: 112.5245416
                    };
                    var map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 9,
                        center: alun
                    });

                    var marker = new google.maps.Marker({
                        position: alun,
                        map: map
                    });
                    infowindow = new google.maps.InfoWindow;
                    infoContent =
                        '<p><b>Alun-Alun Kota Batu</b></p><img class="alun" src="asset/images/wisata/alun.jpg">'
                    marker.addListener('click', function() {
                        infowindow.setContent(infoContent)
                        infowindow.open(map, marker);
                    })

                }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap">
                </script>
                <hr>
                <a href="wisata.php" class="btn btn-primary">Kembali</a>
            </div>

        </div>
    </div>
</div>


<?php
include 'footer.php';
?>