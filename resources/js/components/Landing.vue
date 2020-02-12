<template>
    <div>
        <div class="nav-small ">
            <div class="container">
                <div class="promo">
                    <div class="clip-path">
                        <i class="fas fa-tag"></i>
                    </div>
                    <span class="ff-roboto fs-12">Gratis Ebook 9 Cara Cerdas Menggunakan Domain [ x ]</span>
                </div>
                <nav class="nav">
                    <a class="nav-link" href="#"><i class="fas m-5px-r fa-phone"></i>0274-5305505</a>
                    <a class="nav-link" href="#"><i class="fas m-5px-r fa-comments"></i>Live Chat</a>
                    <a class="nav-link" href="#"><i class="fas m-5px-r fa-user-circle"></i>Member Area</a>
                </nav>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light nav-big">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/niagahoster-logo.png" width="220" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav ml-auto ff-roboto fw-500">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Hosting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Domain</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Server</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Website</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Afiliasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Promo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pembayaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="section">
            <div class="container">
                <div class="row">
                <div class="col-lg-6">
                    <h1 class="fw-700 ">PHP Hosting</h1>
                    <h4 class=" m-20px-b">Cepat, handal penuh dengan <br> module PHP yang anda butuhkan</h4>
                    <ul class="list-style-1">
                        <li class=""><i class="fa fa-check-circle green-color m-10px-r"></i> Solusi PHP untuk performa query yang lebih cepat</li>
                        <li class=""><i class="fa fa-check-circle green-color m-10px-r"></i> Konsumsi memori lebih rendah</li>
                        <li class=""><i class="fa fa-check-circle green-color m-10px-r"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7 </li>
                        <li class=""><i class="fa fa-check-circle green-color m-10px-r"></i> Fitur Enkripsi IonCube dan Zend Guard Loaders </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="assets/svg/illustration banner PHP hosting-01.svg" class="img-fluid" alt="">
                </div>
                </div>
            </div>
        </section>

        <hr>

        <section class="section">
            <div class="container">
                <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                    <h1><span class="text-danger">404</span> Assets Not Found</h1>
                </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="text-center m-70px-b">
                    <h3 class="fw-700 mb-0">Paket Hosting Singapura yang Tepat</h3>
                    <h4 class="">Diskon 40% + Domain dan SSL Gratis untuk Anda</h4>
                </div>
                <div class="row" v-if="packages.length > 0">
                    <div class="col-lg-3 p-0" v-for="(item,index) in packages" v-bind:key="index">
                        <div class="card-package" v-bind:class="[item.bestSeller ? isActive : errorClass]">
                            <div class="title">
                                <h5 class="fw-700 m-0">{{ item.title }}</h5>
                            </div>
                            <div class="ff-roboto price">
                                <small class="price-normal">Rp {{ formatPrice(item.originalPrice) }}</small>
                                <p class="fs-12 m-0 line-height-1">
                                    <span class="v-sup">Rp</span> <span class="big v-middle">{{formatPrice(item.originalPrice - item.discount)}}</span><span class="v-sup">/ bln</span>
                                </p>
                            </div>
                            <div class="ff-roboto registered-user fs-14">
                                <span class="fw-500">{{formatPrice(item.userRegistered)}}</span> Pengguna Terdaftar
                            </div>
                            <div class="ff-roboto desc" >
                                <!-- <p class="m-0 fs-14 uppercase fw-500" v-if="item.metadata.resourcerPower !== null">
                                    {{item.metadata.resourcerPower}}X Resource Power
                                </p> -->
                                <p class="m-0 fs-14" v-for="(data,i) in item.metadata" v-bind:key="i" > 
                                    <span v-if="data !== null">
                                        <span class="fw-500">{{data.title}} </span>
                                        <span v-if="data.value === 'Resource Power'" class="uppercase fw-500">{{data.value}}</span> 
                                        <span v-else-if="data.value === 'Layanan Support'"> {{data.value}} <br/> 
                                            <i class="fa fa-star blue-color"></i> 
                                            <i class="fa fa-star blue-color"></i> 
                                            <i class="fa fa-star blue-color"></i> 
                                            <i class="fa fa-star blue-color"></i> 
                                            <i class="fa fa-star blue-color"></i> 
                                        </span>
                                        <span v-else>{{data.value}}</span>
                                    </span>
                                </p>
                                
                            </div>
                            <div class="ff-roboto footer">
                                <button class="btn btn-package" v-if="item.title === 'Bisnis'">Diskon 40%</button>
                                <button class="btn btn-package" v-else>Pesan Sekarang</button>
                            </div>
                            <div v-if="item.bestSeller" class="clip-best-seller">
                                 <span class="text">BEST SELLER!</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-else class="text-center">
                    <img src="assets/images/loader.gif" alt="">
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="text-center m-70px-b">
                    <h3 class="">Powerfull dengan limit PHP yang Lebih Besar</h3>
                </div>
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-group list-group-1">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="fa fa-check-circle green-color fa-lg"></i> 
                                        </div>
                                        <div class="col-11 text-center pl-0">
                                            max execution 300ms
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="fa fa-check-circle green-color fa-lg"></i> 
                                        </div>
                                        <div class="col-11 text-center pl-0">
                                            max execution 300ms
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="fa fa-check-circle green-color fa-lg"></i> 
                                        </div>
                                        <div class="col-11 text-center pl-0">
                                            php memory limit 1024 MB
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-group list-group-1">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="fa fa-check-circle green-color fa-lg"></i> 
                                        </div>
                                        <div class="col-11 text-center pl-0">
                                            post max size 128 MB
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="fa fa-check-circle green-color fa-lg"></i> 
                                        </div>
                                        <div class="col-11 text-center pl-0">
                                            upload max filesize 128 MB
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-1">
                                            <i class="fa fa-check-circle green-color fa-lg"></i> 
                                        </div>
                                        <div class="col-11 text-center pl-0">
                                            max input vars 2500
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="text-center m-70px-b section-title">
                    <h3 class="">Semua Paket Hosting Sudah Termasuk</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 text-center m-40px-b">
                        <img src="assets/svg/icon PHP Hosting_PHP Semua Versi.svg" class="m-15px-b" width="70" alt="">
                        <h6 class="fw-700 m-5px-b">PHP Semua Versi</h6>
                        <p class="ff-roboto fs-14">Pilih mulai versi PHP 5.3 s/d PHP 7. <br/> Ubah sesuka Anda!</p>
                    </div>
                    <div class="col-lg-4 text-center m-40px-b">
                        <img src="assets/svg/icon PHP Hosting_My SQL.svg" class="m-15px-b" width="70" alt="">
                        <h6 class="fw-700 m-5px-b">MySQL Versi 5.6</h6>
                        <p class="ff-roboto fs-14">Nikmati MySQL versi terbaru, tercepat dan <br/> kaya akan fitur.</p>
                    </div>
                    <div class="col-lg-4 text-center m-40px-b">
                        <img src="assets/svg/icon PHP Hosting_CPanel.svg" class="m-15px-b" width="70" alt="">
                        <h6 class="fw-700 m-5px-b">Panel Hosting cPanel</h6>
                        <p class="ff-roboto fs-14">Kelola website dengan  panel canggih yang <br/> familiar di hati Anda.</p>
                    </div>
                    <div class="col-lg-4 text-center m-40px-b">
                        <img src="assets/svg/icon PHP Hosting_garansi uptime.svg" class="m-15px-b" width="70" alt="">
                        <h6 class="fw-700 m-5px-b">Garansi Uptime 99.99%</h6>
                        <p class="ff-roboto fs-14">Data center yang mendukung kelangsungan <br/> website Anda 24/7.</p>
                    </div>
                    <div class="col-lg-4 text-center m-40px-b">
                        <img src="assets/svg/icon PHP Hosting_InnoDB.svg" class="m-15px-b" width="70" alt="">
                        <h6 class="fw-700 m-5px-b">Database InnoDB Unlimited</h6>
                        <p class="ff-roboto fs-14">Jumlah dan ukuran database yang tumbuh <br/> sesuai kebutuhan Anda.</p>
                    </div>
                    <div class="col-lg-4 text-center m-40px-b">
                        <img src="assets/svg/icon PHP Hosting_My SQL remote.svg" class="m-15px-b" width="70" alt="">
                        <h6 class="fw-700 m-5px-b">Wildcard Remote MySQL</h6>
                        <p class="ff-roboto fs-14">Mendukung s/d 25 max_user_connections <br/> dan 100 max_connections.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="text-center m-70px-b section-title">
                    <h3 class="">Mendukung Penuh Framework Laravel</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="line-height-1-5 m-20px-b">Tak perlu menggunakan dedicated server ataupun VPS <br> 
                            yang mahal. Layanan PHP hosting murah kami <br>
                            mendukung penuh framework favorit Anda
                        </h6>
                        <ul class="list-style-1 m-15px-b ff-roboto">
                            <li class=""><i class="fa fa-check-circle green-color m-10px-r"></i>Install Laravel <strong>1 klik</strong> dengan Softaculous Installer.</li>
                            <li class=""><i class="fa fa-check-circle green-color m-10px-r"></i>Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring, json, </strong>dan <strong>fileinfo.</strong></li>
                            <li class=""><i class="fa fa-check-circle green-color m-10px-r"></i>Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstal packages pilihan Anda.</li>
                        </ul>
                        <small class="ff-roboto text-muted">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small>
                        <button class="btn btn-blue btn-rounded m-30px-t fs-14">Pilih Hosting Anda</button>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/svg/illustration banner support laravel hosting.svg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="text-center m-70px-b ">
                    <h3 class="">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h3>
                </div>
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="row">
                            <div class="col-lg-3">
                                <ul class="ff-roboto list-style-1 line-height-1-5 fs-14">
                                    <li>IcePHP</li>
                                    <li>apc</li>
                                    <li>apcu</li>
                                    <li>apm</li>
                                    <li>dreS</li>
                                    <li>bcmath</li>
                                    <li>bcompler</li>
                                    <li>big_int</li>
                                    <li>hdset</li>
                                    <li>bloomy</li>
                                    <li>bz2_filter</li>
                                    <li>clamav</li>
                                    <li>con_acceptor</li>
                                    <li>crack</li>
                                    <li>dba</li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <ul class="ff-roboto list-style-1 line-height-1-5 fs-14">
                                    <li>http</li>
                                    <li>huffman</li>
                                    <li>idn</li>
                                    <li>igbinary</li>
                                    <li>imagick</li>
                                    <li>imap</li>
                                    <li>inclued</li>
                                    <li>inotify</li>
                                    <li>interbase</li>
                                    <li>intl</li>
                                    <li>ioncube_loader</li>
                                    <li>ioncube_loader_4</li>
                                    <li>jsmin</li>
                                    <li>json</li>
                                    <li>Idap</li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <ul class="ff-roboto list-style-1 line-height-1-5 fs-14">
                                    <li>nd_pdo_mysgl</li>
                                    <li>oauth</li>
                                    <li>op8</li>
                                    <li>odbc</li>
                                    <li>opcache</li>
                                    <li>pdf</li>
                                    <li>pdo</li>
                                    <li>pdo_dblib</li>
                                    <li>pdo_firebird</li>
                                    <li>pdo_mysgl</li>
                                    <li>pdoodbc</li>
                                    <li>pdo_pgsgl</li>
                                    <li>pdo_sghte</li>
                                    <li>P5sull</li>
                                    <li>phalcon</li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <ul class="ff-roboto list-style-1 line-height-1-5 fs-14">
                                    <li>stats</li>
                                    <li>stem</li>
                                    <li>stomp</li>
                                    <li>suhomn</li>
                                    <li>sybase_ct</li>
                                    <li>sYsYmsg</li>
                                    <li>sysysern</li>
                                    <li>sysvshm</li>
                                    <li>tdy</li>
                                    <li>turezonedb</li>
                                    <li>trader</li>
                                    <li>translit</li>
                                    <li>uploadprogress</li>
                                    <li>un_template</li>
                                    <li>uuid</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center m-30px-t">
                    <button class="btn btn-rounded btn-second">Selengkapnya</button>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Linux Hosting yang Stabil <br> dengan Teknologi LVE</h3>
                        <p class="ff-roboto m-15px-t">
                            SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan RAM <strong>128 GB</strong> dan <br> 
                            teknolog <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi <br> 
                            dengan <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching, Apache load balancer <br> 
                            berbasis LiteSpeed Technologies, <strong>CegeFS</strong> security. <strong>Raid-10</strong> protection <br>
                            dan auto backup untuk keamanan webmte PHP Anda.

                        </p>
                        <button class="btn btn-blue btn-rounded m-30px-t fs-14">Pilih Hosting Anda</button>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/images/Image support.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import axios from "axios";
    export default {
        data () {
            return {
                packages: [],
                isActive: 'best-seller',
                errorClass: ''
            }
        },
        mounted() {
            axios
                .get('http://localhost:8000/hosting')
                .then(response => (
                    console.log(response.data),
                    this.packages = response.data
                ))
        },
        methods: {
            formatPrice(value) {
                let val = (value/1).toFixed(0).replace('.', ',')
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            }
        }
    }
</script>
