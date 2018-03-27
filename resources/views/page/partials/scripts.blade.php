<!-- SCRIPTS -->
<script src="{{asset('js/app.min.js')}}"></script>
<script src="//platform-api.sharethis.com/js/sharethis.js#property=5ab0a440b338830013654f80&product=sticky-share-buttons"></script>
<script>
	// FORMULARIO
	$(function() {

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$('#enviar').click(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "{{ action('SubscriberController@subscribe') }}",
				data: $('#formulario').serialize(),
				success: function(data){
					$('#modal-form').modal('hide');
				},
				error: function(data){
					return 'error:' + console.log(data);
				}
			});
		});

		$('#contact-button').click(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "{{ action('MessageController@message') }}",
				data: $('#contact-form').serialize(),
				success: function(data){
					console.log(data);
				},
				error: function(data){
					return 'error:' + console.log(data);
				}
			});
		});
	});  
</script>
</body>
</html>