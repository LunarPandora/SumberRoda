window.onscroll = function(e){
    var pageTop = window.scrollY;
    var pageBottom = pageTop + window.innerHeight;
    var tags = document.getElementsByClassName('animate');

    if(window.scrollY >= 50){
        document.getElementById('navbar').classList.add("navbar-colored");
        document.getElementById('navbar').classList.remove("p-4");
        document.getElementById('navbar').classList.add("p-2");
    }
    else{
        document.getElementById('navbar').classList.remove("navbar-colored");
        document.getElementById('navbar').classList.remove("p-2");
        document.getElementById('navbar').classList.add("p-4");
    }
    // for(var i = 0; i < tags.length; i++){
    //     var tag = tags[i];
    //     if(tag.offsetTop < pageBottom - 50){
    //         tag.classList.add('fadeUpIn');
    //     }
    // }
};

const mapGL = ({container, coordinate}) => {
    mapboxgl.accessToken = 'pk.eyJ1IjoianVsaXVza2F5bmUiLCJhIjoiY2w2cmtxc29xMG9jczNqbzh4Mm53d2wwNSJ9.tu7_n3gV4ZaV0Absev0ErQ';
    
    id = new mapboxgl.Map({
        container, // container ID
        style: 'mapbox://styles/mapbox/dark-v11', // style URL
        center: [coordinate.long,coordinate.lat], // starting position [lng, lat]
        zoom: 12, // starting zoom
        projection: 'globe', // display the map as a 3D globe
    });
}

function changeDisplay(x){
    var jenis = ['ban', 'velg', 'oli', 'baterai'];

    jenis.forEach((val, idx) => {
        if(x == val){
            document.getElementById('btn-ctg-' + idx).classList.remove('btn-invisible');
            document.getElementById('btn-ctg-' + idx).classList.add('btn-secondary');

            document.getElementById(val).classList.remove('none');
            document.getElementById(val).classList.add('flex');
        }
        else{
            document.getElementById('btn-ctg-' + idx).classList.add('btn-invisible');
            document.getElementById('btn-ctg-' + idx).classList.remove('btn-secondary');

            document.getElementById(val).classList.remove('flex');
            document.getElementById(val).classList.add('none');
        }
    })
}

window.onload = function(){
    const map = document.querySelector('.map');
        
    mapGL({
        container: map.id,
        coordinate: {long: map.getAttribute('data-longitude'), lat: map.getAttribute('data-latitude')}
    })

    changeDisplay('ban');
    // var tag = document.getElementsByClassName('animate2')[0];
a
    // tag.classList.add('fadeIn');
}

const expandSidebarItem = (item) => {
    const sidebarMenu = document.querySelectorAll('#sidebar-menu .item');
    
    sidebarMenu.forEach(el => el.parentElement.classList.remove('active'));
    
    sidebarMenu[item-1].parentElement.classList.add('active')
}
