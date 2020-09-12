@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Practicing Test') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}


                    <h1>IELTS Test - B2 </h1>

                            <!-- Main row -->
                    <div class="row">
                      <!-- Left col -->
                      <div class="col-md-12">
                        <!-- MAP & BOX PANE -->
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Choose your country</h3>

                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                              </button>
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body p-0">
                            <div class="d-md-flex">
                              <div class="p-1 flex-fill" style="overflow: hidden">
                                <!-- Map will be created here -->
                                <div id="world-map-markers" style="height: 325px; overflow: hidden">
                                  <div class="map"></div>
                                </div>
                              </div>
                              <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                                <div class="description-block mb-4">
                                  <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                                  <h5 class="description-header">8390</h5>
                                  <span class="description-text">Visits</span>
                                </div>
                                <!-- /.description-block -->
                                <div class="description-block mb-4">
                                  <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                  <h5 class="description-header">30%</h5>
                                  <span class="description-text">Referrals</span>
                                </div>
                                <!-- /.description-block -->
                                <div class="description-block">
                                  <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                                  <h5 class="description-header">70%</h5>
                                  <span class="description-text">Organic</span>
                                </div>
                                <!-- /.description-block -->
                              </div><!-- /.card-pane-right -->
                            </div><!-- /.d-md-flex -->
                          </div>
                          <!-- /.card-body -->
                        </div>
                      
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>

<script>
    
    $(".d-md-flex").mapael({
    map : {
        name : "world_countries"
    }
});
</script>
@endsection
