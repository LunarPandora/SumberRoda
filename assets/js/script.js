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

const changeCurrencyFormat = (price) => {
    return price.toLocaleString('id-id', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
    })
}

const changeDetailProduct = (item_id) => {
    if(item_id == 1){
        renderDetailProduct({
            img: `../assets/img/roda.png`,
            name: 'SP SPORT MAXX 050+',
            price: changeCurrencyFormat(1_237_332),
            desc: `
                <div class="desc-content">
                    <h4>Konsep Produk</h4>
                    <ul>
                        <li>Ban flagship Dunlop</li>
                        <li>Ban premium untuk mobil peforma tinggi</li>
                        <li>Ban dengan performa sangat tinggi pada kondisi jalan kering dan basah dengan kenyamanan berkendara yang prima.</li>
                    </ul>
                </div>
                <div class="desc-content">
                    <h4>Fitur Produk</h4>
                    <ul>
                        <li>Desain pola telapak asimetris.</li>
                        <li>Kekakuan blok telapak yang tinggi.</li>
                        <li>Kekakuan blok bahu yang tinggi dan rib lurus di tengah.</li>
                        <li>Kompon baru dan alur air yang optimal.</li>
                    </ul>
                </div>
            `
        });
    }else if(item_id == 2){
        renderDetailProduct({
            img: `../assets/img/velg.png`,
            name: 'RAYS Ce28 Ring 14x6.5 Pcd 8x100/114.3 ET 35 Hyper Silver',
            price: changeCurrencyFormat(3_200_000),
            desc: `
                <div class="desc-content">
                    <h4>Kelebihan RAYS Ce28 Ring 14x6.5</h4>
                    <ul>
                        <li>Ringan: Velg ini ringan dan dapat meningkatkan handling dan akselerasi mobil Anda.</li>
                        <li>Kuat: Velg ini tahan lama dan mampu menahan beban yang tinggi serta benturan saat melaju di jalan.</li>
                        <li>
                            Desain yang Menarik: Velg ini memiliki desain yang menarik dan sporty, sehingga dapat meningkatkan tampilan mobil Anda.
                        </li>
                        <li>Meningkatkan Performa: Velg ini dapat meningkatkan performa mobil Anda karena ringan dan kuat.</li>
                        <li>
                            Mudah untuk Dirawat: Velg ini mudah untuk dirawat dan dibersihkan, karena terbuat dari bahan aluminium yang tahan terhadap korosi.
                        </li>
                    </ul>
                </div>
            `
        });
    }else if(item_id == 3){
        renderDetailProduct({
            img: `../assets/img/oli.png`,
            name: 'Shell Helix HX3 1 Liter',
            price: changeCurrencyFormat(37_500),
            desc: `
                <div class="desc-content">
                    <h4>Kelebihan Oli Mobil Shell Helix HX3 20W-50</h4>
                    <ul>
                        <li>Active Cleansing TechnologyMembersihkan dan menjaga mesin tetap bersih.</li>
                        <li>Kekentalan tinggiMengurangi rembes pelumas pada mesin berumur dan kilometer tinggi.</li>
                    </ul>
                </div>
            `
        });
    }else if(item_id == 4){
        renderDetailProduct({
            img: `../assets/img/aki.png`,
            name: 'GS Astra MF NS60L / 46B24L',
            price: changeCurrencyFormat(900_000),
            desc: `
                <div class="desc-content">
                    <ul class="list-style-none">
                        <li>SKU: AGAF005</li>
                        <li>Size: NS60L</li>
                        <li>Tipe: MF</li>
                    </ul>
                </div>
                <div class="desc-content">
                    <h4>Keunggulan GS Maintenance Free:</h4>
                    <ul>
                        <li>Tangguh untuk Iklim Tropis Indonesia. Didesain khusus untuk iklim tropis Indonesia.</li>
                        <li>Tanpa Perawatan. Tidak perlu lagi mengecek dan menambah air aki, sehingga menghemat waktu dan biaya perawatan.</li>
                        <li>Daya Start Tinggi. Aki MF GS Astra dapat menyimpan energi listrik lebih lama.</li>
                        <li>Bebas Korosi/Karat. Sehingga kebersihan mobil dan aki Anda lebih terjaga.</li>
                    </ul>
                </div>
                <div class="desc-content">
                    <h4>Spesifikasi</h4>
                    <ul class="list-style-none">
                        <li>Kapasitas: 45 Ah (Ampere Hour)</li>
                        <li>Length: 238 mm</li>
                        <li>Width: 129 mm</li>
                        <li>Height: 203 mm</li>
                        <li>Total Height (with Terminal): 227 mm</li>
                        <li>Aprox Acid: - liter</li>
                        <li>Layout: 1</li>
                        <li>Terminal: B</li>
                    </ul>
                </div>
            `
        });
    }
}

const renderDetailProduct = (item) => {
    document.getElementById('nama-produk').textContent = `${item.name}`;
    
    document.getElementById('detail-product').innerHTML = `
        <div class="flex flex-wrap justify-between">
            <div class="img-section">
                <img src="${item.img}" alt="${item.name}" >
            </div>
            <div class="detail-produk">
                <div class="detail-top">
                    <div class="product-name">
                        <h3>${item.name}</h3>
                    </div>
                    <div class="price">
                        <h3>${item.price}</h3>
                    </div>
                </div>
                <div class="detail-bottom">
                    ${item.desc}
                </div>
            </div>
        </div>
    `;
}