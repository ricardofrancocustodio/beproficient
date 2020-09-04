@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Instructions') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}


                    <h1>Instructions for  Tests </h1>   <br>


                    <div class="row">
                        <form action="{{ action('TestController@store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_testtype" value="{{ $instructions }}">
                            <button class="btn btn-success" style="width: 100%;">Start Test</button>
                        </form>

                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

