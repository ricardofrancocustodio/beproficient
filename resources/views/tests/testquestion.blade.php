@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Your Test') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}


                   <!-- start here -->

                   <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    
                    <tr>
                      <th>Question</th>
                      <th>Text</th>
                      <th>Your Answer</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($test as $key => $value)
                    <tr>
                      <td>John Doe</td>
                      <td>{{$value->text}}</td>
                      <td>
                        <a class="btn btn-app">
                          <i class="fas fa-play fa-xs" id="play" onclick="playing();"></i> Play
                        </a>
                      </td>
                    </tr>
                   @endforeach 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
                 



                   <!-- end here -->

                </div>
                <!-- card-body -->
                <nav class="pagination" style="padding-left: 20px;">
                
                </nav>
            </div>
            <!-- card-->
        </div>
        <!-- col-md-12 -->
    </div>
    <!-- row jsutify-content-center -->
</div>
<!-- container -->
<script>


  function playing()
  {
    var audio = new Audio("{{$test2->answer}}");
    audio.play();

    document.getElementById("play").className = "fas fa-pause fa-xs";
audio.addEventListener("ended", event => {
  
  document.getElementById("play").className = "fas fa-play fa-xs";
});
  }

  

  audio.onloadend
</script>

@endsection
