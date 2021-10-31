<?php
$title = "Jatim Park 2";
include 'header.php';
?>
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-12 blog-body">
            <div class="single-blog-post">
                <div class="post-img">
                    <img style="width: 100%; height: 500px;" src="asset/images/wisata/jtp2.jpg" class="img-responsive"
                        alt="Blog image">
                </div>
                <h1 class="post-title">Jawa Timur Park 2</h1>
                <h4>Deskripsi</h4>
                <p class="post-content">Taman hiburan dengan kegiatan pendidikan seputar ilmu pengetahuan alam &
                    biologi, termasuk kebun binatang.</p>
                <hr style="backgroun-color: #ddd;">
                <h4>Alamat</h4>
                <p class="post-content"> Jl. Oro-Oro Ombo No.9, Temas, Kec. Batu, Kota
                    Batu, Jawa Timur 65315</p>
                <hr>
                <h4>Lokasi</h4>
                <br>
                <div id="map" style="width:100%;height:380px;"></div>
                <script>
                function initMap() {
                    var jtp2 = {
                        lat: -7.889071,
                        lng: 112.52748
                    };
                    var map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 9,
                        center: jtp2
                    });

                    var marker = new google.maps.Marker({
                        position: jtp2,
                        map: map
                    });
                    infowindow = new google.maps.InfoWindow;
                    infoContent = '<p><b>Jatim Park 2</b></p><img class="jtp2" src="asset/images/wisata/jtp2.jpg">'
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