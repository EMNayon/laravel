
<h1>$loop->index</h1>
@foreach($DataKey as $PersonName)
{{$loop->index}} 
@endforeach
<br>

<h1>$loop->iteration</h1>
@foreach($DataKey as $PersonName)
{{$loop->iteration}}
@endforeach
<br>

<h1>$loop->remaining</h1>
@foreach($DataKey as $PersonName)
{{$loop->remaining}}
@endforeach
<br>

<h1>$loop->count</h1>
@foreach($DataKey as $PersonName)
{{$loop->count}}
@break
@endforeach
<br>

<h1>$loop->first</h1>
@foreach($DataKey as $PersonName)
@if($loop->first)
{{$PersonName}}
@endif
@endforeach
<br>

<h1>$loop->last</h1>
@foreach($DataKey as $PersonName)
@if($loop->last)
{{$PersonName}}
@endif
@endforeach
<br>
<h1>$loop->even</h1>
@foreach($DataKey as $PersonName)
@if($loop->even)
{{$PersonName}}
@endif
@endforeach
<br>

<h1>$loop->odd</h1>
@foreach($DataKey as $PersonName)
@if($loop->odd)
{{$PersonName}}
@endif
@endforeach
<br>

<h1>$loop->depth</h1>
@foreach($DataKey as $PersonName)
{{$loop->depth}}
@endforeach
<br>

<h1>$loop->parent</h1>
@foreach($DataKey as $PersonName)
{{$loop->parent}}
@endforeach