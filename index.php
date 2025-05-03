<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flightmare - Utazási Iroda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/logoNobg.png" alt="Flightmare" width="100px"><img src="img/nameNobg.png" alt="Flightmare" width="200px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Főoldal</a></li>
                    <li class="nav-item"><a class="nav-link" href="destinations.php">Úticélok</a></li>
                    <li class="nav-item"><a class="nav-link" href="insurances.php">Biztosítások</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Kapcsolat</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-image text-white text-center py-5" style="background-image: url('img/bgp5.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <h1 class="display-4">Fedezd fel a világot velünk</h1>
            <p class="lead">Különleges utazások elérhető áron</p>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Népszerű úticéljaink</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="img/boringOregon.jpg" class="card-img-top" alt="Párizs">
                        <div class="card-body">
                            <h5 class="card-title">Boring - Oregon</h5>
                            <p class="card-text">Mert egyeseknek a semmi is szórakoztató. Itt még a táj is szép, de valahogy egy kicsit... unalmas. Ha valaha is szeretnél egy helyet, ami tökéletes a szundizáshoz, Boring vár rád!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="img/whyArizona.jpg" class="card-img-top" alt="Róma">
                        <div class="card-body">
                            <h5 class="card-title">Why - Arizona</h5>
                            <p class="card-text">Egy hely, ahol a nap sosem megy le, és a homok mindenütt ott van, ahol nem számítottál rá! Ide gyere, ha imádod a forróságot és a megválaszolatlan kérdéseket</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="img/leTamponFrance.jpg" class="card-img-top" alt="Tokió">
                        <div class="card-body">
                            <h5 class="card-title">Le Tampon - Réunion</h5>
                            <p class="card-text">Franciaország legbájosabb titka, ami csak azért nem lett híresebb, mert senki sem tudja kimondani! A hely, ahol a baguette és a napfény találkoznak – egy igazi francia hangulat!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-light text-center py-4">
        <div class="container">
        <p class="mb-0"><a href="gabi.php" style="text-decoration: none; color: inherit;">© </a>2025 Flightmare Utazási Iroda</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
