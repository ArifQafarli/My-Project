<?php include 'partials/header.php'; ?>
<style type="text/css">
    .img-fluid {
        max-width: 100%;
        height: auto;
        padding:5px;

    }

    .ag23 {
        margin-top: 100px;

    }

    #pson {
        color: #000;
        letter-spacing: 1px;
        font-size: 15px;
        line-height: 1.8;
        margin-top: 30px;
        font-weight: 100;

    }

    #rentacar {
        background-color: #0f1015;
        padding: 50px;
        text-align: center;
        height: 570px;

    }

    .card {
        width: 300px;
        height: 250px;
        /* border:1px solid #ddd;*/
        padding: 0;
        display: inline-block;
    }

    .baslikcard {
        font-size: 15px;
        color: #000;
    }

    .cardp {
        color: #000;
    }

    .card:hover {
        border: 3px solid #0f1015;
    }
</style>
<main>
    <section id="rentacar">
        <div class="container">
            <h3> Tərəfdaşlarımız</h3>
            <p>Onlar işlərini peşakar mütəxəssislərə etibar edirlər</p>
            <br><br>
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge=1.5>
                    <img src="./images/k1.jpg" class="img-fluid">
                </div>


                <div class="card item" data-merge=1.5>
                    <img src="./images/k2.jpg" class="img-fluid">
                </div>

                <div class="card item" data-merge=1.5>
                    <img src="./images/k3.jpg" class="img-fluid"><br>
                    <img src="./images/k4.jpg" class="img-fluid">
                   

                </div>
              

            </div>
        </div>
    </section>
    <script>
        var $cell = $('.card');

        //open and close card when clicked on card
        $cell.find('.js-expander').click(function () {

            var $thisCell = $(this).closest('.card');

            if ($thisCell.hasClass('is-collapsed')) {
                $cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed').addClass('is-inactive');
                $thisCell.removeClass('is-collapsed').addClass('is-expanded');

                if ($cell.not($thisCell).hasClass('is-inactive')) {
                    //do nothing
                } else {
                    $cell.not($thisCell).addClass('is-inactive');
                }

            } else {
                $thisCell.removeClass('is-expanded').addClass('is-collapsed');
                $cell.not($thisCell).removeClass('is-inactive');
            }
        });

        //close card when click on cross
        $cell.find('.js-collapser').click(function () {

            var $thisCell = $(this).closest('.card');

            $thisCell.removeClass('is-expanded').addClass('is-collapsed');
            $cell.not($thisCell).removeClass('is-inactive');

        });
    </script>
<?php include 'partials/footer.php'; ?>