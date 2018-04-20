@extends('layouts.app')

@section('jumbotron')
    @include('partials.Jumbotron', [
        'title' => __('Accede a cualquier curso de inmediato'),
        'icon' => "th" ])
@endsection
@section('content')
    <div class="pl-5 pr-5">
        <div class="row justify-content-center">
            @forelse ($courses as $course)
               <div class="col-md-3">
                   @include('partials.Course.card_course')
               </div> 
            @empty
                <div class="alert alert-dark">
                    {{ __('No Hay Cursos Disponibles') }}
                </div>
            @endforelse
        </div>
        <div class="row justify-content-center">
            {{ $courses->links() }}
        </div>
    </div>
@endsection
