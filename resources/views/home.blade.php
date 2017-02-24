@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<div id="github-contribute">
				<img src="/img/github.svg"/> Contribute on GitHub
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<div id="logo">
				<img src="/img/bolt.svg"/> ipaddress.fyi <br>
				<div class="slogan">All the IP addresses that you’ll need, from one simple source</div>
			</div>
		</div>
	</div>
	<form id="select-ip-sources" name="select-ip-sources" method="POST" action="/generate-url">
		<div id="selection-container">
			<div class="row">
				<div class="large-12 medium-12 small-12 columns">
					<h2>Step 1: Select the service(s) that you would like the IP addresses from</h2>
				</div>
			</div>
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
												<span class="last-updated">Last Updated: {{ date('m/d/Y g:i:s A', strtotime( $ipAddress->last_updated ) ) }}</span>
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
				<a id="generate-url">Create My Address URL</a>
				<span class="interested">Interested in seeing how we get this information? <a href="">Validate our sources on Github.</a></span>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.service').on('click', function(){
				$(this).find("input[type='checkbox']")
	          		   .prop('checked', true);
			});

			$('#generate-url').on('click', function(){
				$('#select-ip-sources').submit();
			});
		});
	</script>
@stop