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
                                  #
                              </th>
                              <th style="width: 20%">
                                  Test Name
                              </th>
                              
                              <th>
                                  Test Progress
                              </th>
                              <th style="width: 8%" class="text-center">
                                  Status
                              </th>
                              <th style="width: 20%">
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
                                      Created 01.01.2019
                                  </small>
                              </td>
                              
                              <td class="project_progress">
                                  <div class="progress progress-sm">
                                      <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                                      </div>
                                  </div>
                                  <small>
                                      57% Complete
                                  </small>
                              </td>
                              <td class="project-state">
                                  <span class="badge badge-success">Success</span>
                              </td>
                              <td class="project-actions text-right">
                                  <a class="btn btn-primary btn-sm" href="#">
                                      <i class="fas fa-eye" title="View test">
                                      </i>
                                     
                                  </a>
                                  <a class="btn btn-info btn-sm" href="#">
                                      <i class="fas fa-pencil-alt" title="Edit test">
                                      </i>
                                      
                                  </a>
                                  <a class="btn btn-danger btn-sm" href="#">
                                      <i class="fas fa-trash" title="Delete test">
                                      </i>
                                      
                                  </a>
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


@endsection
