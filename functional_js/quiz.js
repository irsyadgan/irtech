var score = 0; //set score jadi 0
var total = 5; //total skor
var point = 1; //point tiap soal
var highest = total * point;

//inisialisasi
function init(){
    //jawaban benernya
    sessionStorage.setItem('a1','a');
    sessionStorage.setItem('a2','d');
    sessionStorage.setItem('a3','e');
    sessionStorage.setItem('a4','b');
    sessionStorage.setItem('a5','b');
}


$(document).ready(function(){
    //hide question
    $('.questionForm').hide();

    //show 1st question
    $('#q1').show();

    $('#q1 #submit').click(function(){
        $('.questionForm').hide();
        process('q1');
        $('#q2').fadeIn(300);
        return false;
    });

    $('#q2 #submit').click(function(){
        $('.questionForm').hide();
        process('q2');
        $('#q3').fadeIn(300);
        return false;
    });

    $('#q3 #submit').click(function(){
        $('.questionForm').hide();
        process('q3');
        $('#q4').fadeIn(300);
        return false;
    });

    $('#q4 #submit').click(function(){
        $('.questionForm').hide();
        process('q4');
        $('#q5').fadeIn(300);
        return false;
    });

    $('#q5 #submit').click(function(){
        $('.questionForm').hide();
        process('q5');
        $('#results').fadeIn(300);
        return false;
    });

});

//proses jawabannya
function process(q){
    if(q == "q1"){
        var submitted = $('input[name=q1]:checked').val();
        if(submitted == sessionStorage.a1){
            score++;
        }
    }

    if(q == "q2"){
        var submitted = $('input[name=q2]:checked').val();
        if(submitted == sessionStorage.a2){
            score++;
        }
    }

    if(q == "q3"){
        var submitted = $('input[name=q3]:checked').val();
        if(submitted == sessionStorage.a3){
            score++;
        }
    }

    if(q == "q4"){
        var submitted = $('input[name=q4]:checked').val();
        if(submitted == sessionStorage.a4){
            score++;
        }
    }

    if(q == "q5"){
        var submitted = $('input[name=q5]:checked').val();
        if(submitted == sessionStorage.a5){
            score++;
        }
        $('#results').html('<h3>Final Skor : '+score+' dari 5</h3><a href="page-video-1.html">Selesai</a>');
    }
}

//add eventlistener
window.addEventListener('load',init,false);