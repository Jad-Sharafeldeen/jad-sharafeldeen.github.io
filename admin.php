<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="./services/servicesStyle.css">

    <style>
        .add {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .product {
            width:  20vh;
            height: 5vh;
           
        }

        .description {
            height: 10vh;
        }
        .row{
            width: 100vw;
        }
        .submit{
            background-color: green;
        }
        .remove,.remove2{
            background-color: red;
        }
        .error{
            color: red;
        }
    </style>

</head>

<body>
    <div class="row">
        <div class="card col col-12 col-lg-4 col-md-4 col-sm-12">
            <div class="contain">


                <section id="section-1">

                    <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="4000" data-bs-pause="false" data-bs-wrap="true" data-bs-touch="true"
                        data-bs-keyboard="true">

                        <div class="carousel-inner">
                            <div class="carousel-item active"><img class="carosa" src="../candy.jpg" alt=""></div>
                            <div class="carousel-item"><img class="carosa" src="../juice.jpg" alt=""></a></div>
                            <div class="carousel-item"><img class="carosa" src="../snacks.jpg" alt=""></a></div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon arrow" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon arrow" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>

            </div>
            <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
            <button class="remove">remove</button>
        </div>
        <div class="card col col-12 col-lg-4 col-md-4 col-sm-12">
            <div class="contain">


                <section id="section-1">

                    <div id="carousel1" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="4000" data-bs-pause="false" data-bs-wrap="true" data-bs-touch="true"
                        data-bs-keyboard="true">

                        <div class="carousel-inner">
                            <div class="carousel-item active"><img class="carosa" src="../candy.jpg" alt=""></div>
                            <div class="carousel-item"><img class="carosa" src="../juice.jpg" alt=""></a></div>
                            <div class="carousel-item"><img class="carosa" src="../snacks.jpg" alt=""></a></div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon arrow"
                                aria-hidden="true"><!-- <i class="bi bi- arrow-left-circle prev"></i> --></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon arrow"
                                aria-hidden="true"><!-- <i class="bi bi- arrow-right-circle next"></i> --></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>

            </div>
            <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
            <button class="remove">remove</button>
        </div>
        <div class="card col col-12 col-lg-4 col-md-4 col-sm-12">
            <div class="contain">


                <section id="section-1">

                    <div id="carousel2" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="4000" data-bs-pause="false" data-bs-wrap="true" data-bs-touch="true"
                        data-bs-keyboard="true">

                        <div class="carousel-inner">
                            <div class="carousel-item active"><img class="carosa" src="../candy.jpg" alt=""></div>
                            <div class="carousel-item"><img class="carosa" src="../juice.jpg" alt=""></div>
                            <div class="carousel-item"><img class="carosa" src="../snacks.jpg" alt=""></div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon arrow"
                                aria-hidden="true"><!-- <i class="bi bi- arrow-left-circle prev"></i> --></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon arrow"
                                aria-hidden="true"><!-- <i class="bi bi- arrow-right-circle next"></i> --></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>

            </div>

            <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
            <button class="remove">remove</button>
        </div>
    </div>

<div class="row">

</div>
    
    <section>
        <button class="add">
            <i class="bi bi-plus-circle-fill"></i>
        </button>
    </section>


   
<script src="script.js"></script>
</body>

</html>

