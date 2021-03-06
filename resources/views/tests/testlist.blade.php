@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Practicing Tests') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}


                   <!-- start here -->

                   
                  <table class="table table-striped projects">
                      <thead>
                          <tr>
                              <th style="width: 1%">
                                 
                              </th>
                              <th style="width: 20%">
                                  Test Name
                              </th>
                              <th style="width: 20%; text-align: right;">
                                Actions
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($test as $linha)
                          <tr>
                              <td>
                                  #
                              </td>
                              <td>
                                  <a>
                                      {{ $linha->name }}
                                  </a>
                                  <br/>
                                  <small>
                                      
                                  </small>
                              </td>
                              <td class="project-actions text-right">
                                <div class="btn-group" role="group">
                                  <a class="btn btn-primary btn-sm" href="{{ route('tests.testquestion' , $linha->id_test) }}">
                                      <i class="fas fa-eye" title="View test">
                                      </i>
                                  </a>
                                  <form action="{{ route('tests.destroy', $linha->id_test) }}" method="POST" id="deletetest" >
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-danger btn-sm"  style="color: white;" onclick="confirmation();" id="" >
                                        <i class="fas fa-trash" title="Delete test"  ></i>
                                    </a>
                                  </form>
                                 
                              </td>
                          </tr>
                         @endforeach
                      </tbody>
                  </table>
                



                   <!-- end here -->

                </div>
                <!-- card-body -->
                <nav class="pagination" style="padding-left: 20px;">
                {{ $test->links() }}
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




 function confirmation() {
  
    var c = confirm("Do you really want to delete this test?");

    if (c == true)
    {
      
       document.getElementById('deletetest').submit();
      
    } else{

      return false
      return 0;
    }

  }

</script>

@endsection
