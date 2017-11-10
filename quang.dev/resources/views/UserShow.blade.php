{{-- {{ dd('dd') }} --}}
	<li>{{ $user->name }}</li>
	<li>{{ $user->email }}</li>
	<li>{{ $user->mobile }}</li>
	<li><img style="width: 300px; height:300px;" src="{{ asset($user->image) }}" alt=""></li>
	<li>{{ $user->address }}</li>
