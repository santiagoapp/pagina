
<ul class="social-icon">
	@foreach($items as $menu_item)
	<li><a target="_blank" href="{{ $menu_item->url }}" class="fa {{ $menu_item->icon_class }}"></a></li>
	@endforeach
</ul>