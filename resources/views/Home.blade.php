<h1>My First Blade view</h1>

{!! $NewsHeadLineKey !!}

{{$NewsHeadLineKey}}

{!! $XSSKey !!} 
{{ $XSSKey }}
<br>
@for($i=0;$i<100; $i++)
    <!-- <button>{{$i}}</button> -->
    <img src="https://scontent.fdac116-1.fna.fbcdn.net/v/t39.30808-6/274927537_1869157803289763_1086383566687088094_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=e3f864&_nc_ohc=ljedv9oYXysAX8hdnig&tn=CLESIfFqz07Qvb4s&_nc_ht=scontent.fdac116-1.fna&oh=00_AT_tK5VXRtfmhggRT104WdOB-rCpmgwiBMMT_yD1MTmsaA&oe=624D002F" style="width:50px;height:30px">
@endfor