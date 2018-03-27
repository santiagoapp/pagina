<!-- BLOG -->
<section id="blog" data-stellar-background-ratio="0.5">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                         <h2>Blog</h2>
                         <span class="line-bar">...</span>
                    </div>
               </div>
               @foreach($posts as $post)
               <div class="col-md-6 col-sm-6">
                    <!-- BLOG THUMB -->
                    <div class="media blog-thumb">
                         <div class="media-object media-left">
                              <a href="{!! $post->url !!}"><img src="{{ Voyager::image( $post->thumbnail('cropped')) }}" class="img-responsive" alt=""></a>
                         </div>
                         <div class="media-body blog-info">
                              <small><i class="fa fa-clock-o"></i> {!! $post->created_at !!}</small>
                              <h3><a href="{!! $post->url !!}">{!! $post->title !!}</a></h3>
                              <p>{!! $post->excerpt !!}</p>
                              <a href="{!! $post->url !!}" class="btn section-btn">Leer artículo</a>
                         </div>
                    </div>
               </div>
               @endforeach
          </div>
     </div>
</section>