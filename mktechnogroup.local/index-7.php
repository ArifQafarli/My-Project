<?php include 'partials/header.php'; ?>
<main>
    <!-- Map -->
    <section class="map">
        <div class="container">
            <div id="map"></div>
        </div>
    </section>
    <!-- END Map -->

    <section class="well-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <h5 class="vertical vertical-variant-3">
                        ƏLAQƏ
                    </h5>
                </div>
                <div class="col-md-11 text-md-center">
                    <h1>
                        Layihənizi bizimlə müzakirə
                        <br/>
                        etmək istəyirsiniz?
                    </h1>
                    <div></div>
                    <p class="offset-7">
                        E-mail: mubarizhummatov@mktexnogroup.az<br>
                        Telefon: +99450-253-83-81
                        <br class="display-md-center"/>
                        Ünvan: Atatürk pr, Qlobal center 3-cü mərtəbə
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
                                               placeholder="Adınız:"
                                               data-constraints="@NotEmpty @LettersOnly"/>
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <label data-add-placeholder>
                                        <input type="text"
                                               name="email"
                                               placeholder="E-poçtunuz:"
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
                            <textarea name="message" placeholder="Mesajınız:"
                                      data-constraints="@NotEmpty"></textarea>
                            </label>

                            <div class="mfControls btn-group">
                                <button class="btn btn-md btn-default" type="submit">Göndərmək</button>
                            </div>

                            <div class="mfInfo"></div>
                        </fieldset>
                    </form>
                    <!-- END RD Mailform -->
                </div>
            </div>
        </div>
    </section>
</main>
</div>
<?php include 'partials/footer.php'; ?>