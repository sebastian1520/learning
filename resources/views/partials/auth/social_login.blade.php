<div class="col-md-4">
	<div class="card">
		<div class="card-header">{{ __("Socialite")}}</div>
		<div class="card-body">
			<a class="btn btn-github btn-lg btn-block"
			 href="{{ route('social_auth', ['driver' => 'github']) }}">
			 	{{ __("github") }} <i class="fa fa-github"></i>
			 </a>
			 <a class="btn btn-facebook btn-lg btn-block"
			 href="{{ route('social_auth', ['driver' => 'facebook']) }}">
			 	{{ __("facebook") }} <i class="fa fa-facebook"></i>
			 </a>
		</div>
	</div>
</div>