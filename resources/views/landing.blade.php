<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrol Pemadam Kebakaran</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<div class="container my-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center py-3">
        <img src="https://storage.googleapis.com/a1aa/image/XT8aUSG5Kh6wHlBeBkaeRBXYaWfFv8HA1i4foreJdjc55UsdC.jpg" alt="Logo" width="50" height="50"/>
        <button class="btn btn-dark">DASHBOARD</button>
    </div>

    <!-- Hero Section -->
    <div class="row bg-white p-5 align-items-center mb-5">
        <div class="col-md-6">
            <h1>Kontrol Pemadam Kebakaranmu!</h1>
            <p>Lorem ipsum dolor sit amet consectetur</p>
            <button class="btn btn-dark">DASHBOARD</button>
        </div>
        <div class="col-md-6 text-center">
            <img src="https://storage.googleapis.com/a1aa/image/Jz8skDfSwETCXiKcikjQy1Lh856Y1vfdmusul5ABS97OnitTA.jpg" alt="Image of fire control system" class="img-fluid" style="width: 300px; height: 300px; background-color: #ccc;">
        </div>
    </div>

    <!-- Status Data Section -->
    <div class="text-center mb-5">
        <h2>Status Data Pada Pemadam Kebakaran</h2>
        <p>Lorem ipsum dolor sit amet consectetur. Elementum nisi duis tortor sed...</p>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm rounded">
                    <h3>Temperature</h3>
                    <p>49&deg;</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm rounded">
                    <h3>Smoke Level</h3>
                    <p>55%</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm rounded">
                    <h3>Water Pressure</h3>
                    <p>800 PSI</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm rounded">
                    <h3>Baterai</h3>
                    <p>80%</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Gambar Alat Section -->
    <div class="text-center mb-5">
        <h2>Gambar Alat</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <img src="https://storage.googleapis.com/a1aa/image/b6ZGCCyJBv6fOiMLamSE1HceqrZOi88P0bbn0zipBfMZOFbnA.jpg" alt="Image of equipment 1" class="img-fluid" style="width: 200px; height: 200px;">
            </div>
            <div class="col-md-4">
                <img src="https://storage.googleapis.com/a1aa/image/xD7CNyGdK2rdDBQMX0DIWmftePzh6fcY5UCVuikDE3OlOFbnA.jpg" alt="Image of equipment 2" class="img-fluid" style="width: 200px; height: 200px;">
            </div>
            <div class="col-md-4">
                <img src="https://storage.googleapis.com/a1aa/image/0UfGFGOfTeeqpR5ugcPpbzX8fnHjKSB2leHmHRcFWO3E0pY7E.jpg" alt="Image of equipment 3" class="img-fluid" style="width: 200px; height: 200px;">
            </div>
        </div>
        <button class="btn btn-dark mt-4">Button</button>
    </div>

    <!-- FAQ Section -->
    <div class="text-center mb-5">
        <h2>Pertanyaan yang sering ditanyakan</h2>
        <div class="accordion mt-4" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        Lorem ipsum dolor sit amet consectetur
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur. Pulvinar arcu mattis in at sodales condimentum...
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Lorem ipsum dolor sit amet consectetur
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit amet consectetur. Pulvinar arcu mattis in at sodales condimentum...
                    </div>
                </div>
            </div>
            <!-- Tambahkan FAQ items lainnya sesuai kebutuhan -->
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Butuh bantuan? Tulis feedback mu dan kami akan senang mendengarnya!</p>
                <a href="#" class="text-white d-block">Link here</a>
                <a href="#" class="text-white d-block">Link here</a>
                <a href="#" class="text-white d-block">Link here</a>
                <a href="#" class="text-white d-block">Link here</a>
            </div>
            <div class="col-md-6 text-end">
                <button class="btn btn-light">Button</button>
            </div>
        </div>
        <div class="text-center mt-4">
            <p>&copy; 2024 Pemadam. All rights reserved.</p>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

