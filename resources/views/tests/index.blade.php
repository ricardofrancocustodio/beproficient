@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="text-align: right;">The next question will load automatically.</div>

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
                                
                                    <h4 style="text-align: left;">Question:  <span id="count" name="count" class="count">{{ $count}}</span></h4> <!-- BUSCAR NO BANCO A QTD E DEPOIS PEDIR PARA O USUARIO SETAR A QUANTIDADE-->
                                    <br>
                                    <ol><p class="" id="qtext" style="font-weight: bold; font-size: 20px; color: black;">{{ $question['text'] }}</b></p></ol>
                                   
                                        <div style="position:relative;width:100%; text-align: center; ">
                                            <div id="altcontainer">
                                                <label class='radiocontainer' id='label2'> 
                                                  &nbsp;&nbsp;
                                                  <p  class="record_img"></p>
                                                  <!-- <img src="/assets/images/banner/recording.png" width="20%" height="100px" class="record_img"> -->
                                                  <p id="timer" style="text-align: center; font-size: 50px; color: gray;"></p>
                                                    <!-- <button class="fas fa-volume-up" id="play" name="play" onclick="playing();">
                                                    </button> -->
                                                     
                                                     	<audio autoplay src="{{ $question['soundquestion'] }}" controlsList="nodownload" id="playing"/>
                                                    
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
                                                <input id="recordedAudio" name="recordedAudio" type="hidden" />
                                                <input id="id_question" name="id_question"  type="hidden" value="{{ $question['id_question'] }}" />
                                                <input type="hidden" name="type" value="{{ $question['accent'] }}">
                                                <input name="{{ $question1 }}" type="hidden" />
                                            </div>
                                            	
                                            <div class="col-md-3">
                                              <button type="button" class="btn btn-danger btn-lg" id="" onclick="confirmation();">Stop Test</button>
                                                
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
	function confirmation() {

  	 var c = confirm("Do you really want to stop this test?");

    if (c == true)
    {
      
       window.location = "/testlist";
      
    } else{

      return false
      return 0;
    }

  }

   var play = document.getElementById("playing");

   play.onplay = function(count) {
   
 	play.play();

    document.getElementById('timer').innerHTML = "Listen...";

 	}

	play.addEventListener('ended', function(ev){
	
	//play beep sound
	var beep = new Audio('/assets/audio/beep.mp3');
	beep.play();

	//change the image on the screen
    //document.getElementById('timer').innerHTML = "Recording...";
	document.getElementsByClassName("record_img")[0].src = "/assets/images/banner/recording.png";
   // document.getElementById("record_img") = "REC";
 
 	var timeleft = 5;


 	//countdown timer activation
	var downloadTimer = setInterval(function(){
	  if(timeleft <= 0){
	    clearInterval(downloadTimer);
	    document.getElementById("timer").innerHTML = "Finished";
	  } else {
	    document.getElementById("timer").innerHTML = "Recording...  " + timeleft;
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

         		//console.log(reader.result);
         		//$('#recordedAudio').append(reader.result);

         		document.getElementById('recordedAudio').setAttribute("value", reader.result);

         		setInterval(function(){ document.getElementById('question1').submit(); }, 6000); //1 segundo acima do total

         }//reader.onloadend

     } //rec.onstop

     rec.start()
     setInterval(function(){ rec.stop() }, 6000);
    

}, err => {

	alert('permitir o audio');
});


});

});
   
    </script>
@endsection

