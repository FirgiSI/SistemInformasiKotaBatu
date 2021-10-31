<?php
$title = "Jatim Park 3";
include 'header.php';
?>
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-12 blog-body">
            <div class="single-blog-post">
                <div class="post-img">
                    <img style="width: 100%; height: 500px;" src="asset/images/wisata/jtp3.jpg" class="img-responsive"
                        alt="Blog image">
                </div>
                <h1 class="post-title">Jawa Timur Park 3</h1>
                <h4>Deskripsi</h4>
                <p class="post-content">Taman hiburan populer dengan atraksi dinosaurus, museum lilin, kedai camilan &
                    pameran teknologi.</p>
                <hr style="backgroun-color: #ddd;">
                <h4>Alamat</h4>
                <p class="post-content"> Jl. Ir Sukarno No.144, Beji, Kec. Junrejo, Kota Batu, Jawa Timur 65236</p>
                <hr>
                <h4>Lokasi</h4>
                <br>
                <div id="map" style="width:100%;height:380px;"></div>
                <script>
                function initMap() {
                    var jtp3 = {
                        lat: -7.8971338,
                        lng: 112.550914
                    };
                    var map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 9,
                        center: jtp3
                    });

                    var marker = new google.maps.Marker({
                        position: jtp3,
                        map: map
                    });
                    infowindow = new google.maps.InfoWindow;
                    infoContent = '<p><b>Jatim Park 3</b></p><img class="jtp3" src="asset/images/wisata/jtp3.jpg">'
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