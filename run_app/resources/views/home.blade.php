@extends('layout.v_template')
@section('title')

@section('content')
@if(auth()->user()->role=='Pendayagunaan' or auth()->user()->role=='Admin' or auth()->user()->role=='Penghimpun' or auth()->user()->role=='Pendayagunaan' or auth()->user()->role=='Supervisor')
<!DOCTYPE html>
<html lang="en">
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <div class="container">
        <section class="ftco-section bg-light ftco-faqs">
            <center><div class="card card-warning">
            <marquee direction="left"><h1>Selamat Datang di Website Lazismu Kab.Pekalongan</h1></marquee>
            </div></center>
        <div class="row">
            <div class="col-lg-6 order-md-last">
                <div class="img img d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image: url(pic/about5.jpg);">
                </div>
            </div>
            <div class="col-lg-6">
                <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header p-0" id="headingOne">
                            <h2 class="mb-0">
                                <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                    <p class="mb-0">LATAR BELAKANG</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne" style="">
                            <div class="card-body py-3 px-0">
                              <p>
                              LAZISMU adalah lembaga zakat tingkat nasional yang berkhidmat dalam pemberdayaan masyarakat melalui pendayagunaan secara produktif dana zakat, infaq, wakaf dan dana kedermawanan lainnya baik dari perseorangan, lembaga, perusahaan dan instansi lainnya.
                              </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="headingTwo" role="tab">
                            <h2 class="mb-0">
                                <button
                                    href="#collapseTwo"
                                    class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed"
                                    data-parent="#accordion"
                                    data-toggle="collapse"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo"
                                >
                                    <p class="mb-0">VISI</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" style="">
                            <div class="card-body py-3 px-0">
                                <p>
                                Menjadi Lembaga Amil Zakat Terpecaya    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="headingThree" role="tab">
                            <h2 class="mb-0">
                                <button
                                    href="#collapseThree"
                                    class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed"
                                    data-parent="#accordion"
                                    data-toggle="collapse"
                                    aria-expanded="false"
                                    aria-controls="collapseThree"
                                >
                                    <p class="mb-0">MISI</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo" style="">
                            <div class="card-body py-3 px-0">
                                <ol>
                                    <li>Optimalisasi pengelolaan ZIS yang amanah, profrsional dan transparan</li>
                                    <li>Optimalisasi pendayagunaan ZIS yang kreatif, inovatif dan produktif</li>
                                    <li>Optimalisasi layanan donatur</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="headingFive" role="tab">
                            <h2 class="mb-0">
                                <button
                                    href="#collapseFive"
                                    class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link collapsed"
                                    data-parent="#accordion"
                                    data-toggle="collapse"
                                    aria-expanded="false"
                                    aria-controls="collapseFive"
                                >
                    <p class="mb-0">LAYANAN</p>
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="collapseFive" role="tabpanel" aria-labelledby="headingTwo">
                            
                            <ol>
                                    <p><strong>Alamat :</strong> Jl. Raya Bligo No.7 Bligo Utara, Bligo Kec. Buaran Kabupaten Pekalongan Jawa Tengah 51171</p>
                                    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
                                    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.ico">
                                    <!-- Place favicon.ico in the root directory -->		
                                    <!-- all css here -->
                                    <link rel="stylesheet" href="style.css">
                                    <link rel="stylesheet" href="css/responsive.css">
                                    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
                                </head>
                                <body>
                                <!-- google maps -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5834737235377!2d109.6528430146259!3d-6.9402804949856725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70215afdda2cad%3A0x48e085a229a45b!2sJl.%20Raya%20Bligo%20No.7%2C%20Bligo%20Utara%2C%20Bligo%2C%20Kec.%20Buaran%2C%20Kabupaten%20Pekalongan%2C%20Jawa%20Tengah%2051171!5e0!3m2!1sid!2sid!4v1659583176956!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </body>


                            
                            <p><strong>Jam Operasional :</strong>
                            <?php
                            date_default_timezone_set("Asia/Bangkok");
                            ?>

                            <script type="text/javascript">
                            function date_time(id)
                            {
                            date = new Date;
                            year = date.getFullYear();
                            month = date.getMonth();
                            months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
                            d = date.getDate();
                            day = date.getDay();
                            days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
                            h = date.getHours();
                            if(h<10)
                            {
                            h = "0"+h;
                            }
                            m = date.getMinutes();
                            if(m<10)
                            {
                            m = "0"+m;
                            }
                            s = date.getSeconds();
                            if(s<10)
                            {
                            s = "0"+s;
                            }
                            result = ''+days[day]+' '+d+' '+months[month]+' '+year+' '+h+':'+m+':'+s;
                            document.getElementById(id).innerHTML = result;
                            setTimeout('date_time("'+id+'");','1000');
                            return true;
                            }
                            </script>

                            <span id="date_time"></span>
                            <script type="text/javascript">window.onload = date_time('date_time');</script>
                            
                            <p><strong>Email : lazismukabpekalongan@gmail.com</strong>
                            <p><strong>Telepon(Fax) : </strong> 
                            <a>(0285)420650</a>
                            <p><strong>Nomor Whatsapp : </strong> 
                            <a href="https://api.whatsapp.com/send?phone=6285741347979&text=Hi">+6285741347979</a></ol>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style type="text/css">
