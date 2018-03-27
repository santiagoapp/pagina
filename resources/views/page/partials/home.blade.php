<!-- HOME -->
<section id="home" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-7 col-sm-12">
                <div class="home-info">
                    <div id="typed-strings">
                        <p>!Hola!</p>
                        <p>Dale<span class="fa fa-youtube-play" style="color:#ff0000;"></span> al vídeo...</p>
                        <p>¡Te podría interesar!</p>
                    </div>
                    <span id="typed"></span>
                    <h1><span class="auto-type"></span></h1>
                    <a href="#contact" class="btn section-btn smoothScroll">Comenzar Un Proyecto</a>
                    <span>
                        LLÁMAME {!! setting('site.phone') !!}
                        <small>Estaré Atento a tu Llamada</small>
                    </span>
                </div>
            </div>

            <div class="col-md-5 col-sm-12">
                <div class="home-video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="{!! setting('site.video_intro') !!}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>