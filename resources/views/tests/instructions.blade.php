@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('General instructions') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}


                   <!--  <h1>Instructions for  Tests </h1>   <br> -->


                    <div class="row">
                        <form action="{{ action('TestController@store') }}" method="POST" style="width: 100%;">
                            @csrf
                            <div class="col-12">
                                <!-- Custom Tabs -->
                                <div class="card">
                                  <!--<div class="card-header d-flex p-0">
                                    <h3 class="card-title p-3">Tabs</h3>
                                  </div> /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <input type="hidden" name="id_testtype" value="{{ $instructions }}">
                                                    <i class="fas fa-microphone"></i>&nbsp;Allow access to the microphone<br><br>
                                                    <i class="far fa-clock"></i>&nbsp;There will be an active timer for each question for reminding you how much you is left.<br><br>
                                                    <i class="fas fa-tablet-alt"></i>&nbsp; All the questions are automatically displayed on screen <br><br>
                                                    <i class="fas fa-chart-line"></i>&nbsp;Follow your progress listening your answers <br><br>
                                                    <i class="far fa-pause-circle"></i>&nbsp;You cannot pause the Mock Test. If you want to stop the test, please click the STOP button.<br><br>
                                                    <i class="far fa-stop-circle"></i>&nbsp;Stop the Mock Test anytime you want<br>
                                                   
                                            </div>
                                        </div>
                                        <!-- /.tab-content -->
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- ./card -->
                            </div>
                            <button class="btn btn-danger" style="width: 100%; font-weight: bold;">Start Test</button>
                        </form>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

