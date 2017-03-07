@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<div id="logo">
				<img src="/img/bolt.svg"/> <span class="logo-ip">IP</span>address.fyi <br>
				<div class="slogan">Easily control access to the Internet’s most popular services</div>
				<div class="row">
					<div class="large-8 medium-10 small-12 large-centered medium-centered columns">
						<ul class="rrssb-buttons clearfix">
							 <li class="rrssb-facebook">
								<a href="https://www.facebook.com/sharer/sharer.php?u=http://ipaddress.fyi" class="popup">
									<span class="rrssb-icon">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg>
									</span>
									<span class="rrssb-text">facebook</span>
								</a>
							</li>
							<li class="rrssb-twitter">
								<!-- Replace href with your Meta and URL information  -->
								<a href="https://twitter.com/intent/tweet?text=http://ipaddress.fyi" class="popup">
									<span class="rrssb-icon">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"/></svg>
									</span>
									<span class="rrssb-text">twitter</span>
								</a>
							</li>
							<li class="rrssb-googleplus">
								<!-- Replace href with your meta and URL information.  -->
								<a href="https://plus.google.com/share?url=http://ipaddress.fyi" class="popup">
									<span class="rrssb-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 8.29h-1.95v2.6h-2.6v1.82h2.6v2.6H21v-2.6h2.6v-1.885H21V8.29zM7.614 10.306v2.925h3.9c-.26 1.69-1.755 2.925-3.9 2.925-2.34 0-4.29-2.016-4.29-4.354s1.885-4.353 4.29-4.353c1.104 0 2.014.326 2.794 1.105l2.08-2.08c-1.3-1.17-2.924-1.883-4.874-1.883C3.65 4.586.4 7.835.4 11.8s3.25 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z"/></svg>            </span>
									<span class="rrssb-text">google+</span>
								</a>
							</li>
							<li class="rrssb-github">
								<a href="https://github.com/521dimensions/ipaddress-fyi" target="_blank">
									<span class="rrssb-icon">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M13.97 1.57c-7.03 0-12.733 5.703-12.733 12.74 0 5.622 3.636 10.393 8.717 12.084.637.13.87-.277.87-.615 0-.302-.013-1.103-.02-2.165-3.54.77-4.29-1.707-4.29-1.707-.578-1.473-1.413-1.863-1.413-1.863-1.154-.79.09-.775.09-.775 1.276.104 1.96 1.316 1.96 1.312 1.135 1.936 2.99 1.393 3.712 1.06.116-.823.445-1.384.81-1.704-2.83-.32-5.802-1.414-5.802-6.293 0-1.39.496-2.527 1.312-3.418-.132-.322-.57-1.617.123-3.37 0 0 1.07-.343 3.508 1.305A12.22 12.22 0 0 1 14 7.732c1.082 0 2.167.156 3.198.44 2.43-1.65 3.498-1.307 3.498-1.307.695 1.754.258 3.043.13 3.37a4.968 4.968 0 0 1 1.314 3.43c0 4.893-2.978 5.97-5.814 6.286.458.388.876 1.16.876 2.358 0 1.703-.016 3.076-.016 3.482 0 .334.232.748.877.61 5.056-1.687 8.7-6.456 8.7-12.08-.055-7.058-5.75-12.757-12.792-12.75z"/></svg>
									</span>
									<span class="rrssb-text">github</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" id="step-1">
		<div class="large-12 medium-12 small-12 columns">
			<h2>Step 1: Select the service(s) that you would like to control the access for</h2>
		</div>
	</div>
	<form id="select-ip-sources" name="select-ip-sources" method="POST" action="/generate-url">
		<div id="selection-container">
			<div class="row">
				<div class="large-12 medium-12 small-12 columns">
					<div class="masonry">
						@foreach( $categories as $key => $ipAddresses )
							<div class="item">
								<h3 class="services-header">{{ $key }}</h3>
								@foreach( $ipAddresses as $ipAddress)
									<div class="service">
										<div class="service-selection">
											<input type="checkbox" name="service[]" value="{{ $ipAddress->app_name }}"/>
										</div>
										<div class="service-description">
											<img src="/img/logos/{{ $ipAddress->app_name }}.svg"/>
											<div class="service-meta">
												<span class="service-name">{{ $ipAddress->clean_name }}</span>
												<span class="last-updated">Last Updated: {{ date('m/d/Y g:i:s A', strtotime( $ipAddress->last_updated ) ) }} GMT</span>
											</div>
										</div>
										<div style="clear: both;"></div>
									</div>
								@endforeach
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		{{ csrf_field() }}
	</form>
	<div id="generate-container">
		<div class="row">
			<div class="large-8 medium-9 small-12 columns large-centered medium-centered">
				<h2>Step 2: Create your address URL</h2>
				<p>We’ll generate a URL for you so that you can always reference the latest address information. We’ll make sure the addresses stay up to date for you.</p>
				<div id="selected-apps"></div>
				<a id="generate-url" class="disabled">Show My Integration URL</a>
				<span class="interested">Interested in seeing how we get this information? <a href="https://github.com/521dimensions/ipaddress-fyi" target="_blank">Validate our sources on Github.</a></span>
			</div>
		</div>
		<div class="row">
			<div class="large-12 medium-12 small-12 columns large-centered medium-centered footer-logo">
				Creatively crafted by: <a href="http://521dimensions.com" target="_blank"><img src="/img/521logo.svg"/></a>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.service').on('click', function( e ){
				if( e.target.tagName != 'INPUT' ){
					if( $(this).find("input[type='checkbox']").is(':checked') ){
						$(this).find("input[type='checkbox']")
		          		   	   .prop('checked', false);
	          		}else{
	          			$(this).find("input[type='checkbox']")
	          		  		   .prop('checked', true);
	          		}
				}
				setClasses();
				setLogos();

				if( $('input[type="checkbox"]:checked').length > 0 ){
					$('#generate-url').removeClass('disabled');
				}else{
					$('#generate-url').addClass('disabled');
				}
			});

			$('#generate-url').on('click', function(){
				if( !$(this).hasClass('disabled') ){
					$('#select-ip-sources').submit();
				}
			});
		});

		

		function setClasses(){
			$('.service').each( function(){
				if( $(this).find("input[type='checkbox']").is(':checked') ){
					$(this).addClass('service-checked');
				}else{
					$(this).removeClass('service-checked');
				}
			});
		}

		function setLogos(){
			$('#selected-apps').html('');

			$('input[type="checkbox"]').each( function(){
				if( $(this).is(':checked') ){
					$('#selected-apps').append('<img src="/img/logos/'+$(this).val()+'.svg"/>');
				}
			});
		}
	</script>
@stop
