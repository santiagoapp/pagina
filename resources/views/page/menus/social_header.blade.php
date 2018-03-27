<ul class="nav navbar-nav navbar-right">
	@foreach($items as $menu_item)
	<li><a target="_blank" href="{{ $menu_item->url }}"><i class="fa {{ $menu_item->icon_class }}"></i></a></li>
	@endforeach
	<li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Suscribete</a></li>
</ul>
