<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>

               <!-- lOGO TEXT HERE -->
               <a href="{!! config('app.url') !!}" class="navbar-brand"><span><img src="{!! asset('storage/' .setting('site.logo')) !!}" style="height: 30px; width: 30px;" alt="Logo"></span> {!! setting('site.title') !!}</a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#home" class="smoothScroll">Inicio</a></li>
                    <li><a href="#about" class="smoothScroll">Sobre mi</a></li>
                    <li><a href="#blog" class="smoothScroll">Blog</a></li>
                    <li><a href="#work" class="smoothScroll">Proyectos</a></li>
                    <li><a href="#contact" class="smoothScroll">Contacto</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                    {{menu('RedesSociales','page.menus.social_header')}}
               </ul>
          </div>

     </div>
</section>