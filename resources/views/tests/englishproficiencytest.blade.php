@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Choose your Speaking Test') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}


                   <!-- start here -->

                    <div class="row">
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">
                              <img src="/assets/images/banner/bepoficient_usaflag.gif" />
                              TOEFL IBT® Preparation
                            </h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <blockquote class="quote-info">
                              <p>Accepted and preferred by universities worldwide, the TOEFL® test is a high-quality, high-standard test that assures admissions officers of your readiness for the classroom and beyond. TOEFL is one of the two major English-language tests in the world.</p>
                             <!--  <small>Someone famous in <cite title="Source Title">Source Title</cite></small> -->
                            </blockquote>
                            <form action="/instructions" method="PATCH">
                                @csrf
                               <input type="hidden" name="id_testtype" value="1">
                                <button class="btn btn-info" type="submit" style="width: 100%;">
                                    Start Test
                                </a>
                            </form>
                          </div>
                     
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- ./col -->
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">
                                <img src="/assets/images/banner/beproficient_ukflag.gif" />
                                IELTS® Preparation
                              
                            </h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body clearfix">
                            <blockquote class="quote-info">
                              <p>More than 10,000 organisations globally trust IELTS®, so when you take the test you can be confident that it is recognised by educational institutions, employers, governments and professional bodies around the world.</p>
                              <!-- <small>Someone famous in <cite title="Source Title">Source Title</cite></small> -->
                            </blockquote>
                            <form action="/instructions" method="PATCH">
                                @csrf
                                <input type="hidden" name="id_testtype" value="2">
                                <button class="btn btn-info" type="submit" style="width: 100%;">
                                    Start Test
                                </a>
                            </form>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- ./col -->
                    </div>
                    <!-- /.row -->
                   


                   <!-- end here -->

                </div>
                <!-- card-body -->
            </div>
            <!-- card-->
        </div>
        <!-- col-md-12 -->
    </div>
    <!-- row jsutify-content-center -->
</div>
<!-- container -->


@endsection
