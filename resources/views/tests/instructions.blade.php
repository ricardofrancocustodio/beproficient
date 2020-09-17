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
                        <form action="{{ action('TestController@store') }}" method="POST" style="width: 100%;">
                            @csrf
                            <div class="col-md-12">
                                <input type="hidden" name="id_testtype" value="{{ $instructions }}">
                                Stop the Mock Test anytime you want<br>
                                The questions are automatically picked<br>
                                Follow your progress listening your answers <br>
                                You cannot pause the Mock Test<br>
                                Allow access to the microphone<br>

                                <button class="btn btn-success" style="width: 100%;">Start Test</button>
                                
                            </div>

                        </form>
                        
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

