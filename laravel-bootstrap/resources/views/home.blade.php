@extends('layouts.app')

@section('content')
<!--navbar-->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/Square.svg" width="30"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

        </div>
    </div>
</nav>
<br />
<!--end nav-->

<!--hero-->
<div class="container-fluid">
    <div class="container-lg">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6">
                <div id="clothing-img">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end hero-->
<br />
<hr class="style1" />
<br />
<!--filter-->
<div class="container d-flex justify-content-center">
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-outline-secondary">All</button>
        <button type="button" class="btn btn-outline-secondary">Casual</button>
        <button type="button" class="btn btn-outline-secondary">Formal</button>
    </div>
    <div class="dropdown">
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-secondary" type="submit">Search</button>
    </form>
</div>
<!--filter end-->
<br />
<!--event cards-->
<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-4 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="ms-2">
                        <h6 class="mb-0">Test</h6>
                        <span>Posted 2 days ago</span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <img class="rounded-circle shadow-4-strong" width="50" height="50" alt="" src="/" />
                    </div>
                </div>
                <div class="mt-5">
                    <img src="images/mbv.jpg" alt="" class="img-thumbnail" />
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3">
                            <span class="">10 <span class="">of 110 sold</span></span>
                        </div>
                        <hr class="style1" />
                        <div class="d-flex justify-content-end">
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    <img src="images/Invite.svg" />
                                </button>
                            </a>
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="ms-2">
                        <h6 class="mb-0">Test</h6>
                        <span>Posted 24 days ago</span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <img class="rounded-circle shadow-4-strong" width="50" height="50" alt="" src="/" />
                    </div>
                </div>
                <div class="mt-5">
                    <img src="images/alexg.jpg" alt="" class="img-thumbnail" />
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3">
                            <span class="">80 out of 92 sold</span>

                        </div>
                        <hr class="style1" />
                        <div class="d-flex justify-content-end">
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    <img src="images/Invite.svg" />
                                </button>
                            </a>
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="ms-2">
                        <h6 class="mb-0">Test</h6>
                        <span>Posted 1 days ago</span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <img class="rounded-circle shadow-4-strong" width="50" height="50" alt="" src="/" />
                    </div>
                </div>
                <div class="mt-5">
                    <img src="images/lamp.jpg" alt="" class="img-thumbnail" />
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3">
                            <span class="">32 <span class="">of 50 sold</span>
                        </div>
                        <hr class="style1" />
                        <div class="d-flex justify-content-end">
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    <img src="images/Invite.svg" />
                                </button>
                            </a>
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="ms-2">
                        <h6 class="mb-0">Test</h6>
                        <span>Posted 4 days ago</span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <img class="rounded-circle shadow-4-strong" width="50" height="50" alt="" src="/" />
                    </div>
                </div>
                <div class="mt-5">
                    <img src="images/fish.jpg" alt="" class="img-thumbnail" />
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3">
                            <span class="">88 out of 92 sold</span>

                        </div>
                        <hr class="style1" />
                        <div class="d-flex justify-content-end">
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    <img src="images/Invite.svg" />
                                </button>
                            </a>
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="ms-2">
                        <h6 class="mb-0">Test</h6>
                        <span>Posted 14 days ago</span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <img class="rounded-circle shadow-4-strong" width="50" height="50" alt="" src="/" />
                    </div>
                </div>
                <div class="mt-5">
                    <img src="images/midairthief.jpg" alt="" class="img-thumbnail" />
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 33%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3">
                            <span class="">20 out of 60 sold</span>

                        </div>
                        <hr class="style1" />
                        <div class="d-flex justify-content-end">
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    <img src="images/Invite.svg" />
                                </button>
                            </a>
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="ms-2">
                        <h6 class="mb-0">Test</h6>
                        <span>Posted 90 days ago</span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <img class="rounded-circle shadow-4-strong" width="50" height="50" alt="" src="/" />
                    </div>
                </div>
                <div class="mt-5">
                    <img src="images/glow.jpg" alt="" class="img-thumbnail" />
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3">
                            <span class="">44 out of 122 sold</span>

                        </div>
                        <hr class="style1" />
                        <div class="d-flex justify-content-end">
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    <img src="images/Invite.svg" />
                                </button>
                            </a>
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="ms-2">
                        <h6 class="mb-0">Test</h6>
                        <span>Posted 4 days ago</span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <img class="rounded-circle shadow-4-strong" width="50" height="50" alt="" src="/" />
                    </div>
                </div>
                <div class="mt-5">
                    <img src="images/macdemarco.jpg" alt="" class="img-thumbnail" />
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3">
                            <span class="">42 out of 92 sold</span>

                        </div>
                        <hr class="style1" />
                        <div class="d-flex justify-content-end">
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    <img src="images/Invite.svg" />
                                </button>
                            </a>
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="ms-2">
                        <h6 class="mb-0">Test</h6>
                        <span>Posted 6 days ago</span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <img class="rounded-circle shadow-4-strong" width="50" height="50" alt="" src="/" />
                    </div>
                </div>
                <div class="mt-5">
                    <img src="images/beabadoobee.jpg" alt="" class="img-thumbnail" />
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3">
                            <span class="">66 out of 144 sold</span>

                        </div>
                        <hr class="style1" />
                        <div class="d-flex justify-content-end">
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    <img src="images/Invite.svg" />
                                </button>
                            </a>
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="ms-2">
                        <h6 class="mb-0">Test</h6>
                        <span>Posted 10 days ago</span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <img class="rounded-circle shadow-4-strong" width="50" height="50" alt="" src="/" />
                    </div>
                </div>
                <div class="mt-5">
                    <img src="images/amhac.png" alt="" class="img-thumbnail" />
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3">
                            <span class="">10 out of 77 sold</span>

                        </div>
                        <hr class="style1" />
                        <div class="d-flex justify-content-end">
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    <img src="images/Invite.svg" />
                                </button>
                            </a>
                            <a href="product">
                                <button type="button" class="btn btn-outline-secondary">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<footer class="text-center text-white bg-primary">
    <div class="container">
        <div class="mt-5">
            <div class="row text-center d-flex justify-content-center pt-4">
                <div class="col-md-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#" class="text-white">About</a>
                    </h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#" class="text-white">Help</a>
                    </h6>
                </div>
                <div class="col-md-2">
                    <h6 class="text-uppercase font-weight-bold">
                        <a href="#" class="text-white">Contact</a>
                    </h6>
                </div>
            </div>
        </div>


        <hr class="my-5" />


        <div class="mb-2">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <p>
                        This project is completely open source and can be found by clicking on the github icon below.
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center mb-4">
            <a class="text-white me-4">
                <i class="fab fa-github"></i>
            </a>
        </div>

    </div>
    <div class="text-center p-1">
        © 2023 Copyright: Jack
    </div>
</footer>
<!--end footer-->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>
@endsection