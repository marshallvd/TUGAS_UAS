document.addEventListener('DOMContentLoaded', () => {
    const token = localStorage.getItem("token");
    console.log(token);
    const url = "https://gisapis.manpits.xyz/api/user";
    axios.get(url, {
        headers: {
            Authorization: `Bearer ${token}`,
        }
    })
    .then(response => {
        const userName = response.data.data.user.name; // Replace this with dynamic data
        document.querySelector('.user-name').textContent = userName;
    })
    .catch(error => {
        console.log(error);
    });

    const map = L.map('map').setView([-5.730814344013158, 116.59561511026043], 6);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 20,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);


    var iconMarker = L.icon({
        iconUrl :"{{ asset('storage/marker/marker.png') }}",
        iconSize:     [50, 50], // size of the icon
        shadowSize:   [50, 50], // size of the shadow
        // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
        // shadowAnchor: [4, 62],  // the same for the shadow
        // popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    })
    var marker = L.marker([-5.730814344013158, 116.59561511026043],{
        icon:iconMarker,
        draggable : true
    })
    .bindPopup('Ada apa disini?')
    .addTo(map);

    // -8.796408453257625, 115.17634384739371
    

     // Membuat popup baru
    var popup = L.popup({ 
        offset: [0, -20],
        minWidth:240,
        maxWidth: 500
    })
        .setLatLng(marker.getLatLng())
        .setContent('Ini adalah marker di Bali!');
    
    // Binding popup ke marker
    marker.bindPopup(popup);

    // Format popup content
    formatContent = function(lat, lng){
        return `
            <div class="wrapper">
                <div class="row">
                    <div class="cell merged" style="text-align:center"><b>Koordinat</b></div>
                </div>
                <div class="row">
                    <div class="col">Latitude</div>
                    <div class="col">${lat}</div>
                </div>
                <div class="row">
                    <div class="col">Longitude</div>
                    <div class="col">${lng}</div>
                </div>
            </div>
        `;
    }
    
    // Menambahkan event listener pada marker
    marker.on('click', function() {
        popup.setLatLng(marker.getLatLng()),
        popup.setContent(formatContent(marker.getLatLng().lat,marker.getLatLng().lng));
    });

    // Menambahkan event listener pada marker
    marker.on('drag', function(event) {
        popup.setLatLng(marker.getLatLng()),
        popup.setContent(formatContent(marker.getLatLng().lat,marker.getLatLng().lng));
        marker.openPopup();
    });

    setTimeout(function () {
        window.dispatchEvent(new Event("resize"));
    }, 500);

});
