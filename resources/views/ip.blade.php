@extends('layouts.app')

@section('content')
	<div id="table-header">
		<div class="row">
			<div class="large-3 medium-4 small-12 columns title-container">
				<a href="/"><img src="/img/table-bolt.svg"/> <span class="table-title-ip">IP</span><span class="table-title">address.fyi</span></a>
			</div>
			<div class="large-6 medium-4 small-12 columns showing-addresses-for-container">
				<span class="showing-addresses-for">Showing Addresses For:</span>
				@foreach( $returnedAddresses as $returnedAddress )
					<img src="/img/logos/{{ $returnedAddress['app_name'] }}.svg"/>
				@endforeach
			</div>
			<div class="large-3 medium-4 small-12 columns">
				<a class="header-contribute-link" href="https://github.com/521dimensions/ipaddress-fyi" target="_blank">
					Contribute on GitHub <img src="/img/contribute-icon.svg"/>
				</a>
			</div>
		</div>
	</div>

	<div class="row" id="main-body-start">
		<div class="large-8 medium-9 small-12 large-centered medium-centered columns" id="returned-address-description">
			<h2 class="step-instruction">Step 3: Copy this link and integrate this with your application</h2>
			<p>We’ll provide the data for you in an easy JSON format. In any case where the IP addresses change for the service(s), we will update the data for you so that you don’t have to update your application.</p>
			<input type="text" value="http://ipaddress.fyi/json/{{ $selection }}" readonly id="json-link"/>

			<div id="copy-success">Copied to Clipboard</div>
			<div id="copy-failed">Failed to copy to clipboard, please manually copy the link</div>

			<div id="json-link-container">
				<a class="button" id="view-json" href="http://ipaddress.fyi/json/{{ $selection }}" target="_blank">View the JSON</a>
				<a class="button" id="copy-json" data-clipboard-text="http://ipaddress.fyi/json/{{ $selection }}">Copy JSON URL</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="large-8 medium-9 small-12 large-centered medium-centered columns">
			<h2 class="readable-instruction">See our data in human readable format</h2>
		</div>
	</div>

	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			@foreach( $returnedAddresses as $returnedAddress )
				<div class="returned-address-app">
					<div class="row">
						<div class="large-8 medium-9 small-12 columns">
							<img src="/img/logos/{{ $returnedAddress['app_name'] }}.svg"/>
							<div class="meta-container">
								<span class="returned-address-app-name">{{ $returnedAddress['clean_name'] }}</span>
								<span class="returned-address-last-updated">Last updated: {{ date('m/d/Y g:i A', strtotime( $returnedAddress['last_updated'] ) ) }} GMT</span>
							</div>
						</div>
						<div class="large-4 medium-3 small-12 columns">
							<div class="source-link-container">
								<img src="/img/source-link.svg"/> <a class="source" target="_blank" href="{{ $returnedAddress['source'] }}">See where we got this data</a>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						@foreach( $returnedAddress['ips'] as $ip )
							<div class="large-4 medium-4 small-6 columns ip-cell end">
								{{ $ip }}
							</div>
						@endforeach
					</div>
				</div>
			@endforeach
		</div>
	</div>
@stop

@section('scripts')
	<script type="text/javascript">
		var clipboard = new Clipboard('#copy-json');

		clipboard.on('success', function(e) {
		   $('#copy-success').show( function(){
		   		$(this).fadeOut(1000);
		   });
		});

		clipboard.on('error', function(e) {
		    $('#json-link').select();
		    $('#json-link').focus();
		});
	</script>
@stop
