<div class="row mb-4">
	<div class="col-md-12">
		<div class="card" style="background-image: url('{{ 
			url('/images/jumbotron.png') }}');">
			<div class="text-white text-center d-flex align-items-center py-5 px-4 my-5">
				<div class="col-5">
					<img src="{{ $course->pathAttachment() }}" class="img-fluid">
				</div>

				<div class="col-5 text-left">
					<h2>{{ __('Curso') }}: {{ $course->name }}</h2>
					<h3>{{ __('Profesor') }}: {{ $course->teacher->user->name }}</h3>
					<h4> {{ __('Categoria') }}: {{ $course->category->name }} </h4>
					<h5> {{ __('Fecha de publicación') }}: {{ $course->created_at->format('d/m/Y') }} </h5>
					<h6>{{ __('Estudiantes inscritos') }}: {{ $course->students_count }}</h6>
					<h6>{{ __('Números de valoraciones ') }}: {{ $course->reviews_count }}</h6>
					@include('partials.Course.Rating')
				</div>
				@include('partials.Course.action_button')
			</div>
		</div>
	</div>
</div>