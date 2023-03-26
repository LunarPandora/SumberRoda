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

const expandSidebarItem = (item) => {
    const sidebarMenu = document.querySelectorAll('#sidebar-menu .item');
    
    sidebarMenu.forEach(el => el.parentElement.classList.remove('active'));
    
    sidebarMenu[item-1].parentElement.classList.add('active')
}