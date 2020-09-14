@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="text-align: right;">{{ __('Practicing Test') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}


                    <!-- <h1>IELTS Test - B2 </h1> -->


                        <div id="quizmain">
                            <!-- <form action="{{ action('TestController@store') }}" method="POST" id="question1"> -->
                            <form action="{{ action('TestController@savequestions') }}" method="POST" id="question1">
                                @csrf
                               
                                <div id="quizcontainer">
                                    <br>
                                   <!--  <h4 style="text-align: right;">Question 1 of 25:</h4> --><!-- BUSCAR NO BANCO A QTD E DEPOIS PEDIR PARA O USUARIO SETAR A QUANTIDADE-->
                                    
                                    <p class="list-group-item list-group-item-action active" id="qtext" style="font-weight: bold; font-family: times new roman; font-size: 20px;">{{ $question->text }}</b></p>
                                   
                                        <div style="position:relative;width:100%; text-align: center; ">
                                            <div id="altcontainer">
                                                <label class='radiocontainer' id='label2'> 
                                                  &nbsp;&nbsp;
                                                  <img src="/assets/images/banner/recording.png" width="20%" height="100px" class="record_img">
                                                  <p id="timer" style="text-align: center; font-size: 50px; color: red;"></p>
                                                    <!-- <button class="fas fa-volume-up" id="play" name="play" onclick="playing();">
                                                    </button> -->
                                                     
                                                     	<audio autoplay src="{{ $question->soundquestion }}" controlsList="nodownload" id="playing"/>
                                                    
                                                </label>
                                            </div>
                                        </div>
         								
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                    <span style="text-align: center;">
                                                    	<p id="timer" style="text-align: right;"></p>
                                                        <!-- 
                                                    </span> -->
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <!-- <input id=recordedAudio name="recordedAudio" type="text" /> -->
                                                
                                                <input id="recordedAudio" name="recordedAudio"  type="hidden" />
                                                <input name="{{ $question1 }}" type="hidden" />
                                            </div>
                                            	
                                            <div class="col-md-3">
                                                
                                                
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
   
 	play.play();

 	}

	play.addEventListener('ended', function(ev){
	
	//play beep sound
	var beep = new Audio('/assets/audio/beep.mp3');
	beep.play();

	//change the image on the screen
	document.getElementsByClassName("record_img")[0].src = "/assets/images/banner/beproficient_record_button.png";
 
 	var timeleft = "{{ $question->duration }}";

 	//countdown timer activation
	var downloadTimer = setInterval(function(){
	  if(timeleft <= 0){
	    clearInterval(downloadTimer);
	    document.getElementById("timer").innerHTML = "Finished";
	  } else {
	    document.getElementById("timer").innerHTML = timeleft + " ";
	  }
	  timeleft -= 1;
	}, 1000);


	//start recording
	$(function(){

		let rec;

	 navigator
      .mediaDevices
      .getUserMedia({audio:true})
      .then(stream => { 

       rec = new MediaRecorder(stream);

       let audioChunks = [];

        rec.ondataavailable = e => {
              audioChunks.push(e.data);


         }

         rec.onstop = () => {

         	let blob = new Blob(audioChunks,{type:'audio/ogg'});
         	let reader = new window.FileReader();
         	reader.readAsDataURL(blob);

         	reader.onloadend = () =>{

         		console.log(reader.result);
         
         }//reader.onloadend

     } //rec.onstop

     rec.start();
     setInterval(function(){ rec.stop() }, 30000);
    

}, err => {

	alert('permitir o audio');
});


});

});
   
    </script>
@endsection

