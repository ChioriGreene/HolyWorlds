@extends('wrapper')

@section('title', 'Account activation')

@section('content')
<div class="row">
	<div class="col m6 offset-m3">
		<form method="POST" action="{{ url('auth/activate') }}">
			{!! csrf_field() !!}

			<input type="hidden" name="token" value="{{ $user->activationToken() }}">

			<p>Activate the account for <strong>{{ $user->email }}</strong>?</p>

			<div class="row">
				<div class="input-field col s12 right-align">
					<button type="submit" class="waves-effect waves-light btn-large">
						Yes please
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
