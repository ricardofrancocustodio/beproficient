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


                        <div id="quizmain">
                            <!-- <form action="{{ action('TestController@store') }}" method="POST" id="question1"> -->
                            <form action="{{ action('TestController@savequestions') }}" method="POST" id="question1">
                                @csrf
                               
                                <div id="quizcontainer">
                                    <br>
                                    <h4 style="text-align: right;">Questionn 1 of 25:</h4><!-- BUSCAR NO BANCO A QTD E DEPOIS PEDIR PARA O USUARIO SETAR A QUANTIDADE-->
                                    
                                    <p class="list-group-item list-group-item-action active" id="qtext" style="font-weight: bold;">{{ $question->text }}</b></p>
                                   
                                        <div style="position:relative;width:100%;">
                                            <div id="altcontainer">
                                                <label class='radiocontainer' id='label2'> 
                                                  &nbsp;&nbsp;
                                                    <!-- <button class="fas fa-volume-up" id="play" name="play" onclick="playing();">
                                                    </button> -->
                                                     
                                                     	<audio controls src="{{ $question->soundquestion }}" controlsList="nodownload" id="playing" />
                                                    
                                                </label>
                                            </div>
                                        </div>
         								
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                    <span style="text-align: center;">
                                                        <img src="/assets/images/banner/recording.png" width="20%" height="100px">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <!-- <input id=recordedAudio name="recordedAudio" type="text" /> -->
                                                
                                                <input id="recordedAudio" name="recordedAudio"  type="hidden" />
                                                <input name="{{ $question1 }}" type="hidden" />
                                            </div>
                                            	
                                            <div class="col-md-3">
                                                
                                                <div class="col-md-12" id="timer" style="text-align: right;"></div>
                                            </div>
                                        </div>
                                </div>
                                
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

   var play = document.getElementById("playing");

   play.onplay = function(count) {
    
 $('button[name=play]').one('click', function() {
     $(this).attr('disabled','disabled');
  
});
	//var timeleft = 10;
	var timeleft = "{{ $question->duration }}";
	var downloadTimer = setInterval(function(){
	  if(timeleft <= 0){
	    clearInterval(downloadTimer);
	    document.getElementById("timer").innerHTML = "Finished";
	  } else {
	    document.getElementById("timer").innerHTML = timeleft + " seconds remaining";
	  }
	  timeleft -= 1;
	}, 1000);



}

   

//
 
    

    ////////////////////////////////////
    navigator.mediaDevices.getUserMedia({audio:true})
      .then(stream => {handlerFunction(stream)})


            function handlerFunction(stream) {
            rec = new MediaRecorder(stream);
            
            rec.ondataavailable = e => {
              audioChunks.push(e.data);
              if (rec.state == "inactive"){
                let blob = new Blob(audioChunks,{type:'audio/ogg'});
                const reader = new window.FileReader();
                reader.readAsDataURL(blob);

                reader.onloadend = () =>{

                    var audioended = reader.result;
                     $("#recordedAudio").attr('value', audioended);
                     document.getElementById('question1').submit();

                    //console.log(audioended);
/*
                   $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type : "POST",  //type of method
                        //url  : "{{ url('/tests') }}",  //your page
                        url: "{{ url('/store') }}",
                        data : { audioended:audioended },// passing the values
                        success: function(res){  

                           
                            // document.getElementById('question1').submit();

                            //alert(audioended);
                            //$('recordedAudio').appendChild(audioended);
                            
                            //$('#recordedAudio').html(audioended);
                           
                           // document.getElementById('question1').submit();

                        
                                }
                    });
*/
                    


                }

                /*recordedAudio.src = URL.createObjectURL(blob);
                recordedAudio.controls=true;
                recordedAudio.autoplay=true;*/
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

        $(document).ready(function(){
        $("#play").click(function(){

            setTimeout(event => {
            //record.disabled = true;
            //record.style.backgroundColor = "blue"
            //stopRecord.disabled=false;
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
            //record.disabled = false;
            stop.disabled=true;
            //record.style.backgroundColor = "red"
           
            //var audio = new Audio('/dist/mp3/ty.mp3');
            //audio.play();
            rec.stop();
  
        }, 41000);
        // }, '9000');



        

    });

      
    });


        
    </script>
@endsection

