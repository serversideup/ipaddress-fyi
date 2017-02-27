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
				<a id="view-json" href="/json/{{ $selection }}">View as JSON</a>
			</div>
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
								<span class="returned-address-last-updated">{{ date('m/d/Y g:i:s A', strtotime( $returnedAddress['last_updated'] ) ) }} GMT</span>
							</div>
						</div>
						<div class="large-4 medium-3 small-12 columns">
							<div class="source-link-container">
								<img src="/img/source-link.svg"/> <a class="source" target="_blank" href="{{ $returnedAddress['source'] }}">See where this data is coming from</a>
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
