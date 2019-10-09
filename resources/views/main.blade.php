<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Ps4 workshop</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset("startbootstrap-grayscale-gh-pages/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('startbootstrap-grayscale-gh-pages/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('startbootstrap-grayscale-gh-pages/css/grayscale.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">
@yield('content')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Ps4 Gaming</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Khuyến mãi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#projects">Thông tin chung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#signup">Liên h</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto my-0 text-uppercase">Ps4</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-5">Ps4-Gaming cung cấp và cập nhật đầy đủ các tựa game ps mới phát hành, cũng như mua bán hợp pháp CD bản quyền.</h2>
            <a href="{{route('home.index')}}" class="btn btn-primary js-scroll-trigger">Mua h</a>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="about-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class=" mb-4" style="color: orangered">Chương trình khuyến mãi</h2>
                <p class="" style="color: orange">Khi mua trọn bộ Ps4 Slim, tặng ngay tay cầm Sony Ps4 Jet Black chính hãng.
                     Và tặng game The Last of us Free có giá 14$ .</p>
            </div>
        </div>
        <img src="{{asset('startbootstrap-grayscale-gh-pages/img/gearps4.png')}}" class="img-fluid" alt="">
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects-section bg-light">
    <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-7">
                <img class="img-fluid mb-3 mb-lg-0" src="{{asset('startbootstrap-grayscale-gh-pages/img/n.gif')}}" alt="">
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4 style="color: red">Những tựa game mới nhất!</h4>
                    <p class="text-black-50 mb-0">Giờ đây, bạn có thể sở hữu cho mình tựa game yêu thích bằng cách đặt hàng thanh toán online hoặc mua đĩa, hỗ trợ ship trong phạm vi Hà Nội.</p>
                </div>
            </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
            <div class="col-lg-6">
                <img class="img-fluid" src="{{asset('startbootstrap-grayscale-gh-pages/img/ps4.jpg')}}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Gear Ps4 chính hãng!</h4>
                            <p class="mb-0 text-white-50"> Ps4 Gaming nhập khẩu dòng ps4 mới nhất và chính hãng. Bảo hành lên đến 10 tháng!</p>
                            <hr class="d-none d-lg-block mb-0 ml-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-6">
                <img class="img-fluid" src="{{asset('startbootstrap-grayscale-gh-pages/img/l.jpg')}}" alt="">
            </div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">Sở hữu game số lượng lớn!</h4>
                            <p class="mb-0 text-white-50">Bạn sẽ có cơ hội sở hữu cho mình số lượng lớn game hoàn toàn miễn phí trên ps4 nếu đặt hàng trong những sự kiện khuyến mãi lớn của Ps4 G!</p>
                            <hr class="d-none d-lg-block mb-0 mr-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Signup Section -->
<section id="signup" class="signup-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">

                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Hãy đăng kí theo dõi trang để nhận những thông tin mới nhất!</h2>

                <form class="form-inline d-flex">
                    <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
                    <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
                </form>

            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section bg-black">
    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Address</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">Ha Noi</div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">
                            <a href="#">namtien10101997@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Phone</h4>
                        <hr class="my-4">
                        <div class="small text-black-50">+84 87566436</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social d-flex justify-content-center">
            <a href="#" class="mx-2">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="mx-2">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="mx-2">
                <i class="fab fa-github"></i>
            </a>
        </div>

    </div>
</section>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
    <div class="container">
        Copyright &copy; Your Website 2019
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('startbootstrap-grayscale-gh-pages/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('startbootstrap-grayscale-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('startbootstrap-grayscale-gh-pages/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('startbootstrap-grayscale-gh-pages/js/grayscale.min.js')}}"></script>

</body>

</html>