.bg-light {
    background: #f8f9fd !important;
}
.ftco-faqs .myaccordion {
    margin: 0 auto;
    overflow: hidden;
}

.ftco-faqs .myaccordion .card,
.ftco-faqs .myaccordion .card:last-child .card-header {
    border: none;
    background: transparent;
}

.ftco-faqs .myaccordion .card-header {
    border: none;
    background: transparent;
}
.ftco-faqs .myaccordion .card-header p {
    position: relative;
    font-weight: 500;
    font-size: 18px;
    text-align: left;
}

.ftco-faqs .myaccordion .fa {
    font-size: 16px;
    color: rgba(0, 0, 0, 0.3);
}

.ftco-faqs .myaccordion .btn {
    width: 100%;
    font-weight: 600;
    color: black;
    padding: 0;
    text-transform: capitalize;
    letter-spacing: 0;
    border-radius: 0 !important;
    margin-bottom: 10px;
    border-radius: 40px !important;
    -webkit-box-shadow: 0px 2px 8px -4px rgba(0, 0, 0, 0.21) !important;
    -moz-box-shadow: 0px 2px 8px -4px rgba(0, 0, 0, 0.21) !important;
    box-shadow: 0px 2px 8px -4px rgba(0, 0, 0, 0.21) !important;
}

.ftco-faqs .myaccordion .btn-link:hover,
.ftco-faqs .myaccordion .btn-link:focus {
    text-decoration: none;
}

.ftco-faqs button[aria-expanded="true"] {
    background-color: #ffc107;
    color: #fff !important;
}

.ftco-faqs button[aria-expanded="false"] {
    background-color: #f0ad4e;
}
.ftco-faqs .card-body {
    background: #fff;
    margin-bottom: 10px;
    border-radius: 30px;
    -webkit-box-shadow: 0px 2px 8px -4px rgba(0, 0, 0, 0.21) !important;
    -moz-box-shadow: 0px 2px 8px -4px rgba(0, 0, 0, 0.21) !important;
    box-shadow: 0px 2px 8px -4px rgba(0, 0, 0, 0.21) !important;
}


.ftco-faqs button[aria-expanded="true"] .fa {
    color: #fff !important;
}
.ftco-faqs .myaccordion .fa {
    font-size: 16px;
    color: rgba(0, 0, 0, 0.3);
}

.ftco-faqs .myaccordion .fa {
    font-size: 16px;
    color: rgba(0, 0, 0, 0.3);
}

.ftco-faqs [data-toggle="collapse"].collapsed .fa:before {
    content: "\f067";
    font-family: "FontAwesome";
    font-style: normal;
}

.ftco-faqs [data-toggle="collapse"] .fa:before {
    content: "\f068";
    font-family: "FontAwesome";
    font-style: normal;
}

.ftco-faqs .img {
    height: 450px;
    -webkit-box-shadow: 0px 8px 21px -10px rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0px 8px 21px -10px rgba(0, 0, 0, 0.12);
    box-shadow: 0px 8px 21px -10px rgba(0, 0, 0, 0.12);
}
.img, .blog-img, .user-img {
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

.align-items-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important;
}
.justify-content-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important;
}

</style>
<script type="text/javascript">
</script>
</body>
</html>
@endif
@endsection