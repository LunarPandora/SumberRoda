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