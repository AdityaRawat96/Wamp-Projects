$(document).ready(function(){

  $('#name').keypress(function(key) {
        if(key.charCode == 13){
          submit1();
        }
    });

    $('#formno').keypress(function(key) {
          if(key.charCode == 13){
            submit1();
          }
      });
});

function submit1(){
  $('#formno').select();
  $('#name').select();
  $.ajax({
    type: 'POST',
    url: 'show.php',
    data: {formNo: $("#formno").val(), name: $("#name").val()},
    beforeSend: function() {

    },
    success: function(response) {
      $('#selectedItem').html(response);
    }
  });
}

function reset1(){
  $('#name').val('');
  $('#formno').val('');
}

function showResult(){
  $("input").prop('disabled', true);
  history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
}

function editResult(form){
  var pass = prompt("Please enter your password");
  if (pass != null) {
    $.ajax({
      type: 'POST',
      url: 'validatePassword.php',
      data: {formNo: form, password: pass},
      beforeSend: function() {

      },
      success: function(response) {
        if(response == 'matched'){
          $("input").prop('disabled', false);
          $('#editDiv').html('<div class="row"><div class="col-lg-6" align="center"><button type="button" class="btn btn-primary" onclick="submitResult()">Submit</button></div><div class="col-lg-6"><button type="button" class="btn btn-primary" onclick="cancelResult()">Reset</button></div></div>')
        }
        else{
          alert('Incorrect Password!')
        }
      }
    });
  }
  //$("input").prop('disabled', false);
  //$('#editDiv').html('<div class="row"><div class="col-lg-6" align="center"><button type="button" class="btn btn-primary" onclick="submitResult()">Submit</button></div><div class="col-lg-6"><button type="button" class="btn btn-primary" onclick="cancelResult()">Reset</button></div></div>')
}

function submitResult(){
  $.ajax({
    type: 'POST',
    url: 'update.php',
    data: {formNo: $('#formNo').text(),name: $('#name').val(),password: $('#password').val(),phone: $('#phone').val(),email: $('#email').val(),gender: $('#gender').val(),category: $('#category').val(),suggestion: $('#suggestion').val(),},
    beforeSend: function() {

    },
    success: function(response) {
      $("input").prop('disabled', true);
      window.location.reload();
      $('#editDiv').html('<div class="row"><div class="col-lg-12" align="center"><button type="button" class="btn btn-primary" onclick="editResult()">Edit</button></div></div>');

    }
  });
}

function cancelResult(){
    window.location.reload();
    $('#editDiv').html('<div class="row"><div class="col-lg-12" align="center"><button type="button" class="btn btn-primary" onclick="editResult()">Edit</button></div></div>');
}

function closeresult(){
  window.close();
}
