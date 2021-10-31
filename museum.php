<?php
$title = "Museum Angkut";
include 'header.php';
?>
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-12 blog-body">
            <div class="single-blog-post">
                <div class="post-img">
                    <img style="width: 100%; height: 500px;" src="asset/images/wisata/museum.jpg" class="img-responsive"
                        alt="Blog image">
                </div>
                <h1 class="post-title">Museum Angkut</h1>
                <h4>Deskripsi</h4>
                <p class="post-content">Museum unik yang menampilkan adegan & karakter film Hollywood, serta mobil,
                    tank, & moped.</p>
                <hr style="backgroun-color: #ddd;">
                <h4>Alamat</h4>
                <p class="post-content"> Jl. Terusan Sultan Agung No.2, Ngaglik, Kec. Batu, Kota Batu, Jawa Timur 65314
                </p>
                <hr>
                <h4>Lokasi</h4>
                <br>
                <div id="map" style="width:100%;height:380px;"></div>
                <script>
                function initMap() {
                    var museum = {
                        lat: -7.8786133,
                        lng: 112.5175892
                    };
                    var map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 9,
                        center: museum
                    });

                    var marker = new google.maps.Marker({
                        position: museum,
                        map: map
                    });
                    infowindow = new google.maps.InfoWindow;
                    infoContent = '<p><b>Museum Angkut</b></p><img class="museum" src="asset/images/wisata/museum.jpg">'
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