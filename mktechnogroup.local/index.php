<?php include('partials/header.php'); ?>


    <style type="text/css">
        /*Card Cool*/
        @import url("https://fonts.googleapis.com/css?family=Cardo:400i|Rubik:400,700&display=swap");

        :root {
            --d: 700ms;
            --e: cubic-bezier(0.19, 1, 0.22, 1);
            --font-sans: "Rubik", sans-serif;
            --font-serif: "Cardo", serif;
        }

        /*
        * {
          box-sizing: border-box;
        }*/
        /*
        html, body {
          height: 100%;
        }

        body {
          display: grid;
          place-items: center;
        }*/

        .page-content {
            display: grid;
            grid-gap: 1rem;
            padding: 1rem;
            max-width: 100%;
            margin: 0 auto;
            font-family: var(--font-sans);
            grid-template-columns: repeat(4, 1fr) !important;
        }

        @media (max-width: 1920px) {
            .page-content {
                grid-template-columns: repeat(4, 1fr) !important;
            }
        }

        @media (max-width: 1024px) {
            .page-content {
                grid-template-columns: repeat(2, 1fr) !important;
            }
        }

        @media (max-width: 500px) {
            .page-content {
                grid-template-columns: repeat(1, 1fr) !important;
            }
        }


        .card {
            position: relative;
            display: flex;
            align-items: flex-end;
            overflow: hidden;
            padding: 1rem;
            width: 100%;
            text-align: center;
            color: whitesmoke;
            background-color: whitesmoke;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);
        }

        @media (min-width: 600px) {
            .card {
                height: 400px;
            }
        }

        .card:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 110%;
            background-size: cover;
            background-position: 0 0;
            transition: transform calc(var(--d) * 1.5) var(--e);
            pointer-events: none;
        }

        .card:after {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 200%;
            pointer-events: none;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.009) 11.7%, rgba(0, 0, 0, 0.034) 22.1%, rgba(0, 0, 0, 0.072) 31.2%, rgba(0, 0, 0, 0.123) 39.4%, rgba(0, 0, 0, 0.182) 46.6%, rgba(0, 0, 0, 0.249) 53.1%, rgba(0, 0, 0, 0.32) 58.9%, rgba(0, 0, 0, 0.394) 64.3%, rgba(0, 0, 0, 0.468) 69.3%, rgba(0, 0, 0, 0.54) 74.1%, rgba(0, 0, 0, 0.607) 78.8%, rgba(0, 0, 0, 0.668) 83.6%, rgba(0, 0, 0, 0.721) 88.7%, rgba(0, 0, 0, 0.762) 94.1%, rgba(0, 0, 0, 0.79) 100%);
            transform: translateY(-50%);
            transition: transform calc(var(--d) * 2) var(--e);
        }

        .card:nth-child(1):before {
            background-image: url(./images/s4.jpg);
        }

        .card:nth-child(2):before {
            background-image: url(./images/s5.jpg);
        }

        .card:nth-child(3):before {
            background-image: url(./images/s6.jpg);
        }

        .card:nth-child(4):before {
            background-image: url(./images/s7.jpg);
        }

        .content {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            padding: 1rem;
            transition: transform var(--d) var(--e);
            z-index: 1;
        }

        .content > * + * {
            margin-top: 1rem;
        }

        .title {
            font-size: 1.3rem;
            font-weight: bold;
            line-height: 1.2;
        }

        .copy {
            font-family: var(--font-serif);
            font-size: 1.125rem;
            font-style: italic;
            line-height: 1.35;
        }

        .btn {
            cursor: pointer;
            margin-top: 1.5rem;
            padding: 0.75rem 1.5rem;
            font-size: 0.65rem;
            font-weight: bold;
            letter-spacing: 0.025rem;
            text-transform: uppercase;
            color: white;
            background-color: black;
            border: none;
        }

        .btn:hover {
            background-color: #0d0d0d;
        }

        .btn:focus {
            outline: 1px dashed yellow;
            outline-offset: 3px;
        }

        @media (hover: hover) and (min-width: 600px) {
            .card:after {
                transform: translateY(0);
            }

            .content {
                transform: translateY(calc(100% - 4.5rem));
            }

            .content > *:not(.title) {
                opacity: 0;
                transform: translateY(1rem);
                transition: transform var(--d) var(--e), opacity var(--d) var(--e);
            }

            .card:hover,
            .card:focus-within {
                align-items: center;
            }

            .card:hover:before,
            .card:focus-within:before {
                transform: translateY(-4%);
            }

            .card:hover:after,
            .card:focus-within:after {
                transform: translateY(-50%);
            }

            .card:hover .content,
            .card:focus-within .content {
                transform: translateY(0);
            }

            .card:hover .content > *:not(.title),
            .card:focus-within .content > *:not(.title) {
                opacity: 1;
                transform: translateY(0);
                transition-delay: calc(var(--d) / 8);
            }

            .card:focus-within:before, .card:focus-within:after,
            .card:focus-within .content,
            .card:focus-within .content > *:not(.title) {
                transition-duration: 0s;
            }
        }

        /*End Card Cool*/


    </style>
    <main>
        <section class="well-xl bg-image-1 line ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-offset-1 col-lg-4 col-md-5 rd-parallax-layer" data-speed="2.45" data-type="html"
                         data-fade="true">
                        <div class="border inset-1 animation-closeIn">
                            <div class="wrap">
                                <div class="big">

                                </div>
                                <h5 class="prefix-1">
                                    ??irk??timizin u??urunun v?? davaml?? b??y??m??sinin
                                    <br>
                                    s??b??bl??ri z??hm??timiz v?? t??cr??b??mizd??dir!
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div


                            class="col-xl-offset-3 col-xl-3 col-lg-4 col-lg-offset-4 col-md-offset-2 col-md-5 rd-parallax-layer"
                            data-direction="inverse" data-speed="1"
                            data-type="html" data-fade="true">
                        <address class="offset-1 text-right">
                            mubarizhummatov@mktexnogroup.az
                            <dl class="contact-info heading-3 offset-4">
                                <dt>
                                    Tel:
                                </dt>
                                <dd>
                                    <a href="callto:tel: +994502538381">
                                        +99450-253-83-81
                                    </a>
                                </dd>
                            </dl>
                        </address>
                    </div>
                </div>
            </div>
        </section>

        <section class="well-lg">
            <div class="container">
                <div class="row text-sm-center">
                    <div class="col-sm-1">
                        <h5 class="vertical ">
                            Haqq??m??zda
                        </h5>
                    </div>
                    <div class="col-md-6 col-sm-11">
                        <h1>
                            Arzulad??????n??z zirv??ni <br>
                            birlikd?? in??a ed??k!

                        </h1>
                        <p>
                            ???MK TEXNO GROUP??? MMC yarand?????? g??nd??n bu g??n??d??k ??ox sayda m??xt??lif istiqam??tli tikinti,
                            t??mir, dizayn i??l??ri h??yata ke??irmi??dir. ???? keyfiyy??ti ??irk??tin m??t??x??ssisl??ri t??r??find??n
                            daima r??hb??r tutulmas?? ??irk??tin davaml?? u??urlar??n?? t??min etmi??, onu ??lk??mizin tikinti
                            bazar??nda d??y??rli t??r??fda?? olaraq tan??tm????d??r.
                        </p>
                        <a href="index-1.php" class="btn btn-md btn-default">Daha ??trafl??</a>
                    </div>
                    <div class="wow fadeInRight col-xl-offset-1 col-xl-3 col-md-offset-1 col-md-4 col-sm-12 text-md-center">
                        <div class="border inset-2 offset-3 animation-closeIn">
                            <div class="wrap">
                                <div class="big">

                                </div>
                                <h5 class="prefix-1">
                                    U??urlu layih??l??rl?? Az??rbaycan??n
                                    <br/>
                                    qabaqc??l v?? yenilik??i ??irk??tl??rind??n biri olmaq
                                </h5>
                            </div>
                        </div>
                    </div>
                </div><br><br><br><br>
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 wow fadeInUp">
                        <div class="img-wrap position-2">
                            <img src="images/r2.jpg" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 offset-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="img-wrap position-1 line line-position-1">
                            <img src="images/r4.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-offset-2 col-md-5 offset-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-wrap position-3">
                            <img src="images/r5.jpg" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="well-lg">
            <div class="container wow fadeIn">
                <div class="row flow-offset-1">
                    <div class="col-lg-offset-1 col-md-1 col-xl-push-3 col-lg-push-4">
                        <h5 class="vertical vertical-variant-2">
                            <!--  Niy?? m??hz biz? -->
                        </h5>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-lg-pull-2">
                        <div class="border inset-2 offset-2 text-md-center animation-closeIn">
                            <div class="wrap">
                                <div class="big">
                                </div>
                                <h5 class="prefix-1">
                                    Sizin ??????n i??l??yir,
                                    <br/>
                                    sizin ??????n yarad??r??q.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!--  <div class="col-lg-6 col-xl-5 col-md-offset-1 col-lg-offset-0">
                       <h1 style="text-align: center;">
                         ??z??llikl??rimiz
                       </h1>
                       <p>
                         ?????al????m??????q ki, sakinl??rin rahatl?????? ??????n A-dan Z-y?? q??d??r h??r ??eyi d??????n??k. ????nki bizim ??????n m????t??ri m??mnuniyy??ti h??r ??eyd??n ??n??mlidir. Sizin ??????n i??l??yir, sizin ??????n yarad??r??q."
                         <br/>

                       </p>
                     </div> -->
                </div>
            </div>
        </section>
        <main class="page-content">
            <div class="card">
                <div class="content">
                    <h2 class="title">M??QS??D V?? PR??NS??PL??R</h2>
                    <p class="copy">-M??qs??dimiz son texnologiyalar?? istifad?? etm??kl??, y??ks??k keyfiyy??t?? malik, rahat v??
                        t??hl??k??siz tikilil??r yaratmaqd??r. ??irk??timizin ??sas prinsipl??rind??n biri daim yeni i?? yerl??rinin
                        a??mas??na imkan yaradan f??aliyy??t sah??l??rinin geni??l??ndirm??sidi. Yeni layih??l??rin icras?? ??????n
                        partnyorluq m??nasib??tl??rini y??ks??k qiym??tl??ndiririk v?? daim i??g??zar ??m??kda??l????a haz??r??q.</p>
                    <!--  <button class="btn">View Trips</button> -->
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2 class="title">KEYF??YY??T??N ??DAR?? ED??LM??S??</h2>
                    <p class="copy">- ????i layih?? ????r??iv??sind?? v?? tez bir zamanda yerin?? yetirm??k.<br>
                        - Daim servis xidm??tl??rini inki??af etdirm??kl?? biz?? m??raci??t ed??n m????t??ril??ri raz?? salmaq.<br>
                        - M??asir texnika v?? avadanl??qlardan istifad?? etm??k.<br>
                        - ??irk??tin inki??af strategiyas??na ??m??l ed??r??k, idar??etm?? sistemini m??hk??ml??tm??k.<br>
                        - Daha b??y??k v?? t??cr??b??li ??irk??tl??rn??n i?? birliyi quraraq, inki??afa do??ru ir??ll??m??k.</p>
                    <!-- <button class="btn">View Trips</button> -->
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2 class="title">D??Y??RL??R??M??Z</h2>
                    <p class="copy">- ??nsan resurslar?? siyas??tin?? b??y??k ??n??m ver??n ??irk??t olaraq, pe????kar kadrlara
                        etibar etm??k.<br>
                        - G??rd??y??m??z i??l??rin keyfiyy??tin?? g??r?? m????t??ril??rimiz qar????s??nda ??hd??lik da????maq.<br>
                        - ??cra etdiyimiz layih??l??r?? tam z??man??t verm??k.- ??nsan resurslar?? siyas??tin?? b??y??k ??n??m ver??n
                        ??irk??t olaraq, pe????kar kadrlara etibar etm??k.<br>
                        <br></p>
                    <!-- <button class="btn">Book Now</button> -->
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h2 class="title">S??T??M S??YAS??T??</h2>
                    <p class="copy">- S??T??M ??zr?? m??vcud qanun, qayda, t??limat v?? normativ aktlar?? r??hb??r tutaraq
                        effektiv ??m??yin m??hafiz??si v?? t??hl??k??sizliyin idar?? edilm??si sistemini i??l??yib haz??rlamaq v?? bu
                        qaydalara ciddi ??m??l etm??k.
                        - ??????i heyy??tini m??tamadi olaraq t??hl??k??sizlik qaydalar?? il?? t??limatland??rmaq.
                        - Qanunvericilik v?? ??traf m??hitin m??hafiz??si siyas??tin?? ciddi riay??t etm??k.</p>
                    <!-- <button class="btn">Book Now</button> -->
                </div>
            </div>
        </main>


        <section class="well-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-md-offset-1 col-lg-offset-3 wow fadeInLeft">
                        <h5 class="vertical vertical-variant-3"><!-- Technologies --></h5>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-9 wow fadeInRight">
                        <h1 style="text-align: center;">
                            Keyfiyy??t t??minat??m??zd??r
                        </h1>
                        <p>
                            MK TEXNO GROUP ??? ??z??n?? tikinti sektorunda m??sb??t t??r??fd??n tan??tm????, m??v??ff??qiyy??tl?? inki??af
                            ed??n tikinti ??irk??tidir. ??sas prinsipimiz ??? y??ks??k ixtisasl?? m??t??x??ssisl??ri c??lb etm??kl??, ??n
                            son texnologiyalar v?? materiallar vasit??sil?? m??asir v?? keyfiyy??tli binalar tikm??kdir.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="well-xl">
            <div class="container">
                <div class="row flow-offset-1 text-md-center">
                    <div class="col-md-1 wow fadeInLeft" data-wow-delay="0.4s">
                        <h5 class="vertical vertical-variant-3"></h5>
                    </div>
                    <div class="col-xl-4 col-md-5 wow fadeInRight">
                        <img class="offset-8" src="images/s4.jpg" alt=""/>
                    </div>
                    <div class="col-xl-4 col-md-5 line line-position-2 wow fadeInRight">
                        <h3></h3>
                        <p>
                            T??r??fda??lar??m??zla sa??lam m??nasib??t quraraq keyfiyy??tli xidm??t t??klif edirik;
                        </p>
                        <!--  <a href="#" class="btn btn-lg btn-default">learn more</a> -->
                    </div>
                </div>
                <div class="row well-lg flow-offset-1 text-md-center wow fadeIn">
                    <div class="col-xl-offset-3 col-xl-4 col-lg-offset-2 col-lg-4 col-md-6">
                        <img class="offset-8" src="images/s2.jpg" alt=""/>
                    </div>
                    <div class="col-xl-4 col-md-5 line line-position-2">
                        <h3>

                        </h3>
                        <p>
                            Uzun m??dd??t u??urlu f??aliyy??tini davam etdir??n ??irk??timiz, bu g??n?? q??d??r etibarl??l??q v??
                            d??r??stl??k prinsipl??rin?? arxalanaraq, b??y??k t??cr??b??mizi yeni texnologiyalar??n ??z??rind?? t??tbiq
                            ed??r??k, ??lk??mizin ??n g??v??nli tikinti ??irk??tl??rinin s??ras??nda yer alm????d??r.
                        </p>
                        <!-- <a href="#" class="btn btn-lg btn-default">learn more</a> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="well-lg">
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col-md-1">
                        <h5 class="vertical vertical-variant-3">
                            ??laq??
                        </h5>
                    </div>
                    <div class="col-md-11 text-md-center">
                        <h1>
                            Layih??nizi biziml?? m??zakir??
                            <br/>
                            etm??k ist??yirsiniz?
                        </h1>
                        <p class="offset-7">
                            Forumu doldur biz?? g??nd??r ??m??kda??lar??m??z
                            <br class="display-md-center"/>
                            sizinl?? ??laq?? saxlas??n...
                        </p>
                        <!-- RD Mailform -->
                        <form class='rd-mailform' method="post" action="bat/rd-mailform.php">
                            <!-- RD Mailform Type -->
                            <input type="hidden" name="form-type" value="contact"/>
                            <!-- END RD Mailform Type -->
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label data-add-placeholder>
                                            <input type="text"
                                                   name="name"
                                                   placeholder="Ad??n??z:"
                                                   data-constraints="@NotEmpty @LettersOnly"/>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label data-add-placeholder>
                                            <input type="text"
                                                   name="email"
                                                   placeholder="E-po??tunuz:"
                                                   data-constraints="@NotEmpty @Email"/>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label data-add-placeholder>
                                            <input type="text"
                                                   name="phone"
                                                   placeholder="Telefon:"
                                                   data-constraints="@Phone"/>
                                        </label>
                                    </div>
                                </div>

                                <label data-add-placeholder>
                            <textarea name="message" placeholder="Mesaj??n??z:"
                                      data-constraints="@NotEmpty"></textarea>
                                </label>

                                <div class="mfControls btn-group">
                                    <button class="btn btn-md btn-default" type="submit">G??nd??rm??k</button>
                                </div>

                                <div class="mfInfo"></div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
<?php include('partials/footer.php'); ?>