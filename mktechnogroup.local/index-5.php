<?php include 'partials/header.php'; ?>
    <style>
        .modal_image {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 60%;
            max-width: auto;
        }

        /* Caption of Modal Image */
        #caption-image-popup {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption-image-popup {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close-image-popup {
            position: absolute;
            top: 95px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close-image-popup:hover,
        .close-image-popup:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 80%;

            }

            .close-image-popup {
                display: none;
            }
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

    </style>
    <main>

        <!-- Section -->
        <section class="well-xl">
            <div class="header">
                <h1 class="header__title">Layihələrimiz</h1>
            </div>
            <div class="container">
                <div class="row row-no-gutter">
                    <div class="col-lg-4 col-md-6">
                        <div class="img">
                            <img src="images/layihe1.jpg" alt=""/>

                            <div class="img__caption">
                                <div class="img__caption-wrap">
                                    <h3>
                                        Layihenin adi

                                    </h3>
                                    <a href="javascript:void(0);" class="btn btn-md btn-default show_image"
                                       data-image="" data-url="./images/layihe1.jpg" data-toggle="modal_image"
                                       data-target="#myModalImage">Şəkilə baxın</a>
                                       <p>Layihe haqqinda</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="img">
                            <img src="images/layihe2.jpg" alt=""/>

                            <div class="img__caption">
                                <div class="img__caption-wrap">
                                    <h3>
                                        Layihenin adi

                                    </h3>
                                    <a href="javascript:void(0);" class="btn btn-md btn-default show_image"
                                       data-image="" data-url="./images/layihe2.jpg" data-toggle="modal_image"
                                       data-target="#myModalImage">Şəkilə baxın</a>
                                       <p>Layihe haqqinda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  <div class="col-lg-4 col-md-6">
                         <div class="img">
                             <img src="images/g3.jpg" alt=""/>

                             <div class="img__caption">
                                 <div class="img__caption-wrap">
                                     <h3>

                                     </h3>
                                     <a href="javascript:void(0);" class="btn btn-md btn-default show_image" data-image="" data-url="http://localhost/mktechnogroup.local/images/g3.jpg" data-toggle="modal_image" data-target="#myModalImage">Şəkilə baxın</a>
                                 </div>
                             </div>
                         </div>
                     </div> -->
                    <!-- <div class="col-lg-4 col-md-6 col-lg-clear col-md-release">
                        <div class="img">
                            <img src="images/g4.jpg" alt=""/>

                            <div class="img__caption">
                                <div class="img__caption-wrap">
                                    <h3>

                                    </h3>
                                     <a href="javascript:void(0);" class="btn btn-md btn-default show_image" data-image="" data-url="http://localhost/mktechnogroup.local/images/g4.jpg" data-toggle="modal_image" data-target="#myModalImage">Şəkilə baxın</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="img">
                            <img src="images/g5.jpg" alt=""/>

                            <div class="img__caption">
                                <div class="img__caption-wrap">
                                    <h3>
                                         
                                    </h3>
                                     <a href="javascript:void(0);" class="btn btn-md btn-default show_image" data-image="" data-url="http://localhost/mktechnogroup.local/images/g5.jpg" data-toggle="modal_image" data-target="#myModalImage">Şəkilə baxın</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--  <div class="col-lg-4 col-md-6">
                         <div class="img">
                             <img src="images/g6.jpg" alt=""/>

                             <div class="img__caption">
                                 <div class="img__caption-wrap">
                                     <h3>

                                     </h3>
                                      <a href="javascript:void(0);" class="btn btn-md btn-default show_image" data-image="" data-url="http://localhost/mktechnogroup.local/images/g6.jpg" data-toggle="modal_image" data-target="#myModalImage">Şəkilə baxın</a>
                                 </div>
                             </div>
                         </div>
                     </div> -->
                    <!-- <div class="col-lg-4 col-md-6 col-sm-release col-md-clear">
                        <div class="img">
                            <img src="images/g7.jpg" alt=""/>

                            <div class="img__caption">
                                <div class="img__caption-wrap">
                                    <h3>
                                         
                                    </h3>
                                     <a href="javascript:void(0);" class="btn btn-md btn-default show_image" data-image="" data-url="http://localhost/mktechnogroup.local/images/g7.jpg" data-toggle="modal_image" data-target="#myModalImage">Şəkilə baxın</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="img">
                            <img src="images/g8.jpg" alt=""/>

                            <div class="img__caption">
                                <div class="img__caption-wrap">
                                    <h3>
                                         
                                    </h3>
                                    <a href="javascript:void(0);" class="btn btn-md btn-default show_image" data-image="" data-url="http://localhost/mktechnogroup.local/images/g8.jpg" data-toggle="modal_image" data-target="#myModalImage">Şəkilə baxın</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--  <div class="col-lg-4 col-md-6">
                         <div class="img">
                             <img src="images/g9.jpg" alt=""/>

                             <div class="img__caption">
                                 <div class="img__caption-wrap">
                                     <h3>

                                     </h3>
                                     <a href="javascript:void(0);" class="btn btn-md btn-default show_image" data-image="" data-url="http://localhost/mktechnogroup.local/images/g9.jpg" data-toggle="modal_image" data-target="#myModalImage">Şəkilə baxın</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div> -->
                </div>
        </section>
        <!-- END Section -->


    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <!-- <footer class="well-sm">
        <div class="container text-sm-center text-right">
            <div class="brand">
                <a href="./">
                    <div class="brand__name">
                        project
                    </div>
                </a>
            </div>
            © <span id="copyright-year"></span> .
            <a href="index-5.html">Privacy Policy</a>
        </div>
    </footer> -->
    </div>
    <div id="myModalImage" class="modal_image">
        <span class="close-image-popup"><i class="mdi mdi-close-box" style="margin: 0"></i></span>
        <img class="modal-content" id="img01">
        <div id="caption-image-popup"></div>
    </div>
    <script type="text/javascript">
        // Get the modal
        var modal = document.getElementById("myModalImage")
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption-image-popup");
        $(document).on('click', '.show_image', function () {
            let url = $(this).data('url');
            let imagename = $(this).data('image');
            modal.style.display = "block";
            modalImg.src = url;
            captionText.innerHTML = imagename;
        });

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close-image-popup")[0];
        var spanmodal = document.getElementById("myModalImage");

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
        spanmodal.onclick = function () {
            modal.style.display = "none";
        }
    </script>

<?php include 'partials/footer.php'; ?>