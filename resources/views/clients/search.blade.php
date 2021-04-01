@extends("layouts.app")

@section("content")
<div class="container">
<div class="row mt-4">
		<table class="table">
  <thead class="thead-dark">
    <tr>
      <th class="NameBusi" scope="col">{{ __('general.business_name') }}</th>
      <th class="CategoBusi" scope="col">{{ __('general.category') }}</th>
      <th class="SubcategoBusi" scope="col">{{ __('general.subcategory') }}</th>
      <th class="LocationBusi" scope="col">{{ __('general.location') }}</th>
    </tr>
  </thead>
  <tbody>

    @foreach($clients as $client)
    <tr>
    	<td class="NameBusi"><a href="{{ $client->website }}">{{ $client->name}}</a></td>
    	<td class="CategoBusi">{{ $client->category }}</td>
    	<td class="SubcategoBusi">{{ $client->subcategory }}</td>
    	<td class="LocationBusi">{{ $client->location}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
	</div>
</div>

@endsection
