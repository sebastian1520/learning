<header>
	<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				{{ env('APP_NAME') }}
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" 
			data-target="#navbarContent" arial-controls="navbarContent" arial-expanded="false">
				<span class="navbar-toggle-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav mr-auto">
					
				</ul>
		
				<ul class="navbar-nav ml-auto">
					@include('partials.Navigation.' . App\User::navigation())
					@if (auth()->check())
						@include('partials.Navigation.logged')
					@endif
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle"
						id="navbarDropdownMenuLink" data-toggle="dropdown"
						arial-haspoup="true" arial-expanded="false">
							{{ __("Selecciona un idioma") }}
						</a>
						<div class="dropdown-menu"
						 arial-labelledby="navbarDropdownMenuLink">
							<a href="{{ route('set_lenguage', ['es']) }}" 
							class="dropdown-item">
								{{ __("Español") }}
							</a>
							<a href="{{ route('set_lenguage', ['en']) }}" 
							class="dropdown-item">
								{{ __("Ingles") }}
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>