<!-- MODAL -->
<section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
          <div class="modal-content modal-popup">

               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>

               <div class="modal-body">
                    <div class="container-fluid">
                         <div class="row">
                              <div class="col-md-12 col-sm-12">
                                   <div class="modal-title">
                                        <h2>Suscribete para recibir beneficios Premium</h2>
                                   </div>
                                   <!-- TAB PANES -->
                                   <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                             <form id="formulario" method="post">
                                                  {{ csrf_field() }}
                                                  <input type="text" class="form-control" name="name" placeholder="Nombre" required>
                                                  <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required>
                                                  <input type="button" class="form-control modal-button" id="enviar" name="enviar" value="Enviar">
                                             </form>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>