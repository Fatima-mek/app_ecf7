<?php ob_start(); ?>

<div class="container">
    <div class="row mt-5">
        <section class="col-6 ">
            <form class='col-9 offset-3'>
                <div class="card-header text-center bg-danger text-white h4"> FORMULAIRE D'INSCRIPTION</div>
                <div>
                    <label htmlFor="name" class="col-form-label">Nom</label>
                    <input type="text" id="name" name="name" class="form-control" />
                </div>
                <div>
                    <label htmlFor="last_name" class="form-check-label">Prénom </label>
                    <input type="text" id="last_name" name="last_name" class="form-control" />
                </div>
                <div>
                    <label htmlFor="telephone" class="form-check-label">Téléphone </label>
                    <input type="tel" id="telephone" name="telephone" class="form-control" />
                </div>
                <div>
                    <label htmlFor="mail" class="form-check-label">e-mail </label>
                    <input type="email" id="mail" name="mail" class="form-control" />
                </div>

                <div>
                    <label htmlFor="message" class="form-check-label">Message </label>
                    <textarea id="message" name="message" class="form-control"></textarea>
                </div>
                <div class="col-12 mt-5">
                    <button class="btn btn-dark col-12" type="submit">Valider</button>
                </div>
            </form>
        </section>


        <section class="col-6">
            <h1 class="text-center h3 text-dark m-5">CONTACTEZ-NOUS</h1>


            <h2 class="text-danger text-center fs-1"> <i>Best Perfumes</i> </h2>

            <div id="adress" class="text-center fs-5">
                <i class="fas fa-home"></i>
                <p><span>34 avenue du Président Kennedy <br />75 016 Paris</span> </p>
            </div>

            <div id="tel" class="text-center fs-5">
                <i class="fas fa-phone"></i>
                <p><span>+33 1 82 39 12 90</span></p>
            </div>

            <div id="mail" class="text-center fs-5">
                <i class="fas fa-paper-plane"></i>
                <p>
                    <a class='text-dark' style='text-decoration:none' href="mailto:e.mail@gmail.com">
                        <span> e.email94@gmail.com</span>
                    </a>
                </p>
            </div>


        </section>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.1469155435734!2d2.282280315492802!3d48.85540880887103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6700248ab96a5%3A0x49d50dde7d85ad97!2s34%20Avenue%20du%20Pr%C3%A9sident%20Kennedy%2C%2075016%20Paris!5e0!3m2!1sfr!2sfr!4v1617878816361!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" class="m-5" loading="lazy"></iframe>


</div>

<?php
$contenu = ob_get_clean();
require_once('views/public/templatePublic.php');
?>