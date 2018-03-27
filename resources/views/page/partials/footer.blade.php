<!-- FOOTER -->
<footer data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="footer-thumb footer-info"> 
                         <h2>¿Quién Soy?</h2>
                         {!! setting('site.who') !!}
                    </div>
               </div>

               <div class="col-md-3 col-sm-4"> 
                    <div class="footer-thumb"> 
                         <h2>SantiagoAPP</h2>
                         <ul class="footer-link">
                              <li><a href="#about">Acerca de</a></li>
                              <li><a href="#">Leer Blog</a></li>
                              <li><a href="#">Ver Proyectos</a></li>
                         </ul>
                    </div>
               </div>

               <div class="col-md-3 col-sm-4"> 
                    <div class="footer-thumb"> 
                         <h2>Mis WEBs</h2>
                         <ul class="footer-link">
                              <li><a href="https://www.modulares-multimueble.com">Modulares Multimueble</a></li>
                              <li><a href="https://www.carismas.com">Carismas</a></li>
                         </ul>
                    </div>
               </div>


               <div class="col-md-12 col-sm-12">
                    <div class="footer-bottom">
                         <div class="col-md-6 col-sm-5">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2018 SantiagoAPP</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-7">
                              <div class="phone-contact"> 
                                   <p>Llámame <span>{!! setting('site.phone') !!}</span></p>
                              </div>
                              {{menu('RedesSociales','page.menus.social_footer')}}
                         </div>
                    </div>
               </div>
               
          </div>
     </div>
</footer>