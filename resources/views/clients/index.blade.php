@extends("layouts.app")

@section("content")
<style type="text/css">
	
#custom-search-input {
        margin:0;
        margin-top: 10px;
        padding: 0;
        width: 100%;
    }
 
    #custom-search-input .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
 
    .search-query:focus + button {
        z-index: 3;   
    }
</style>
    <div class="row mt-4">
		<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Business name</th>
      <th scope="col">Category</th>
      <th scope="col">Subcategories</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>

    @foreach($clients as $client)
    <tr>
    	<td>{{ $client->name}}</td>
    	<td>{{ $client->category }}</td>
    	<td>{{ $client->subcategory }}</td>
    	<td>{{ $client->location}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
	</div>
</div>

@endsection
