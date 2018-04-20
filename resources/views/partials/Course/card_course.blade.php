<div class="card card-01">
	<img src="{{ $course->pathAttachment() }}" 
	alt="{{ $course->name }}" class="card-img-top"/>
	<div class="card-body">
		<span class="badge-box"><i class="fa fa-check"></i></span>
		<h4 class="card-title">{{ $course->name }}</h4>
		<hr/>
		<div class="row justify-content-center">
			@include('partials.Course.Rating')
		</div>
		<hr/>
		<span class="badge badge-danger badge-cat">
			{{ $course->category->name }}
		</span>
		<p class="card-text">
		</p>
		<a href="#" class="btn btn-course btn-block">
			 {{ __('Más Información') }} 
		</a>
	</div>
</div>