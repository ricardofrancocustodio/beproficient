@extends('layouts.master')

@section('content')
<div class="col-md-12">
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Compose New Message</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
            <i class="fas fa-envelope"></i>&nbsp;Complete the following form to send us a message. We will respond to your request, comment or question as soon as possible. Thank you.
        </div>
    </div>
    <br><br>

  <!-- /.tab-content -->
    <form action="{{ action('TestController@thankyou') }}" method="GET">
      @csrf
  
      <div class="form-group">
        <input class="form-control" name="name" placeholder="Your name:">
      </div> 
      <div class="form-group">
        <input class="form-control" name="email" placeholder="Your e-mail:">
      </div>
      <div class="form-group">
        <input class="form-control" name="subject" placeholder="Subject:">
      </div>
      <div class="form-group">
          <textarea id="compose-textarea" name="text" class="form-control" style="height: 300px" placeholder="write here... "></textarea>
      </div>
     <!--  <div class="form-group">
        <div class="btn btn-default btn-file">
          <i class="fas fa-paperclip"></i> Attachment
          <input type="file" name="attachment">
        </div>
        <p class="help-block">Max. 32MB</p>
      </div> -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <div class="float-right">
         <!--  <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button> -->
          <button type="submit" class="btn btn-success"><i class="far fa-envelope"></i> Send Message</button>
        </div>
        <a role="button" href="/home" class="btn btn-danger"><i class="fas fa-times"></i> Discard Message</a>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->
</div>
<!-- /.col -->
@endsection