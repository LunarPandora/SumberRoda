<?php
require_once "../../app/init.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumber Roda</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="../../assets/js/script.js" async></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js' async></script>
</head>
<body>
    <nav class="container flex justify-between items-center p-4 px-5" id="navbar">
        <img class="logo" src="../../assets/media/logo.png">
        <div class="list-navbar flex text-white">
            <div>
                <a class="text-white" href="../../index.html">Beranda</a>
            </div>
            <div class="active">
                <a class="text-white" href="./product.html">Produk</a>
            </div>
            <div>
                <a class="text-white" href="./aboutUs.html">Tentang Kami</a>
            </div>
        </div>
    </nav>
    <div class="video-wrapper" id="hero-section">
        <video autoplay muted loop id="myVideo" class="video-container">
            <source src="../../assets/media/videobackground.mp4" type="video/mp4">
        </video>

        <div class="video-content flex flex-col items-center justify-center">
            <h1 class="hero-title text-6xl">Elegan, Rapi, Mengesankan.</h1>
            <p class="my-3 text-md">Kami menyediakan segala kebutuhan yang mobil anda butuhkan dengan kualitas yang terjamin dan terjangkau.</p>
            <button class="btn btn-primary">LIHAT CATALOG</button>
        </div>
    </div>

    <div class="hero-wrapper" id="hero-section-mb">
        <div class="video-content flex flex-col items-center justify-center">
            <h1 class="hero-title text-6xl">Elegan, Rapi, Mengesankan.</h1>
            <p class="my-3 text-md">Kami menyediakan segala kebutuhan yang mobil anda butuhkan dengan kualitas yang terjamin dan terjangkau.</p>
            <button class="btn btn-primary">LIHAT CATALOG</button>
        </div>
    </div>

    <div class="container flex flex-col p-5" id="aboutus">
        <div class="flex flex-row">
            <div class="flex items-center justify-between text-white">
                <div>
                    <h1 class="fw-normal text-6xl">Siapakah <span class="text-6xl text-primary">kami</span>?</h1>
                </div>
                <div>
                    <p><span class="text-primary">Sumber Roda Pontianak</span> adalah mitra terpercaya dalam memenuhi segala kebutuhan mobil Anda dengan kualitas terbaik dan harga yang bersahabat. Dari koleksi velg keren hingga aki mobil yang berkualitas, kami selalu berinovasi untuk memberikan solusi terbaik bagi kendaraan Anda. Dengan pelayanan ramah dan profesional, kami memberikan pengalaman berbelanja yang menyenangkan dan memuaskan bagi setiap pelanggan kami.</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col my-4">
            <img class="img-fluid" src="../../assets/media/placeholders/pl1.jpg">
        </div>
        <div class="flex flex-col items-center my-4">
            <h1 class="fw-normal text-5xl text-white">Kenapa memilih <span class="text-5xl text-primary">kami</span>?</h1>
            <p class="fw-normal text-md text-disabled my-3">
                Kami selalu memastikan dan mengutamakan kualitas produk dan pelayanan yang kami berikan kepada para pelanggan kami. 
            </p>

            <div class="flex flex-row">
                <div class="text-white py-2 px-3">
                    <i class="fa fa-2x fa-tag text-disabled"></i>
                    <h3 class="text-xl my-3">Kualitas</h3>
                    <p class="text-disabled fw-light text-justify">Kami memahami bahwa pemilik mobil seperti Anda menginginkan kualitas terbaik untuk kendaraan mereka. Oleh karena itu, kami hanya menjual produk berkualitas tinggi dari merek ternama. Kami yakin Anda akan menemukan produk yang Anda cari di toko kami.</p>
                </div>
                
                <div class="text-white py-2 px-3">
                    <i class="fa fa-2x fa-truck text-disabled"></i>
                    <h3 class="text-xl my-3">Pengiriman</h3>
                    <p class="text-disabled fw-light text-justify">Kami juga mengerti bahwa waktu Anda sangat berharga, oleh karena itu kami bekerja sama dengan jasa pengiriman terpercaya untuk memberikan pengiriman cepat dan aman ke seluruh wilayah Kalimantan Barat. Kami berusaha untuk mengirimkan produk ke tangan Anda dengan cepat dan aman.</p>
                </div>
                
                <div class="text-white py-2 px-3">
                    <i class="fa fa-2x fa-money-bill-wave text-disabled"></i>
                    <h3 class="text-xl my-3">Harga</h3>
                    <p class="text-disabled fw-light text-justify">Kami juga menawarkan harga yang kompetitif untuk semua produk kami, sehingga Anda tidak perlu khawatir untuk membeli produk berkualitas dengan harga yang terlalu mahal. Kami selalu berusaha untuk memberikan harga yang terbaik untuk Anda dan memberikan diskon serta penawaran menarik secara berkala.</p>
                </div>
                
                <div class="text-white py-2 px-3">
                    <i class="fa fa-2x fa-hand-holding-heart text-disabled"></i>
                    <h3 class="text-xl my-3">Layanan</h3>
                    <p class="text-disabled fw-light text-justify">Kami juga menawarkan layanan pelanggan terbaik. Tim kami siap membantu Anda dalam memilih produk yang tepat dan memberikan informasi yang akurat dan jelas tentang produk yang kami jual. Kami juga memberikan garansi produk dan dukungan teknis, sehingga Anda dapat membeli dengan percaya diri.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container flex flex-col p-5 items-center justify-center" id="catalogs">
        <h1 class="fw-bold text-xl section-title text-white"><span class="text-xl text-primary">PRODUK</span> KAMI</h1>
        <h1 class="fw-normal text-4xl text-white m-4">Temukan produk yang anda inginkan.</h1>
        <div class="flex flex-row">
            <div class="flex m-3">
                <div class="p-4 bg-pr bg-pr-1 flex flex-col justify-center items-center text-center">
                    <h1 class="fw-normal text-6xl text-primary">Ban</h1>
                    <p class="fw-light text-xl text-white m-3">Ban Mobil Elegan untuk Pengalaman Berkendara yang Menakjubkan.</p>
                </div>
            </div>
            <div class="flex m-3">
                <div class="p-4 bg-pr bg-pr-2 flex flex-col justify-center items-center text-center">
                    <h1 class="fw-normal text-6xl text-primary">Velg</h1>
                    <p class="fw-light text-xl text-white m-3">Ban Mobil Elegan untuk Pengalaman Berkendara yang Menakjubkan.</p>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="flex m-3">
                <div class="p-4 bg-pr bg-pr-3 flex flex-col justify-center items-center text-center">
                    <h1 class="fw-normal text-6xl text-primary">Oli</h1>
                    <p class="fw-light text-xl text-white m-3">Ban Mobil Elegan untuk Pengalaman Berkendara yang Menakjubkan.</p>
                </div>
            </div>
            <div class="flex m-3">
                <div class="p-4 bg-pr bg-pr-4 flex flex-col justify-center items-center text-center">
                    <h1 class="fw-normal text-6xl text-primary">Baterai</h1>
                    <p class="fw-light text-xl text-white m-3">Ban Mobil Elegan untuk Pengalaman Berkendara yang Menakjubkan.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="recommendation">
        <div class="flex flex-col p-5 contentX">
            <div class="flex flex-row justify-between items-end">
                <div>
                    <h1 class="fw-bold text-xl section-title text-primary">REKOMENDASI</h1>
                    <h1 class="fw-normal text-4xl text-white my-3">Berikut produk yang sedang populer di toko kami.</h1>
                </div>
                <div class="flex flex-column justify-between items-center py-3 text-white">
                    <button onclick="changeDisplay('ban')" class="btn btn-secondary mx-2" id="btn-ctg-0">Ban</button>
                    |
                    <button onclick="changeDisplay('velg')" class="btn btn-invisible mx-2" id="btn-ctg-1">Velg</button>
                    |
                    <button onclick="changeDisplay('oli')" class="btn btn-invisible mx-2" id="btn-ctg-2">Oli</button>
                    |
                    <button onclick="changeDisplay('baterai')" class="btn btn-invisible mx-2" id="btn-ctg-3">Baterai</button>
                </div>
            </div>

            <div id="products" class="flex flex-col">
                <div class="flex flex-row" id="ban">
                    <div class="productbox">
                        <div class="product-image">
                            <img class="img-fluid" src="../../assets/media/products/product_ban.jpg" />
                        </div>

                        <div class="product-content p-3">
                            <div class="product-tags">
                                <span class="tag">Ban</span>
                            </div>

                            <div class="product-info flex flex-row justify-between items-center my-2 w-100">
                                <p class="product-title text-2xl text-white text-wrap">
                                    Ban Aakiegjhoaigehoahegoiahgoaehgoahoiageh
                                </p>
                                <p class="product-price text-lg fw-semibold text-primary">Rp200.000</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="productbox">
                        <div class="product-image">
                            <img class="img-fluid" src="../../assets/media/products/product_ban.jpg" />
                        </div>

                        <div class="product-content p-3">
                            <div class="product-tags">
                                <span class="tag">Ban</span>
                            </div>

                            <div class="product-info flex flex-row justify-between items-center my-2">
                                <p class="product-title text-2xl text-white w-75 text-wrap">
                                    Ban A
                                </p>
                                <p class="product-price text-lg fw-semibold text-primary">Rp200.000</p>
                            </div>
                        </div>
                    </div>

                    <div class="productbox">
                        <div class="product-image">
                            <img class="img-fluid" src="../../assets/media/products/product_ban.jpg" />
                        </div>

                        <div class="product-content p-3">
                            <div class="product-tags">
                                <span class="tag">Ban</span>
                            </div>

                            <div class="product-info flex flex-row justify-between items-center my-2">
                                <p class="product-title text-2xl text-white w-75 text-wrap">
                                    Ban A
                                </p>
                                <p class="product-price text-lg fw-semibold text-primary">Rp200.000</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row" id="velg">
                    <div class="productbox">
                        <div class="product-image">
                            <img class="img-fluid" src="../../assets/media/products/product_velg.jpg" />
                        </div>

                        <div class="product-content p-3">
                            <div class="product-tags">
                                <span class="tag">Velg</span>
                            </div>

                            <div class="product-info flex flex-row justify-between items-center my-2 w-100">
                                <p class="product-title text-2xl text-white text-wrap">
                                    Velg A
                                </p>
                                <p class="product-price text-lg fw-semibold text-primary">Rp200.000</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="productbox">
                        <div class="product-image">
                            <img class="img-fluid" src="../../assets/media/products/product_velg.jpg" />
                        </div>

                        <div class="product-content p-3">
                            <div class="product-tags">
                                <span class="tag">Velg</span>
                            </div>

                            <div class="product-info flex flex-row justify-between items-center my-2">
                                <p class="product-title text-2xl text-white w-75 text-wrap">
                                    Velg B
                                </p>
                                <p class="product-price text-lg fw-semibold text-primary">Rp200.000</p>
                            </div>
                        </div>
                    </div>

                    <div class="productbox">
                        <div class="product-image">
                            <img class="img-fluid" src="../../assets/media/products/product_velg.jpg" />
                        </div>

                        <div class="product-content p-3">
                            <div class="product-tags">
                                <span class="tag">Velg</span>
                            </div>

                            <div class="product-info flex flex-row justify-between items-center my-2">
                                <p class="product-title text-2xl text-white w-75 text-wrap">
                                    Velg C
                                </p>
                                <p class="product-price text-lg fw-semibold text-primary">Rp200.000</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row" id="oli">
                    <div class="productbox">
                        <div class="product-image">
                            <img class="img-fluid" src="../../assets/media/products/product_oli.png" />
                        </div>

                        <div class="product-content p-3">
                            <div class="product-tags">
                                <span class="tag">Oli</span>
                            </div>

                            <div class="product-info flex flex-row justify-between items-center my-2 w-100">
                                <p class="product-title text-2xl text-white text-wrap">
                                    Oli 1
                                </p>
                                <p class="product-price text-lg fw-semibold text-primary">Rp200.000</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="productbox">
                        <div class="product-image">
                            <img class="img-fluid" src="../../assets/media/products/product_oli.png" />
                        </div>

                        <div class="product-content p-3">
                            <div class="product-tags">
                                <span class="tag">Oli</span>
                            </div>

                            <div class="product-info flex flex-row justify-between items-center my-2">
                                <p class="product-title text-2xl text-white w-75 text-wrap">
                                    Oli 2
                                </p>
                                <p class="product-price text-lg fw-semibold text-primary">Rp200.000</p>
                            </div>
                        </div>
                    </div>

                    <div class="productbox">
                        <div class="product-image">
                            <img class="img-fluid" src="../../assets/media/products/product_oli.png" />
                        </div>

                        <div class="product-content p-3">
                            <div class="product-tags">
                                <span class="tag">Oli</span>
                            </div>

                            <div class="product-info flex flex-row justify-between items-center my-2">
                                <p class="product-title text-2xl text-white w-75 text-wrap">
                                    Oli 3
                                </p>
                                <p class="product-price text-lg fw-semibold text-primary">Rp200.000</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row" id="baterai">
                    <div class="productbox">
                        <div class="product-image">
                            <img class="img-fluid" src="../../assets/media/products/product_baterai.jpg" />
                        </div>

                        <div class="product-content p-3">
                            <div class="product-tags">
                                <span class="tag">Baterai</span>
                            </div>

                            <div class="product-info flex flex-row justify-between items-center my-2 w-100">
                                <p class="product-title text-2xl text-white text-wrap">
                                    Baterai atau Aki
                                </p>
                                <p class="product-price text-lg fw-semibold text-primary">Rp200.000</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="productbox">
                        <div class="product-image">
                            <img class="img-fluid" src="../../assets/media/products/product_baterai.jpg" />
                        </div>

                        <div class="product-content p-3">
                            <div class="product-tags">
                                <span class="tag">Baterai</span>
                            </div>

                            <div class="product-info flex flex-row justify-between items-center my-2">
                                <p class="product-title text-2xl text-white w-75 text-wrap">
                                    Aki kayaknya
                                </p>
                                <p class="product-price text-lg fw-semibold text-primary">Rp200.000</p>
                            </div>
                        </div>
                    </div>

                    <div class="productbox">
                        <div class="product-image">
                            <img class="img-fluid" src="../../assets/media/products/product_baterai.jpg" />
                        </div>

                        <div class="product-content p-3">
                            <div class="product-tags">
                                <span class="tag">Baterai</span>
                            </div>

                            <div class="product-info flex flex-row justify-between items-center my-2">
                                <p class="product-title text-2xl text-white w-75 text-wrap">
                                    Aki atau gimana sih
                                </p>
                                <p class="product-price text-lg fw-semibold text-primary">Rp200.000</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center my-4">
                    <button class="btn btn-primary">LIHAT PRODUK LAINNYA</button>
                </div>
            </div>

            <div id="review" class="my-2">
                <div class="flex flex-col items-center my-4">
                    <h1 class="text-4xl text-white">Apa kata <span class="text-4xl text-primary">pelanggan</span>?</h1>

                    <p class="fw-normal text-md text-disabled my-3">
                        Apa pendapat pelanggan mengenai kualitas produk dan pelayanan kami?
                    </p>
                </div>

                <div class="flex flex-row content-stretch justify-between items-center">
                    <div class="review-card p-2 content-stretch">
                        <div class="review-desc">
                            <img src="../../assets/media/avatar/person1.jpg">

                            <div class="review-visible text-white flex flex-col justify-end p-3">
                                <h1 class="text-lg">Corliana Burren</h1>
                                <p class="text-sm fw-light text-disabled">Pelanggan</p>

                                <p class="py-2">
                                <q class="text-disabled">Saya puas dengan layanan yang diberikan oleh SumberRoda. Produk yang disajikan dan pelayanan yang diberikan sangat memuaskan dan saya menyarankan anda untuk berlangganan disini.</q>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="review-card p-2 content-stretch">
                        <div class="review-desc">
                            <img src="../../assets/media/avatar/person2.jpg">

                            <div class="review-visible text-white flex flex-col justify-end p-3">
                                <h1 class="text-lg">Edward Heisenberg</h1>
                                <p class="text-sm fw-light text-disabled">Pelanggan</p>

                                <p class="py-2">
                                <q class="text-disabled">Saya puas dengan layanan yang diberikan oleh SumberRoda. Produk yang disajikan dan pelayanan yang diberikan sangat memuaskan dan saya menyarankan anda untuk berlangganan disini.</q>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="review-card p-2 content-stretch">
                        <div class="review-desc">
                            <img src="../../assets/media/avatar/person3.jpg">

                            <div class="review-visible text-white flex flex-col justify-end p-3">
                                <h1 class="text-lg">Tim Simon</h1>
                                <p class="text-sm fw-light text-disabled">Pelanggan</p>

                                <p class="py-2">
                                <q class="text-disabled">Saya puas dengan layanan yang diberikan oleh SumberRoda. Produk yang disajikan dan pelayanan yang diberikan sangat memuaskan dan saya menyarankan anda untuk berlangganan disini.</q>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-white" id="detail">
        <div class="flex flex-row justify-between p-5">
            <div class="flex flex-row items-center justify-between">
                <h1 class="text-3xl text-primary">Jam Operasional</h1>
                <p class="text-lg mx-4 px-2">
                    Senin - Sabtu
                    08:00 - 17:00
                    <br>
                    Minggu
                    08:00 - 16:00
                </p>
            </div>
            
            <div class="border-limit"></div>

            <div class="flex flex-row items-center justify-between">
                <h1 class="text-3xl mx-4 px-2 text-primary">Alamat Toko</h1>
                <p class="text-lg">
                    Jl. KHW. Hasyim no.60 Pontianak
                </p>
            </div>
        </div>
        <div class="location flex flex-col justify-center items-center px-5">
            <h1 class="text-4xl">Lokasi kami</h1>
            <div class="map py-5" id="map" data-longitude="109.3336" data-latitude="0"></div>
        </div>
    </div> 

    <div class="container" id="contacts">
        <div class="flex flex-row">
            <div id="short-ct" class="px-5 py-4 flex flex-col justify-center">
                <img class="py-3" src="../../assets/media/logo.png">
                <p class="text-xl text-white fw-semibold">
                    <span class="text-xl text-primary fw-semibold">Sumber</span>Roda
                </p>
                <p class="text-sm text-disabled fw-light">
                    Semua kebutuhan mobilmu ada di sini.
                </p>
            </div>
            <div id="contact" class="flex flex-row justify-between px-5 py-4">
                <div class="px-2">
                    <div class="contact-card flex flex-row items-center p-4">
                        <i class="px-2 fa fa-2x fa-envelope text-white"></i>
                        <div class="px-2">
                            <p class="text-xs text-disabled fw-normal">
                                Kirimkan e-mail ke kami disini!
                            </p>
                            <p class="text-xl text-white fw-semibold">
                                admin@sumberroda.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <div class="contact-card flex flex-row items-center p-4">
                        <i class="px-2 fa fa-2x fa-phone text-white"></i>
                        <div class="px-2">
                            <p class="text-xs text-disabled fw-normal">
                                Hubungi kami disini!
                            </p>
                            <p class="text-xl text-white fw-semibold">
                                0811-1111-1111
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row p-5 justify-between items-center" id="subscription">
            <div>
                <h1 class="text-4xl fw-bold text-black">Ikuti kami!</h1>
                <p class="text-sm">
                    Dapatkan pemberitahuan terbaru mengenai produk dan layanan kami.
                </p>
            </div>
            <div>
                <form class="form-subscription flex flex-row justify-between">
                    <input class="text-xs" type="text" placeholder="Masukkan email anda" />

                    <input class="text-xs" type="submit" value="Daftar" />
                </form>
            </div>
        </div>
        <div class="flex flex-row justify-between px-5 py-4 text-white" id="footer">
            <div class="flex flex-row" id="footer-link">
                <div class="flex flex-col">
                    <p class="fw-bold text-sm">PRODUK</p>
                    <a class="text-md text-disabled">Ban</a>
                    <a class="text-md text-disabled">Velg</a>
                    <a class="text-md text-disabled">Oli</a>
                    <a class="text-md text-disabled">Baterai</a>
                </div>

                <div class="flex flex-col">
                    <p class="fw-bold text-sm">PERUSAHAAN</p>
                    <a class="text-md text-disabled">Tentang Kami</a>
                    <a class="text-md text-disabled">Kenapa kami</a>
                    <a class="text-md text-disabled">Hubungi kami</a>
                </div>

                <div class="flex flex-col">
                    <p class="fw-bold text-sm">IKUTI KAMI</p>
                    <div>
                        <i class="fa fa-fw fa-lg fa-phone text-primary"></i>
                        <a class="text-md text-white px-2">0811-1111-1111</a>
                    </div>
                    <div>
                        <i class="fa fa-fw fa-lg fa-facebook text-primary"></i>
                        <a class="text-md text-white px-2">Sumber Roda Pontianak</a>
                    </div>
                    <div>
                        <i class="fa fa-fw fa-lg fa-instagram text-primary"></i>
                        <a class="text-md text-white px-2">sumber_roda</a>
                    </div>
                </div>
            </div>
            <div id="closing" class="flex justify-end">
                <div class="p-3 closing-card flex justify-center items-center">
                    <h1 class="text-2xl fw-bold text-black">Upgrade pengalaman berkendara mu sekarang juga.</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 