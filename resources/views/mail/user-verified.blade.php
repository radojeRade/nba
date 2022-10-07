<p>Hello, {{$user->name}}</p>

<p>You are now clear for login follow this link<a href="{{url('register/'. $user->id)}}">Go for login</a></p>