<?php
$title = "Jatim Park 1";
include 'header.php';
?>
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-12 blog-body">
            <div class="single-blog-post">
                <div class="post-img">
                    <img style="width: 100%; height: 500px;" src="asset/images/wisata/jtp1.jpg" class="img-responsive"
                        alt="Blog image">
                </div>
                <h1 class="post-title">Jawa Timur Park 1</h1>
                <h4>Deskripsi</h4>
                <p class="post-content">Taman hiburan dengan wahana, tempat makan, & pameran/pertunjukan budaya
                    tradisional Indonesia.</p>
                <hr style="backgroun-color: #ddd;">
                <h4>Alamat</h4>
                <p class="post-content"> Jl. Kartika No.2, Sisir, Kec. Batu, Kota
                    Batu, Jawa Timur 65315</p>
                <hr>
                <h4>Lokasi</h4>
                <br>
                <div id="map" style="width:100%;height:380px;"></div>
                <script>
                function initMap() {
                    var jtp1 = {
                        lat: -7.884052,
                        lng: 112.524846
                    };
                    var map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 9,
                        center: jtp1
                    });

                    var marker = new google.maps.Marker({
                        position: jtp1,
                        map: map
                    });
                    infowindow = new google.maps.InfoWindow;
                    infoContent = '<p><b>Jatim Park 1</b></p><img class="jtp1" src="asset/images/wisata/jtp1.jpg">'
                    marker.addListener('click', function() {
                        infowindow.setContent(infoContent)
                        infowindow.open(map, marker);
                    })

                    // tampilkan info window di atas marker


                }
                </script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap">
                </script>
                <hr>
                <a href="wisata.php" class="btn btn-primary">Kembali</a>
            </div>

            <br>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>