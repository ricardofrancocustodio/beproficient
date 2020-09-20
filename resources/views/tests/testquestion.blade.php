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
                <!-- <h3 class="card-title">Fixed Header Table</h3> -->

                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    
                    <tr>
                      <th>Question</th>
                      <th>Your Answer</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($test as $key => $value)
                    <tr>
                      <td>{{$value->text}}</td>
                      <td>
                          <audio src="{{ $value->answer }}" controls  controlslist= nodownload ></audio>
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
                 <button type="button" class="btn btn-secondary" onclick="history.back(-1);">Voltar</button>



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

$('i[id=play]').one('click', function() {
     $(this).attr('disabled','disabled');
  
});

  function playing()
  {
    var audio = new Audio("{{$test2->answer}}");
    audio.play();

   

  }

  

  audio.onloadend
</script>

@endsection
