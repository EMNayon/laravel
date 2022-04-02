@if($LoginStatusKey == true)
<h1>You are loged In.</h1>

@elseif($LoginStatusKey==false)
<h1>You are not loged In</h1>

@else 
<h1>Login Status Not Found</h1>

@endif