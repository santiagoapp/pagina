<!-- CONTACT -->
<section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>¿Quieres conectar conmigo?</h2>
                    <h3>¡Escribeme un mensaje y pronto te responderé!</h3>
                    <span class="line-bar">...</span>
                </div>
            </div>

            <div class="col-md-8 col-sm-8">

                <!-- CONTACT FORM HERE -->
                <form id="contact-form" role="form" action="#" method="post">
                    {{ csrf_field() }}
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" placeholder="Nombre Completo" id="name" name="name" required="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <input type="email" class="form-control" placeholder="Correo Electrónico" id="email" name="email" required="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <input type="tel" class="form-control" placeholder="Número de Celular" id="number" name="number" required="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="subject" name="subject">
                            <option>Asunto</option>
                            <option>Información General</option>
                            <option>Proyectos</option>
                            <option>Colaboración</option>
                            <option>Recomendación</option>
                            <option>Asesoria</option>
                            <option>Otro</option>
                        </select>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <textarea class="form-control" rows="6" placeholder="Mensaje" id="message" name="message" required=""></textarea>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <input type="button" class="form-control" name="submit" id="contact-button" value="Enviar Mensaje">
                    </div>

                </form>
            </div>

            <div class="col-md-4 col-sm-4">

            </div>
        </div>
    </div>
</section>