<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Custom Tooltip Styling */
        #chartjs-tooltip {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            border-radius: 5px;
            padding: 10px;
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            pointer-events: none;
            transition: all 0.2s ease;
            opacity: 0; /* Default hidden */
        }

        #chartjs-tooltip img {
            margin-top: 5px;
            border-radius: 3px;
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0 d-flex align-items-center">
                <img src="img/logo.png" alt="Logo" class="me-2">
                <span class="text-primary fw-bold" style="font-family: 'Arial', sans-serif;">PT. Bara Blasting</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="/about" class="nav-item nav-link active">About</a>
                    <a href="/product" class="nav-item nav-link">Product</a>
                    <a href="/contact" class="nav-item nav-link">Contact Us</a>
                </div>
            </div>
        </nav>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">About</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h1 class="display-5 mb-4">The Best Explosives And Fertilizer Producer</h1>
                        <p class="mb-0">Better Products With A Lot Less</p>
                        <p>Versatility at its Finest</p>

                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div class="ms-4">
                                        <h4>Vision</h4>
                                        <p>The most efficient nitrate-producing company in the world.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <div class="d-flex">
                                    <div class="ms-4">
                                        <h4>Mission</h4>
                                        <p>Our locally produced Ammonium Nitrate, manufactured with high-quality facilities, enables us to consistently ensure the availability of supply through comprehensive distribution to our customers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="img/about02.png" class="img-fluid rounded w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Line Chart Start -->
    <div class="container my-5">
        <h3 class="text-center mb-4">Our Company Target</h3>
        <canvas id="milestoneChart"></canvas>
        <!-- Custom Tooltip -->
        <div id="chartjs-tooltip">
            <div id="tooltip-text"></div>
            <img id="tooltip-image" src="" />
        </div>
    </div>
    <!-- Line Chart End -->


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="index.html" class="p-0">
                            <h4 class="text-white"></i>PT.Bara Blasting Perkasa</h4>
                            <!-- <img src="img/logo.png" alt="Logo"> -->
                        </a>
                        <p class="mb-4">"Our locally produced Ammonium Nitrate, manufactured with high-quality facilities, enables us to consistently ensure the availability of supply through comprehensive distribution to our customers."</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a href="/about"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="/product"><i class="fas fa-angle-right me-2"></i> Product</a>
                        <a href="/contact"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <p class="text-white mb-0">Menara Imperium 10th Floor, Jalan H.R. Rasuna Said Kav 1, Setiabudi, Jakarta Selatan 12980</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <p class="text-white mb-0">company.info@barablastingperkasa.co.id</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-primary me-3"></i>
                            <p class="text-white mb-0">+62 21 837 85938</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- JavaScript -->
    <script>
        var ctx = document.getElementById('milestoneChart').getContext('2d');

        var dataPoints = [
            '2022. Company Establishment',
            '2023. Recommendation Letter from Indonesian Ministry of Defence',
            '2024. Dynamite Production',
            '2025. Booster Production',
            '2027. NA, AN, and CN Production'
        ];

        var images = [
            'img/company establish.png', 
            'img/recomendation2023.png', 
            'img/dynamiteprdct.png', 
            'img/boosterprdctn.png', 
            'img/cn,an.png', 
        ];

        // Membuat Chart dengan latar belakang logo dan teks
        var milestoneChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['2022', '2023', '2024', '2025', '2027'], // Label tahun-tahun pencapaian
                datasets: [{
                    data: [1, 2, 3, 4, 5], // Tingkatan pencapaian (diwakili oleh angka)
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna area di bawah garis
                    borderColor: 'rgba(54, 162, 235, 1)', // Warna garis
                    borderWidth: 2,
                    fill: true,
                    tension: 0.3, // Membuat garis menjadi halus
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    tooltip: {
                        enabled: false, // Matikan tooltip default
                        external: function(context) {
                            // Tooltip elemen yang akan ditampilkan
                            var tooltipEl = document.getElementById('chartjs-tooltip');

                            // Tooltip model
                            var tooltipModel = context.tooltip;

                            // Jika tidak ada tooltip, sembunyikan elemen
                            if (tooltipModel.opacity === 0) {
                                tooltipEl.style.opacity = 0;
                                return;
                            }

                            // Set lokasi tooltip berdasarkan posisi mouse
                            var position = context.chart.canvas.getBoundingClientRect();
                            tooltipEl.style.left = position.left + window.pageXOffset + tooltipModel.caretX + 'px';
                            tooltipEl.style.top = position.top + window.pageYOffset + tooltipModel.caretY + 'px';
                            tooltipEl.style.opacity = 1;

                            // Tampilkan teks dan gambar di tooltip
                            var index = tooltipModel.dataPoints[0].dataIndex;
                            var text = dataPoints[index];
                            var imgSrc = images[index];

                            // Set teks tooltip
                            document.getElementById('tooltip-text').innerHTML = text;

                            // Set gambar di tooltip jika ada, jika tidak ada sembunyikan
                            var imgEl = document.getElementById('tooltip-image');
                            if (imgSrc) {
                                imgEl.src = imgSrc;
                                imgEl.style.display = 'block';
                            } else {
                                imgEl.style.display = 'none';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1 // Set setiap langkah (level pencapaian)
                        }
                    }
                }
            },
            plugins: [{
                // Menggambar logo di background sebelum chart
                beforeDraw: function(chart) {
                    var ctx = chart.ctx;
                    var chartArea = chart.chartArea;
                    var xAxis = chart.scales['x']; // Mendapatkan skala sumbu x
                    var yAxis = chart.scales['y']; // Mendapatkan skala sumbu y

                    var image = new Image();
                    image.src = 'img/logobpp.png'; // Path gambar logo

                    image.onload = function() {
                        // Menghitung ukuran grid untuk sumbu x dan y
                        var cellWidth = (xAxis.right - xAxis.left) / (xAxis.ticks.length - 1); // Lebar satu sel pada sumbu x
                        var cellHeight = (yAxis.bottom - yAxis.top) / (yAxis.ticks.length - 1); // Tinggi satu sel pada sumbu y

                        // Menentukan ukuran logo seukuran 2x3 grid cells
                        var logoWidth = cellWidth * 2;
                        var logoHeight = cellHeight * 3;

                        // Menentukan posisi tengah logo di area grafik
                        var x = (chartArea.left + chartArea.right) / 2 - (logoWidth / 2);
                        var y = (chartArea.top + chartArea.bottom) / 2 - (logoHeight / 2);

                        // Menggambar logo dengan ukuran 2x3 grid cells
                        ctx.drawImage(image, x, y, logoWidth, logoHeight);

                        // Menambahkan teks "PT Bara Blasting Perkasa" di bawah logo
                        ctx.font = 'bold 24px Arial';
                        ctx.fillStyle = 'rgba(0, 0, 0, 0.7)';
                        ctx.textAlign = 'center';
                        ctx.fillText('PT Bara Blasting Perkasa', (chartArea.left + chartArea.right) / 2, y + logoHeight + 30);
                    };
                }
            }]
        });
    </script>

</body>

</html>
