<?php
$title = "Batu Night Spectacular";
include 'header.php';
?>
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-12 blog-body">
            <div class="single-blog-post">
                <div class="post-img">
                    <img style="width: 100%; height: 500px;" src="asset/images/wisata/bns.jpg" class="img-responsive"
                        alt="Blog image">
                </div>
                <h1 class="post-title">Batu Night Spectacular</h1>
                <h4>Deskripsi</h4>
                <p class="post-content">Taman hiburan yang beroperasi malam hari dengan wahana, pertunjukan langsung,
                    permainan karnaval, & pasar.</p>
                <hr style="backgroun-color: #ddd;">
                <h4>Alamat</h4>
                <p class="post-content"> Jl. Hayam Wuruk No.1, Oro-Oro Ombo, Kec. Batu, Kota Batu, Jawa Timur 65316</p>
                <hr>
                <h4>Lokasi</h4>
                <br>
                <div id="map" style="width:100%;height:380px;"></div>
                <script>
                function initMap() {
                    var bns = {
                        lat: -7.8965265,
                        lng: 112.5325577
                    };
                    var map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 9,
                        center: bns
                    });

                    var marker = new google.maps.Marker({
                        position: bns,
                        map: map
                    });
                    infowindow = new google.maps.InfoWindow;
                    infoContent =
                        '<p><b>Batu Night Spectacular</b></p><img class="bns" src="asset/images/wisata/bns.jpg">'
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