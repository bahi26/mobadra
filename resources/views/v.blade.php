<div id="latitude" type="hi"></div>
<input type="hidden" name="latitude" id="latitude">
<script type="text/javascript">
    var x = document.getElementById("demo");
    var users = {!! json_encode($user->toArray()) !!};
    console.log(users);
    function getLocation(user) {
        if (navigator.geolocation) {
            x.innerHTML=user[0].id;
            navigator.geolocation.getCurrentPosition(showPosition);
        }
    }

    function showPosition(position) {
        x.value = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }
</script>