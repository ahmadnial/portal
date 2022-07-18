<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>portal-RSNR</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fa/css/all.css">
    <link rel="stylesheet" href="fa/css/all.min.css">
</head>
<style type=text/css>
    body {
        background-image: url("fa/bg-medic.jpg");
        /* filter: blur(3px);
        -webkit-filter: blur(3px); */
        box-shadow: 0 15px 25px;
        border-radius: 4px;
        backdrop-filter: blur(4px);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: center;
        /* background-color: #ffff; */
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        /* background: linear-gradient(80deg, white, #AAA1FB); */

    }

    .card-body {

        background-color: transparent;
        /* display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); */
        box-shadow: 0 35px 55px rgba(129, 124, 124, 0.8);
        border-radius: 9px;
        backdrop-filter: blur(9px);
        /* padding: 10px; */

    }

    .item {
        width: 130px;
        text-align: center;
        background-color: transparent;
        border: 1px solid transparent;
        margin-right: 3px;
        margin-bottom: 1px;
        float: left;
    }
</style>

<body>
    <header>
        <div class="mt-2 col-lg-11 col-md-11 text-center text-white">
            <h1 class="text-dark">Portal<b>&nbsp;<i class="text-danger">Sistem</i></b> Rumah Sakit Nur Rohmah</h1>
            <figure>
                <blockquote class="blockquote text-dark">
                    <p>A Simple way to Papperless & Managemenable.</p>
                </blockquote>
                <figcaption class="blockquote-footer float-right">
                    A Tim behind <cite title="Source Title">This Apps</cite>
                </figcaption>
            </figure>
        </div>
    </header>

    <div class="col-6 col-md-6">
        <div class="card-body">
            <div class="row g-2">
                <div class="col-md">
                    <div class="item">
                        <a href="http://192.168.10.7:277/survey/index.php" target="_blank">
                            <img src="fa/verif-doc.svg" />
                            <p> Verif-Doc </p>
                        </a>
                    </div>

                    <div class="item">
                        <!-- <a href="#" target="_blank"> -->
                        <img src="fa/e-lib2.png" />
                        <p>E-library</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://192.168.10.7:89/login.php" target="_blank">
                            <img src="fa/sismadak.png" />
                            <p>Sismadak</p>
                        </a>
                    </div>
                    <div class="item">
                        <a href="http://192.168.10.7:277/dashboard/index.php" target="_blank">
                            <img src="fa/dashboard1.png" />
                            <p>Dashboard</p>
                        </a>
                    </div>
                    <div class="col-md">
                        <div class="item">
                            <a href="http://192.168.10.7:277/IT-portal/index.php" target="_blank">
                                <img src="fa/inventory.png" />
                                <p> Inventory RS </p>
                            </a>
                        </div>
                        <div class="item" data-bs-toggle="tooltip" data-bs-html="true" title="Kamingsun">
                            <!-- <a href="www.google.com" target="_blank"> -->
                            <img src="fa/eSlip.png" />
                            <p>E-Slip</p>
                            </a>
                        </div>
                        <!-- <div class="item">
                            <a href="www.google.com" target="_blank">
                                <img src="fa/website.png" />
                                <p>Website RS</p>
                            </a>
                        </div> -->
                        <!-- </div> -->
                        <!-- </div> -->

                        <div class="item" data-bs-toggle="tooltip" data-bs-html="true" title="">
                            <a href="http://192.168.10.7:277/ksd-emr/index.php" target="_blank">
                                <img src="fa/form.png" />
                                <p>Form Kendala EMR</p>
                            </a>
                        </div>
                        <!-- <div class="item">
                        <a href="www.google.com" target="_blank">
                            <img src="fa/document.png" />
                            <p>Soon</p>
                        </a>
                    </div> -->

                        <div class="item">
                            <a href="http://192.168.10.7:277/IT-portal/index.php" target="_blank">
                                <img src="fa/portakIT2.png" />
                                <p>Portal-IT</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://192.168.10.7:277/order-perbaikan/" target="_blank">
                                <img src="fa/order-perbaikan.png" />
                                <p>Order Perbaikan</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="www.google.com" target="_blank">
                                <img src="fa/order-barang3.png" />
                                <p>Order Barang</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="www.google.com" target="_blank">
                                <img src="fa/cuti.png" />
                                <p>Pengajuan Cuti</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="http://192.168.10.7:277/RL/" target="_blank">
                                <img src="fa/rl.png" />
                                <p>Data RL</p>
                            </a>
                        </div>
                        <div class="item">
                            <a href="" target="_blank">
                                <img src="fa/form.png" />
                                <p>Dokumen RS</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="js/bootstrap.bundle.min.js"></script>
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>