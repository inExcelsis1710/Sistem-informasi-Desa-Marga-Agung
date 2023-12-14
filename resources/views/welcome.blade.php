<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Administrasi Desa Marga Agung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">DESA MARGA AGUNG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>

                    </li>
                    <li>
                        <a href="/register" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('slide/satu.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('slide/dua.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('slide/tiga.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="card">
        <p></p>
        <div class="container">
            <p class="fs-3">Tentang Desa Marga Agung</p>
            <p class="text-sm-start">Desa Marga Agung merupakan bagian dari pemerintahan Kabupaten Lampung Selatan di Kecamatan Jati Agung. 
                Alamat Desa Marga Agung adalah Jl. Raya Marga Agung No.01, Desa Marga Agung, Kecamatan Jati Agung, Kabupaten Lampung Selatan.</p>
            <p></p>
        </div>
    </div>

    <div style="display: flex; justify-content: space-between; margin: 20px;">
    <div class="widget-container" style="text-align: center; flex: 0 0 48%;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31780.91881290045!2d105.30272230317347!3d-5.322617476975601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c382e78e1205%3A0xa463c44d4cce110e!2sMarga%20Agung%2C%20Jati%20Agung%2C%20South%20Lampung%20Regency%2C%20Lampung!5e0!3m2!1sen!2sid!4v1701266810945!5m2!1sen!2sid" 
            width="600" height="450" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <div class="widget-container1" style="flex: 0 0 48%;">
        <script>
            (function(d, s, id) {
                if (d.getElementById(id)) {
                    if (window.__TOMORROW__) {
                        window.__TOMORROW__.renderWidget();
                    }
                    return;
                }
                const fjs = d.getElementsByTagName(s)[0];
                const js = d.createElement(s);
                js.id = id;
                js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";
        
                fjs.parentNode.insertBefore(js, fjs);
            })(document, 'script', 'tomorrow-sdk');
        </script>
        
        <div class="tomorrow"
            data-location-id="056485"
            data-language="ID"
            data-unit-system="METRIC"
            data-skin="light"
            data-widget-type="upcoming"
            style="padding-bottom: 22px; position: relative; max-width: 754px; margin: 0 auto;">
            <a
                href="https://www.tomorrow.io/weather-api/"
                rel="nofollow noopener noreferrer"
                target="_blank"
                style="position: absolute; bottom: 0; transform: translateX(-50%); left: 50%;">
                <img
                    alt="Powered by the Tomorrow.io Weather API"
                    src="https://weather-website-client.tomorrow.io/img/powered-by.svg"
                    width="250"
                    height="18">
            </a>
        </div>
    </div>
</div>


    <x-dcore.footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
