<select>
@foreach($DataKey as $CountryName)
    <option> {{$CountryName}} </option>
@endforeach

</select>

<select>

@forelse($FruitsKey as $FruitsName)
    <option>{{$FruitsName}}</option>
@empty 
    <option> No Fruits </option>

@endforelse


</select>

@forelse ($FruitsKey as $FruitsName)
    <li>{{$FruitsName}}</li>
@empty
    <li>No Fruits</li>

@endforelse