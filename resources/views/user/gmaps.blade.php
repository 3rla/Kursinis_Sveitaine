    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
            weight: 100%;
            height: 700px;
        }

    </style>

    <div class="card-body">
        <div id="map"></div>
    </div>

    <script type="text/javascript">
        function initMap() {
            const myLatLng = {
                lat: 54.9037302454133
                , lng: 23.89876957
            };
            const myLatLng2 = {
                lat: 54.9004124049497
                , lng: 23.88732219
            };
            const myLatLng3 = {
                lat: 54.89046033537563
                , lng: 23.919385253300483
            };
            const myLatLng4 = {
                lat: 54.909045931640435
                , lng: 23.904973863854003
            };
            const myLatLng5 = {
                lat: 54.906072596812955
                , lng: 23.93143787397521
            };
            const myLatLng6 = {
                lat: 54.9172012623585
                , lng: 23.920438450114695
            };
            const myLatLng7 = {
                lat: 54.91957873339576
                , lng: 23.949953697041234
            };
            const myLatLng8 = {
                lat: 54.92979792746772
                , lng: 23.97937349190747
            };
            const myLatLng9 = {
                lat: 54.93426200094267
                , lng: 23.965653812456313
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 12
                , center: myLatLng
                , center: myLatLng2
                , center: myLatLng3
                , center: myLatLng4
                , center: myLatLng5
                , center: myLatLng6
                , center: myLatLng7
                , center: myLatLng8
                , center: myLatLng9
            , });

            new google.maps.Marker({
                position: myLatLng
                , map
                , title: "Jonavos g. 60"
            , });

            new google.maps.Marker({
                position: myLatLng2
                , map
                , title: "Jonavos g. 601"
            , });

            new google.maps.Marker({
                position: myLatLng3
                , map
                , title: "Gedimino g. 1"
            , });

            new google.maps.Marker({
                position: myLatLng4
                , map
                , title: "Jonavos g. 68B"
            , });

            new google.maps.Marker({
                position: myLatLng5
                , map
                , title: "K. Petrausko g. 26"
            , });

            new google.maps.Marker({
                position: myLatLng6
                , map
                , title: "Eivenių g."
            , });

            new google.maps.Marker({
                position: myLatLng7
                , map
                , title: "S. Žukausko g."
            , });

            new google.maps.Marker({
                position: myLatLng8
                , map
                , title: "Partizanų g. 63M"
            , });

            new google.maps.Marker({
                position: myLatLng9
                , map
                , title: ""
            , });
        }

        window.initMap = initMap;

    </script>

    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
