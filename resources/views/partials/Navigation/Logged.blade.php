<li class="dropdown nav-item">
	<a href="#" id="navbarDropdown" 
		class="nav-link dropdown-toggle" role="button"
		data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		{{ auth()->user()->name }} <span class="caret"></span>
	</a>

	<div class="dropdown-menu" arial-labelledby="navbarDropdown">
		<a href="{{ route('logout') }}" class="dropdown-item"
			onclick="event.preventDefault(); 
			document.getElementById('logout-form').submit();">
			{{ __('Cerrar Sesión') }}		
		</a>
	</div>
	<form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
		@csrf
	</form>
</li>