<?php include 'partials/header.php'; ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>


<style type="text/css">
    .row {
        margin: 15px;
    }

    .qwe:hover {
        background-color: red;

    }


    .header {
        padding: 30px 30px 0;
        text-align: center;
    }

    .header__title {
        margin: 0;
        text-transform: uppercase;
        font-size: 2.5em;
        font-weight: 500;
        line-height: 1.0;
    }

    .img-fluid:hover {
        transform: scale(1.1);
        transition: 0.3s linear;
    }

</style>


<main>
    <div class="header">
        <h1 class="header__title">Sertifikatlarımız</h1>
    </div>
    <br>

    <div class="container">
        <div class="row">

            <a href="./images/f1.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="./images/f1.png" class="img-fluid rounded">
            </a>


            <a href="./images/f3.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="./images/f3.png" class="img-fluid rounded">
            </a>

            <a href="./images/f2.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="./images/f2.png" class="img-fluid rounded">
            </a>

            <a href="./images/f7.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="./images/f7.jpg" class="img-fluid rounded">
            </a>


            <a href="./images/f4.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="./images/f4.png" class="img-fluid rounded">
            </a>

            <a href="./images/f5.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="./images/f5.png" class="img-fluid rounded">
            </a>


            <a href="./images/f6.png" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                <img src="./images/f6.png" class="img-fluid rounded">
            </a>


        </div>
    </div>
</main>


</div>
<?php include 'partials/footer.php'; ?>