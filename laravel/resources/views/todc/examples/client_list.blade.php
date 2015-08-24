<h4>List clients</h4>
@foreach ($clients as $key=>$client)
<p>{{ $client->name }}: {{ $client->email }}</p>
@endforeach
