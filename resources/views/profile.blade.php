@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    My about page
                        @foreach ($cars as $car)
                            <p>This is user {{ $car->year . 'ID: '   }}</p>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
