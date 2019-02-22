var a=' ';



$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});

$(document).ready(function(){

  $('#phone').keypress(function(key) {
        if(key.charCode < 48 || key.charCode > 57) return false;
    });

  $("#eye").click(function() {
    if($('#password').attr('type')=='password'){
      $('#password').attr('type','text');
      $('#eye').removeClass('fa-eye-slash');
      $('#eye').addClass('fa-eye');
    }
    else{
      $('#password').attr('type','password');
      $('#eye').removeClass('fa-eye');
      $('#eye').addClass('fa-eye-slash');
    }
  });


  $('#checkMale').change(function () {
    if (this.checked) {
       $("#checkFemale"). prop("checked", false);
    }
  });
  $('#checkFemale').change(function () {
    if (this.checked) {
       $("#checkMale"). prop("checked", false);
    }
  });

  $('#drop a').on('click', function(){
    var s = $(this).text();
    a=a+s;
  $('#inputCategory').val(a);
  });

});

function validate()
{
  if($('#name').val()=='')
  {
    alert("Name cannot be left empty!");
    $('#name').focus();
    return false;
  }
  else if($('#password').val()=='')
  {
    alert("Password cannot be left empty!");
    $('#password').focus();
    return false;
  }
  else if(validateName($("#name").val()))
  {
    alert("name should not contain numbers!");
    $('#name').focus();
    return false;
  }
  else if($('#phone').val()=='')
  {
    alert("Phone number cannot be left empty!");
    $('#phone').focus();
    return false;
  }
  else if($('#phone').val().length != 10)
  {
    alert("Phone number should be equal to 10 digits!");
    $('#phone').focus();
    return false;
  }
  else if($('#email').val()=='')
  {
    alert("E-mail cannot be left empty!");
    $('#email').focus();
    return false;
  }
  else if( !validateEmail($("#email").val()))
  {
    alert("email format not correct!");
    $('#email').focus();
    return false;
  }
  else if(($('#checkMale').prop("checked") == false) && ($('#checkFemale').prop("checked") == false))
  {
    alert("Gender cannot be left empty!");
    return false;
  }
  else if($('#suggestion').val()=='')
  {
    alert("Suggestion cannot be left empty!");
    $('#suggestion').focus();
    return false;
  }
  else if($('#check').prop("checked") == false)
  {
    alert("Checkbox cannot be left empty!");
    $('#check').focus();
    return false;
  }
  else
  {
    if(navigator.onLine)
    {
      $.ajax({
        type: 'POST',
        url: 'process.php',
        data: { text1: val1, text2: val2 },

        beforeSend: function() {

        },
        success: function(response) {
            $('#result').html(response);
        }
      });
    }
    else
    {
      alert('no internet connection');
    }
  }
}

function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

function validateName($name) {
  var nameReg = /\d/;
  return nameReg.test( $name );
}

function reset(){
  var a= confirm('confirm reset!');
  if (a){
    clear();
  }
}

function clear()
{
  $('#name').val('');
  $('#password').val('');
  $('#phone').val('');
  $('#email').val('');
  $("#checkMale"). prop("checked", false);
  $("#checkFemale"). prop("checked", false);
  $('#suggestion').val('');
  $("#check"). prop("checked", false);
  $('#inputCategory').val('');
  a='';
}

function showPassword(){
  if($('#password').attr('type')=='password'){
    $('#password').attr('type','text');
    $('#eye').removeClass('fa-eye-slash');
    $('#eye').addClass('fa-eye');
  }
  else{
    $('#password').attr('type','password');
    $('#eye').removeClass('fa-eye');
    $('#eye').addClass('fa-eye-slash');
  }
}

function speech()
{
  annyang.abort();
  console.log('say now!');
  tempAlert();

  let lang = navigator.language || 'en-US';
  let speechRec = new p5.SpeechRec(lang, gotSpeech);

  speechRec.start();

  function gotSpeech(){

    if(speechRec.resultValue){
      s = speechRec.resultString;
      if(($( document.activeElement ).attr('id'))=='email' || ($( document.activeElement ).attr('id'))=='phone')
      {
        s = s.replace(/\s/g, '');
        s = s.toLowerCase();
        $( document.activeElement ).val(s);
      }
      else{
        $( document.activeElement ).val(s);
      }
      annyang.start();
    }
    $('#alertDiv').removeClass('speakAlert1');
    $('#alertDiv').addClass('speakAlert2');
    console.log(speechRec);
  }

}

function tempAlert()
{
  $('#alertDiv').removeClass('speakAlert2');
  $('#alertDiv').addClass('speakAlert1');
}
