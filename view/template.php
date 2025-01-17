<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="public/css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light menu">

            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liens</a>
                    </li>
                </ul>
                <form class="d-flex" action="index.php?action=insert" method="post">
                    <input class="form-control me-2" type="texte" name="nom" placeholder="Ajouter une todo" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">AJOUTER</button>
                </form>
            </div>

        </nav>
    </div>
    <!-- End smartphone / tablet look -->



    <div class="container main">

        <?= $content ?>
    </div>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-6 d-flex align-items-center">

                <span>© 2021 Copyleft | Julien Vaupré, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><i class="fab fa-facebook fa-2x"></i></li>
                <li class="ms-3"><i class="fab fa-twitter-square fa-2x"></i></li>
                <li class="ms-3"><i class="fab fa-linkedin fa-2x"></i></li>
            </ul>
        </footer>
    </div>
</body>
<script src="public/js/js.js"></script>

</html>