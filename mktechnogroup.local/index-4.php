<?php include 'partials/header.php'; ?>
<style type="text/css">
    /*Card Grid*/
    .wrapper {
        margin: 5em auto;
        max-width: 80%;
        background-color: transparent;
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.06);
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
        line-height: 1.1;
        padding: 20px;
    }

    .header__subtitle {
        margin: 0;
        font-size: 1.5em;
        color: #949fb0;
        font-family: "Yesteryear", cursive;
        font-weight: 500;
        line-height: 1.1;
    }

    .cards {
        padding: 15px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }

    .card {
        margin: 15px;
        transition: all 0.2s ease-in-out;
    }

    @media screen and (min-width: 768px) and (max-width: 992px) {

        .cards {
            padding: 15px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

    }

    .card:hover .card__inner {
        background-color: maroon;
        transform: scale(1.05);
    }

    .card__inner {
        width: 100%;
        padding: 30px;
        position: relative;
        cursor: pointer;
        background-color: #949fb0;
        color: #0f1015;
        font-size: 1.5em;
        text-transform: uppercase;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        column-gap: 15px;
        align-items: center;
        transition: all 0.2s ease-in-out;
        min-height: 28vh
    }

    .card__inner:after {
        transition: all 0.3s ease-in-out;
    }

    .card__inner .fa {
        width: 100%;
        margin-top: 0.25em;
    }

    .card__expander {
        transition: all 0.2s ease-in-out;
        background-color: #333a45;
        width: 100%;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        text-transform: uppercase;
        color: #eceef1;
        font-size: 1.5em;
    }

    .card__expander .fa {
        font-size: 0.75em;
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    .card__expander .fa:hover {
        opacity: 0.9;
    }

    .card.is-collapsed .card__inner:after {
        content: "";
        opacity: 0;
    }

    .card.is-collapsed .card__expander {
        max-height: 0;
        min-height: 0;
        overflow: hidden;
        margin-top: 0;
        opacity: 0;
    }

    .card.is-expanded .card__inner {
        background-color: #949fb0;
    }

    .card.is-expanded .card__inner:after {
        content: "";
        opacity: 1;
        display: block;
        height: 0;
        width: 0;
        position: absolute;
        bottom: -30px;
        left: calc(50% - 15px);
        border-left: 15px solid transparent;
        border-right: 15px solid transparent;
        border-bottom: 15px solid #333a45;
    }

    .card.is-expanded .card__inner .fa:before {
        content: "";
    }

    .card.is-expanded .card__expander {
        max-height: 1000px;
        min-height: 200px;
        overflow: visible;
        margin-top: 30px;
        opacity: 1;
    }

    .card.is-expanded:hover .card__inner {
        transform: scale(1);
    }

    .card.is-inactive .card__inner {
        pointer-events: none;
        opacity: 0.5;
    }

    .card.is-inactive:hover .card__inner {
        background-color: #949fb0;
        transform: scale(1);
    }


    @media screen and (min-width: 992px) {
        .card:nth-of-type(3n+2) .card__expander {
            margin-left: calc(-100% - 30px);
        }

        .card:nth-of-type(3n+3) .card__expander {
            margin-left: calc(-200% - 60px);
        }

        .card:nth-of-type(3n+4) {
            clear: left;
        }

        .card__expander {
            width: calc(300% + 60px);
        }
    }

    @media screen and (min-width: 768px) and (max-width: 991px) {

        .card:nth-of-type(2n+2) .card__expander {
            margin-left: calc(-100% - 30px);
        }

        .card:nth-of-type(2n+3) {
            clear: left;
        }

        .card__expander {
            width: calc(200% + 30px);
        }
    }

    /*End Card Grid*/

</style>
<main>
    <div class="wrapper">

        <div class="header">
            <h1 class="header__title">Xidmətlərimiz</h1>
            <!--   <h2 class="header__subtitle">with Flexbox</h2> -->
        </div>

        <div class="cards">

            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>Torpaq işləri</span>
                    <i> <img src="./images/lorry.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihə üzrə torpaqda qazıntı işlərinin aparılması, qazılmış torpağın ərazidən çıxarılmasını,
                    çıxarılmış torpağın əvəzinə təyin olunmuş süxurların və torpaq qatının verilməsini, bundan əlavə
                    torpaq möhkəmləndirmə işlərini həyata keçiririk.

                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>Döşəmə işləri</span>
                    <i><img src="./images/doseme.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihəyə uyğun olaraq Beton qatının verilməsi, Laqalar atılaraq dikt və taxta döşəmələrin qurulması,
                    dikt üzərindən parket və laminat vurulması işlərini edirik. Həmçinin zövqə uyğun olaraq Metlax və
                    keromoqranit işləri və Döşəməyə Mərmərin vurulmasını icra edirik. Eyni zamanda isti döşəmə işlərini
                    də quraşdıra bilirik
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>Söküntü <br></span>
                    <i><img src="./images/sokuntu.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihə üzrə verilmiş tikilinin ətraf mühit və sakinlərin təhlükəsizliyini düşünərək söküntü işlərini
                    həyata keçiririk. Eyni zamanda şirkətimizə məxsus ağır texnikaların ( ekskavator,kran, buldozer və
                    s.) cəlb olunması ilə işləri daha sürətli və peşəkar yerinə yetiririk. Bütün işləri icra edərkən
                    SƏTƏM qaydalarına riayət edirik.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>Tavan işləri </span>
                    <i><img src="./images/beton.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihəyə uyğun olaraq Alçipan, asma tavan, dartma tavan, şpavlyovka və boya işlərini xüsusi
                    texnologiya ilə quraşdırılır.

                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>LANDŞAFT İŞLƏRİ </span>
                    <i><img src="./images/horgu.svg" style="width: 50px; "></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihəyə uyğun olaraq mövcüd landşaftı nəzərə alıb, ərazidə abadlıq və yaşıllaşdırma işlərinin
                    aparılmasını həyata keçiririk.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>Dəmir beton işləri <br> </span>
                    <i><img src="./images/beton.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihəyə uyğun qəlibin hazırlanması, armatur karkasların toxunması və betonun tökülməsi keyfiyyət
                    tələb etdiyi kimi, müvafiq işləri həyata keçirən əməkdaşlarımız yüksək keyfiyyətli material və
                    tikinti texnologiyalarının tətbiqini də uyğun göstəricilərlə həyata keçirirlər.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>Mobilizasiya və sahə işləri <br></span>
                    <i><img src="./images/services.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihə üzrə tikinti aparılacaq sahədə hazırlıq işləri görülməsi ( ərazi təmizləndirilməsi), ərazinin
                    hasarlanması, ətraf mühitin təhlükəsisliyinin qorunması üçün tikinti xəbərdar lövhələrin vurulması,
                    işçi heyyəti üçün sahədə əlverişli şəraitin yaradılması, onların rahat və təhlükəsiz işləməsi üçün
                    xüsusi konteynerlərin quraşdırılması işlərini həyata keçiririk.

                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>Fasad və çöl işləri <br></span>
                    <i><img src="./images/fasad.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihəyə uyğun olaraq Fasadın suvaq və boya işlərini iskələ və alpinistlərin köməyi ilə icra edə
                    bilirik. Bundan əlavə zövqə uyğun olaraq müxtəlif bəzək daşları və aqlaylardan fasad üzlənmə
                    işlərini icra edirik.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>QAPI VƏ PƏNCƏRƏ QURAŞDIRILMASI</span>
                    <i><img src="./images/qapi.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihəyə uyğun olaraq Pvc və metal konstruksiyalı qapı-pəncərələrin hazırlanması və quraşdırılması.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>ELEKTRİK TƏCHİZATI <br></span>
                    <i><img src="./images/elektrik.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihəyə uyğun olaraq Elektrik sayğaclarının qurulması, təchizatı üçün texniki şərtin hazırlanması,
                    tranformator sisteminin qurulması və binanın elektrik cərəyanı ilə təmin olunması və İdarəetmə
                    qovşağının quraşdırılmasını həyata keçiririk.<br>

                    1) Elektrik naqillərinin çəkilməsi<br>
                    2) Transformatorların quraşdırılması<br>
                    3) Sayğacların quraşdırılması<br>
                    4) Paylayıcıların quraşdırılması

                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>HƏR NÖV TƏMİR İŞLƏRİ <br></span>
                    <i><img src="./images/temir.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Hər növ təmir işlərini şirkətimizin təcrübəli və peşəkar ustaları tərəfindən həyata keçirilir.

                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>İZOLASİYA İŞLƏRİ / HOVUZ İŞLƏRİ </span>
                    <i><img src="./images/izolyasiya.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihəyə uyğun olaraq hovuzun divar və döşəməsinin izolyasiyaya qədər hazırlanması , Primer məhlulu
                    ilə divarların yuyulması , 3 qat fərqli izo materialların divara çəkilməsi, mozaikanın vurulması və
                    doldurulması işlərini icra edirik.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>PANDUSLARIN QURAŞDIRILMASI</span>
                    <i><img src="./images/pandus.svg" style="width: 50px; text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Yerin pandusa uyğun vəziyyətə salınması, dəmir və beton pandusların tikilməsi.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>MÜXTƏLİF AĞAC İŞLƏRİ <br></span>
                    <i><img src="./images/agac.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Şirkətimiz keyfiyyətli ağaclardan xüsusi dizayn edilmiş evlərin tikintisini həyata keçirir.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>Hörgü və divar işləri <br></span>
                    <i><img src="./images/horgu.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Hörgü işi bizim təcrübəli və peşəkar ustalar tərəfindən yüksək səviyyədə həyata keçirilir. Bütün növ
                    hörgü materiallarından məharətlə istifadə edirik.<br>

                    Layihəyə uyğun olaraq Suvaq , Rəngsazlıq işi , divarların divar kağızı ilə zövqlə üzlənməsi və boya
                    işlərini həyata keçirilir.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>YOL infrastruktur QURULMASI VƏ ASFALTLAMA İŞLƏRİ</span>
                    <i><img src="./images/horgu.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Şirkətimiz yolların əsaslı təmiri və tikintisi işlərini yüksək keyfiyyətli texnologiyalar ilə həyata
                    keçirir. Ustalarımız yol tikintisi üzrə böyük təcrübəyə sahibdir. Yollarınızı bizə etibar edə
                    bilərsiniz.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>MEXANİKİ VƏ HİDROTEXNİKİ QURĞULARIN QURAŞDIRILMASI</span>
                    <i><img src="./images/mexaniki.svg" style="width: 50px; text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihəyə uyğun olaraq bina və qurğuların havalandırma sistemi, isitmə və soyutma xətlərinin
                    quraşdırılması, su-kanalizasiya xətlərinin çəkilməsi və ümumi xətlərə qoşulmasını, nasos
                    stansiyalarının, su anbarının tikintisi və quraşdırılması işləri peşəkarlıqla həyata keçiririk..<br>

                    1)İstilik təchizatı<br>
                    2)Soyuqluq təchizatı<br>
                    3)Su və kanalizasiya təchizatı<br>
                    4)Havalandırma<br>
                    5)Nasos qurğularının quraşdırılması<br>
                    6)Trech heaterlər<br>

                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>YANĞIN TƏHLÜKƏSİZLİYİ SİSTEMİNİN QURAŞDIRILMASI</span>
                    <i><img src="./images/yangin.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layihəyə uyğun olaraq bina və qurğularda yanğın təhlükəsizliyi sisteminin quraşdırılması, şitlərin
                    qoyulması və binanın ümumi su təchizat sisteminə birləşdirilməsi. Həmçinin onları idarə etmək üçün
                    mərkəsi aftomatika sisteminin quraşdırılmasını həyata keçiririk.
                </div>
            </div>


        </div>

</main>


</div>
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