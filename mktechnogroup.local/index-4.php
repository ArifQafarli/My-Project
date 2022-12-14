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
        content: "???";
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
            <h1 class="header__title">Xidm??tl??rimiz</h1>
            <!--   <h2 class="header__subtitle">with Flexbox</h2> -->
        </div>

        <div class="cards">

            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>Torpaq i??l??ri</span>
                    <i> <img src="./images/lorry.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih?? ??zr?? torpaqda qaz??nt?? i??l??rinin apar??lmas??, qaz??lm???? torpa????n ??razid??n ????xar??lmas??n??,
                    ????xar??lm???? torpa????n ??v??zin?? t??yin olunmu?? s??xurlar??n v?? torpaq qat??n??n verilm??sini, bundan ??lav??
                    torpaq m??hk??ml??ndirm?? i??l??rini h??yata ke??iririk.

                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>D??????m?? i??l??ri</span>
                    <i><img src="./images/doseme.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih??y?? uy??un olaraq Beton qat??n??n verilm??si, Laqalar at??laraq dikt v?? taxta d??????m??l??rin qurulmas??,
                    dikt ??z??rind??n parket v?? laminat vurulmas?? i??l??rini edirik. H??m??inin z??vq?? uy??un olaraq Metlax v??
                    keromoqranit i??l??ri v?? D??????m??y?? M??rm??rin vurulmas??n?? icra edirik. Eyni zamanda isti d??????m?? i??l??rini
                    d?? qura??d??ra bilirik
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>S??k??nt?? <br></span>
                    <i><img src="./images/sokuntu.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih?? ??zr?? verilmi?? tikilinin ??traf m??hit v?? sakinl??rin t??hl??k??sizliyini d??????n??r??k s??k??nt?? i??l??rini
                    h??yata ke??iririk. Eyni zamanda ??irk??timiz?? m??xsus a????r texnikalar??n ( ekskavator,kran, buldozer v??
                    s.) c??lb olunmas?? il?? i??l??ri daha s??r??tli v?? pe????kar yerin?? yetiririk. B??t??n i??l??ri icra ed??rk??n
                    S??T??M qaydalar??na riay??t edirik.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>Tavan i??l??ri </span>
                    <i><img src="./images/beton.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih??y?? uy??un olaraq Al??ipan, asma tavan, dartma tavan, ??pavlyovka v?? boya i??l??rini x??susi
                    texnologiya il?? qura??d??r??l??r.

                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>LAND??AFT ????L??R?? </span>
                    <i><img src="./images/horgu.svg" style="width: 50px; "></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih??y?? uy??un olaraq m??vc??d land??aft?? n??z??r?? al??b, ??razid?? abadl??q v?? ya????lla??d??rma i??l??rinin
                    apar??lmas??n?? h??yata ke??iririk.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>D??mir beton i??l??ri <br> </span>
                    <i><img src="./images/beton.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih??y?? uy??un q??libin haz??rlanmas??, armatur karkaslar??n toxunmas?? v?? betonun t??k??lm??si keyfiyy??t
                    t??l??b etdiyi kimi, m??vafiq i??l??ri h??yata ke??ir??n ??m??kda??lar??m??z y??ks??k keyfiyy??tli material v??
                    tikinti texnologiyalar??n??n t??tbiqini d?? uy??un g??st??ricil??rl?? h??yata ke??irirl??r.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>Mobilizasiya v?? sah?? i??l??ri <br></span>
                    <i><img src="./images/services.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih?? ??zr?? tikinti apar??lacaq sah??d?? haz??rl??q i??l??ri g??r??lm??si ( ??razi t??mizl??ndirilm??si), ??razinin
                    hasarlanmas??, ??traf m??hitin t??hl??k??sisliyinin qorunmas?? ??????n tikinti x??b??rdar l??vh??l??rin vurulmas??,
                    i????i heyy??ti ??????n sah??d?? ??lveri??li ????raitin yarad??lmas??, onlar??n rahat v?? t??hl??k??siz i??l??m??si ??????n
                    x??susi konteynerl??rin qura??d??r??lmas?? i??l??rini h??yata ke??iririk.

                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>Fasad v?? ????l i??l??ri <br></span>
                    <i><img src="./images/fasad.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih??y?? uy??un olaraq Fasad??n suvaq v?? boya i??l??rini isk??l?? v?? alpinistl??rin k??m??yi il?? icra ed??
                    bilirik. Bundan ??lav?? z??vq?? uy??un olaraq m??xt??lif b??z??k da??lar?? v?? aqlaylardan fasad ??zl??nm??
                    i??l??rini icra edirik.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>QAPI V?? P??NC??R?? QURA??DIRILMASI</span>
                    <i><img src="./images/qapi.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih??y?? uy??un olaraq Pvc v?? metal konstruksiyal?? qap??-p??nc??r??l??rin haz??rlanmas?? v?? qura??d??r??lmas??.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>ELEKTR??K T??CH??ZATI <br></span>
                    <i><img src="./images/elektrik.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih??y?? uy??un olaraq Elektrik say??aclar??n??n qurulmas??, t??chizat?? ??????n texniki ????rtin haz??rlanmas??,
                    tranformator sisteminin qurulmas?? v?? binan??n elektrik c??r??yan?? il?? t??min olunmas?? v?? ??dar??etm??
                    qov??a????n??n qura??d??r??lmas??n?? h??yata ke??iririk.<br>

                    1) Elektrik naqill??rinin ????kilm??si<br>
                    2) Transformatorlar??n qura??d??r??lmas??<br>
                    3) Say??aclar??n qura??d??r??lmas??<br>
                    4) Paylay??c??lar??n qura??d??r??lmas??

                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>H??R N??V T??M??R ????L??R?? <br></span>
                    <i><img src="./images/temir.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    H??r n??v t??mir i??l??rini ??irk??timizin t??cr??b??li v?? pe????kar ustalar?? t??r??find??n h??yata ke??irilir.

                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>??ZOLAS??YA ????L??R?? / HOVUZ ????L??R?? </span>
                    <i><img src="./images/izolyasiya.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih??y?? uy??un olaraq hovuzun divar v?? d??????m??sinin izolyasiyaya q??d??r haz??rlanmas?? , Primer m??hlulu
                    il?? divarlar??n yuyulmas?? , 3 qat f??rqli izo materiallar??n divara ????kilm??si, mozaikan??n vurulmas?? v??
                    doldurulmas?? i??l??rini icra edirik.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>PANDUSLARIN QURA??DIRILMASI</span>
                    <i><img src="./images/pandus.svg" style="width: 50px; text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Yerin pandusa uy??un v??ziyy??t?? sal??nmas??, d??mir v?? beton panduslar??n tikilm??si.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>M??XT??L??F A??AC ????L??R?? <br></span>
                    <i><img src="./images/agac.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    ??irk??timiz keyfiyy??tli a??aclardan x??susi dizayn edilmi?? evl??rin tikintisini h??yata ke??irir.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>H??rg?? v?? divar i??l??ri <br></span>
                    <i><img src="./images/horgu.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    H??rg?? i??i bizim t??cr??b??li v?? pe????kar ustalar t??r??find??n y??ks??k s??viyy??d?? h??yata ke??irilir. B??t??n n??v
                    h??rg?? materiallar??ndan m??har??tl?? istifad?? edirik.<br>

                    Layih??y?? uy??un olaraq Suvaq , R??ngsazl??q i??i , divarlar??n divar ka????z?? il?? z??vql?? ??zl??nm??si v?? boya
                    i??l??rini h??yata ke??irilir.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>YOL infrastruktur QURULMASI V?? ASFALTLAMA ????L??R??</span>
                    <i><img src="./images/horgu.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    ??irk??timiz yollar??n ??sasl?? t??miri v?? tikintisi i??l??rini y??ks??k keyfiyy??tli texnologiyalar il?? h??yata
                    ke??irir. Ustalar??m??z yol tikintisi ??zr?? b??y??k t??cr??b??y?? sahibdir. Yollar??n??z?? biz?? etibar ed??
                    bil??rsiniz.
                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>MEXAN??K?? V?? H??DROTEXN??K?? QUR??ULARIN QURA??DIRILMASI</span>
                    <i><img src="./images/mexaniki.svg" style="width: 50px; text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih??y?? uy??un olaraq bina v?? qur??ular??n havaland??rma sistemi, isitm?? v?? soyutma x??tl??rinin
                    qura??d??r??lmas??, su-kanalizasiya x??tl??rinin ????kilm??si v?? ??mumi x??tl??r?? qo??ulmas??n??, nasos
                    stansiyalar??n??n, su anbar??n??n tikintisi v?? qura??d??r??lmas?? i??l??ri pe????karl??qla h??yata ke??iririk..<br>

                    1)??stilik t??chizat??<br>
                    2)Soyuqluq t??chizat??<br>
                    3)Su v?? kanalizasiya t??chizat??<br>
                    4)Havaland??rma<br>
                    5)Nasos qur??ular??n??n qura??d??r??lmas??<br>
                    6)Trech heaterl??r<br>

                </div>
            </div>


            <div class=" card [ is-collapsed ] ">
                <div class="card__inner [ js-expander ]">
                    <span>YAN??IN T??HL??K??S??ZL??Y?? S??STEM??N??N QURA??DIRILMASI</span>
                    <i><img src="./images/yangin.svg" style="width: 50px;  text-align: center;"></i>
                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    Layih??y?? uy??un olaraq bina v?? qur??ularda yan????n t??hl??k??sizliyi sisteminin qura??d??r??lmas??, ??itl??rin
                    qoyulmas?? v?? binan??n ??mumi su t??chizat sistemin?? birl????dirilm??si. H??m??inin onlar?? idar?? etm??k ??????n
                    m??rk??si aftomatika sisteminin qura??d??r??lmas??n?? h??yata ke??iririk.
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