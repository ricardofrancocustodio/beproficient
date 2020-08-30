@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}


                    <h1>Practicing Test (button to start test)</h1>


                        <div id="quizmain">
                            <div id="quizcontainer">
                                <br>
                                <h4 style="text-align: right;">Question 1 of 25:</h4>
                                <p class="list-group-item list-group-item-action active" id="qtext">I would like to hear from you <b>where are you from and tell me if you work or study.</b></p>
                                    <div style="position:relative;width:100%;">
                                        <div id="altcontainer">
                                            <label class='radiocontainer' id='label2'> 
                                                Listen: &nbsp;&nbsp;
                                                <button class="fas fa-volume-up" id="play" name="play" onclick="play();">
                                                </button>
                                            </label>
                                        </div>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" style="text-align: center;">
                                                    <i style="font-size: 7em;" class="fas fa-microphone"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <button id=record>Start</button>
                                            <button id=stopRecord disabled>Stop</button>
                                            <audio id=recordedAudio></audio>
                                        </div>
                                        <div class="col-md-3">
                                            
                                            <div class="col-md-12" id="timer" style="text-align: right;"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    $('button[name=play]').one('click', function() {
     $(this).attr('disabled','disabled');
  
});
   
    function play() {
        var audio = new Audio('/dist/mp3/1question.mp3');
        audio.play();

        var timer2 = "0:40";
        var interval = setInterval(function() {

        var timer = timer2.split(':');
        
        //by parsing integer, I avoid all extra string processing
        var minutes = parseInt(timer[0], 10);
        var seconds = parseInt(timer[1], 10);
      
        --seconds;
        
        minutes = (seconds < 0) ? --minutes : minutes;
        seconds = (seconds < 0) ? 59 : seconds;
        seconds = (seconds < 10) ? '0' + seconds : seconds;
  
        //minutes = (minutes < 10) ?  minutes : minutes;
  
        $('#timer').html(minutes + ':' + seconds);
        
            if (minutes < 0) clearInterval(interval);
            //check if both minutes and seconds are 0
  
            if ((seconds <= 0) && (minutes <= 0)) clearInterval(interval);
                timer2 = minutes + ':' + seconds;
        }, 1000);




}
 
    $(document).ready(function(){
        $("#play").click(function(){

            setTimeout(alertFunc, 41000);

        });

        function alertFunc(){
           // window.location.href = "";
        }
    });

    ////////////////////////////////////
    navigator.mediaDevices.getUserMedia({audio:true})
      .then(stream => {handlerFunction(stream)})


            function handlerFunction(stream) {
            rec = new MediaRecorder(stream);
            rec.ondataavailable = e => {
              audioChunks.push(e.data);
              if (rec.state == "inactive"){
                let blob = new Blob(audioChunks,{type:'audio/ogg'});
                recordedAudio.src = URL.createObjectURL(blob);
                recordedAudio.controls=true;
                recordedAudio.autoplay=true;
                sendData(blob)
              }
            }
          }
                function sendData(data) {}

       /* record.onclick = e => {
          console.log('I was clicked')
          record.disabled = true;
          record.style.backgroundColor = "blue"
          stopRecord.disabled=false;
          audioChunks = [];
          rec.start();
        }*/

        setTimeout(event => {
            record.disabled = true;
            //record.style.backgroundColor = "blue"
            stopRecord.disabled=false;
            audioChunks = [];
            rec.start();

        },9000);


        /*stopRecord.onclick = e => {
          console.log("I was clicked")
          record.disabled = false;
          stop.disabled=true;
          //record.style.backgroundColor = "red"
          rec.stop();
        }
*/
        setTimeout(event => {
            record.disabled = false;
            stop.disabled=true;
            //record.style.backgroundColor = "red"
            rec.stop();
  
        }, 39000);

    </script>
@endsection
