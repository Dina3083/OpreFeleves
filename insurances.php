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
                    <li class="nav-item"><a class="nav-link" href="index.php">Főoldal</a></li>
                    <li class="nav-item"><a class="nav-link" href="destinations.php">Úticélok</a></li>
                    <li class="nav-item"><a class="nav-link active" href="insurances.php">Biztosítások</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Kapcsolat</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Biztosításaink</h2>
            <div class="row g-4">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Téves Időpont Biztosítás - Alap felszereltség
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <i>Az a repülő tegnap volt..</i><br>
                                    Ha félrenézte az indulási napot, az időzónát, vagy csak simán nem ébredt fel - mi megigérjük: semmit nem oldunk meg,
                                    de együtt nevetünk Önnel (vagy Önön). <br>
                                    <b>Induló ár: Ingyenes</b>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Szomszédülő-biztosítás
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <i>Mert mindig lehet rosszabb!!</i><br>
                                    Ha nem akar síró babát, zokniszandálos beszélőgépet vagy extra szagos alvó utast maga mellé, akkor ez <b>NEM</b> a megfelelő 
                                    biztosítás. Mi garantáljuk, hogy megkapja őket. <br>
                                    <b>Induló ár: 3499.-</b>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Poggyászelvesztési Biztosítás (Direkt Elveszítjük)
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <i>Ne aggódjon, tőlünk biztosan nem kapja vissza!</i><br>
                                   Fedezi a poggyász elvesztését.. sőt, garantáljuk, hogy el is veszítjük, és lehetőleg egy másik kontinensen! <br>
                                   <b>Induló ár: 4999.-</b>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Megkésett Indulás (Időhurok Extra)
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <i>Indulás: valamikor a múltban vagy a jövőben</i><br>
                                   Garantált késés, de cserébe valószínűtlen átszállások és 48 órás reptéri várakozás is játszik.<br>
                                   <b>Induló ár: 1499.-</b>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Véletlen Célállomás Garancia
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <i>Oda megyünk, ahová a szél (és az adminisztratív hiba) visz!</i><br>
                                   Ne lepődjön meg, ha Velence helyett Velencén landol. Garantáljuk a meglepetést. (<b>Reklamáció nincs.</b>)<br>
                                   <b>Induló ár: 7499.-</b>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Paranormális Panaszcsomag
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <i>Különösen alkalmas elátkozott hotelekhez és démonjárta hostelekhez.</i><br>
                                   Ha az ágy alatt valami mozog, a zuhanyban sírnak, vagy a tükör visszanéz - mi nem hiszünk neked, de legalább 
                                   adunk egy biztonsági sózacskót és egy keresztet.<br>
                                   <b>Induló ár: 4499.-</b>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Túrabotrány Biztosítás
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <i>Túra volt.. volna.</i><br>
                                   Fedezi azokat a kirándulásokat, ahol a túravezető eltéved, a térkép fordítva van, és a "könnyű séta" 12 órás hegymászásnak 
                                   bizonyul.<br>
                                   <b>Induló ár: 14 999.-</b>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Home Office Trauma Biztosítás
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <i>Kikapcsolódás? Inkább csatlakozás</i><br>
                                   Ha a főnököd "véletlenül" megemlíti, hogy nyugodtan csatlakozhatsz a meetingre a tengerpartól is - mi küldünk egy automatikus 
                                   alibikészítőt és technikai hibát szimuláló hangokat<br>
                                   <b>Induló ár: 1999.-</b>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Bankkártya-blokkolás Biztosítás
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <i>Utazzon nyugodtan, fizessen pánikolva.</i><br>
                                   Fedezet, ha a bank gyanúsnak találja, hogy külföldön próbál költeni, és azonnal letíltja a kártyáját.<br>
                                   <b>Most bónuszként: 48 órás ügyfélszolgálati várakozás!</b><br>
                                   <b>Induló ár: 8499.-</b>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Utazási törlés biztosítás
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   <i>Már nincs is kedvem menni</i><br>
                                   Amennyiben az utazás előtt az utazás tárgytalanná válik, azt minden probléma nélkül lemondhatja. Az utazásra befizetett összeg 100%-a visszatérül.<br>
                                   <b>Induló ár: 49 999.-</b>
                                </div>
                            </div>
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