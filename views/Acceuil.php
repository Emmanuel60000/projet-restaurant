<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<header>
    <nav class="nav">
        <div class="main-navlinks">
            <button class="button" type="button">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="navlinks-container">
            <a href="">Accueil</a>
            <a href="">Menu</a>
            <a href="">Biographie</a>
            <a href="">Evénements</a>
            <a href="">Galerie</a>
            <a href="">Newsletter</a>
            <a href="">Contact</a>
            <a href="">Horaires</a>
        </div>
        <div>
            <img class="image" src="../img/aldenaire.jpg" alt="">
        </div>
        <div>
            <a class="reservation" href="#">RESERVATION</a>
        </div>

    </nav>
</header> -->
<main>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="item" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class=alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>First slide label</h5> -->
          <h1 class="h1">Le Barrio Alto</h1>
          <!-- <p>Some representative placeholder content for the first slide.</p> -->
          <h2 class="h2">Réstaurant Portugais</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img class="item" src="https://images.unsplash.com/photo-1551218808-94e220e084d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80" class=alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Second slide label</h5> -->

          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="item" src="https://images.unsplash.com/photo-1581349485608-9469926a8e5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1528&q=80" class=alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</section>
    <section>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-6 text-danger text-center ">

                    <p class="p1">
                        Le réstaurant vous invite a un voyage au Portugal.Venez dégustez entre amies nos
                        spécialités
                        comme la
                        Francesinha ou le cozido a Portuguesa. <br>Toute l'equipe vous attend pour un agréable
                        moment
                    </p>


                    <button class="menu">Menu</button>
                    <button class="galerie">Galerie</button>

                </div>

                <div class="col-md-6 p-2">
                    <img class="img1" src="views/assets/img/francesinha.jpg" alt="Francesinha">

                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ">
                    <img class="img2" src="views/assets/img/cuisinier.jpg" alt="cuisinier">
                </div>
                <div class="col-md-6 text-success text-center">
                    <p class="p2">
                        Paolo Sarri chef cuisinier arpente le Portugal a la recherche des meilleurs produits de la
                        nature qu'il
                        transforme en singulière promenade Lisboète
                    </p>
                    <button class="biographie">Biographie</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section1">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-6 text-center text-danger  ">
                    <h1 class="evenement">Evénements</h1>
                    <p class="p1">
                        Notre restaurant organise régulierement
                        différents événements
                    </p>
                    <button class="ensavoirplus">En savoir plus</button>
                </div>

                <div class="col-md-6">
                    <img class="img3" src="views/assets/img/menu-mariage-repas-de-mariage.jpg" alt="marriage">

                </div>
            </div>
        </div>

    </section>


</main>
<!-- <footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"><br>
                <h3>Localisation</h3><br>
                <div class="plan"> <img src="../img/plan-beauvais-24371.jpg" alt=""></div>

            </div>
            <div class="col-md-4">
                <p class="adresse">7 rue Jean Racine</p>
                <p class="adresse">Heure d'ouverture</p>
                <p class="adresse">Ouvert du mardi au dimanche de 11 heure a 14 heure<br> puis de 19 heure a 23
                    heure</p>
                <p class="adresse">téléphone <br><br> 03 44 47 54 89</p>

            </div>
            <div class="col-md-4">
                <div class="mail">
                    <button class="e_mail">Email</button><br><br>
                    <p>Newsletter</p>
                    <p>Resaux sociaux</p>
                    <div class="btn text-white  "> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                            fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg></div>

                    <div class="btn text-white "><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </div>
                    <div class="btn text-white  "> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg> </div>
                    <br><br>
                    <p>Votre avis compte</p>
                    <div class="avis"> <img src="../img/avis.webp" alt="avis"></div><br>

                    <div>
                        <a class="mention_legales" href="mentions_legales.html" target="_blank">Mentions légales</a>
                    </div>
                </div>



            </div>



        </div>


</footer>
<script src="test.js"></script>
</body>

</html> -->