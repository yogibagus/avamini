<!DOCTYPE html>
<html lang="en">

<head>
    <title>AVAMINI - A simple and fast avatar API</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>

    <div class="p-5 bg-primary text-white text-center">
        <h1>AVAMINI</h1>
        <p>A simple and fast avatar API build with a single index.php</p>
        <p>Version 1.0</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://github.com/yogibagus/avamini">Go to Github</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>readme.md</h2>
                    </div>
                    <div class="card-body">
                        <h3>Endpoint</h3>
                        <ul>
                            <li><a target="_blank" href="https://avamini.decko.my.id/api">https://avamini.decko.my.id/api</a></li>
                        </ul>

                        <h4>Change Background</h4>
                        <ul>
                            <li>Query Params: bg</li>
                            <li><a target="_blank" href="https://avamini.decko.my.id/api?bg=blue">https://avamini.decko.my.id/api?bg=blue</a></li>
                        </ul>

                        <h4>Custom Text</h4>
                        <ul>
                            <li>Query Params: text</li>
                            <li>Only get first 2 character</li>
                            <li><a target="_blank" href="https://avamini.decko.my.id/api?text=yogi">https://avamini.decko.my.id/api?text=yogi</a></li>
                        </ul>

                        <h4>Mix it</h4>
                        <ul>
                            <li>You can also mix it.</li>
                            <li><a target="_blank" href="https://avamini.decko.my.id/api?text=yogi&bg=blue">https://avamini.decko.my.id/api?text=yogi&bg=blue</a></li>
                        </ul>


                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Response IMG</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 col-6 mb-2">
                                <div class="card">
                                    <img class="card-img-top" src="https://avamini.decko.my.id/api/?bg=blue" alt="">
                                    <div class="card-body">
                                        <p class="card-text">bg=blue</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-6 mb-2">
                                <div class="card">
                                    <img class="card-img-top" src="https://avamini.decko.my.id/api/?bg=yellow" alt="">
                                    <div class="card-body">
                                        <p class="card-text">bg=yellow</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-6 mb-2">
                                <div class="card">
                                    <img class="card-img-top" src="https://avamini.decko.my.id/api/?bg=red" alt="">
                                    <div class="card-body">
                                        <p class="card-text">bg=red</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-6 mb-2">
                                <div class="card">
                                    <img class="card-img-top" src="https://avamini.decko.my.id/api/?bg=green" alt="">
                                    <div class="card-body">
                                        <p class="card-text">bg=green</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-6 mb-2">
                                <div class="card">
                                    <img class="card-img-top" src="https://avamini.decko.my.id/api/?bg=pink" alt="">
                                    <div class="card-body">
                                        <p class="card-text">bg=pink</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-6 mb-2">
                                <div class="card">
                                    <img class="card-img-top" src="https://avamini.decko.my.id/api/?bg=dark" alt="">
                                    <div class="card-body">
                                        <p class="card-text">bg=dark</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>yogibagus © 2022</p>
    </div>

</body>

</html>