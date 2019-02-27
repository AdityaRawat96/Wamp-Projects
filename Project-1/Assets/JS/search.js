
function submit1(){
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

function showResult(){

  var qs = decodeURIComponent(window.location.search);
  qs=qs.slice(9,qs.length-1);
  $.ajax({
    type: 'POST',
    url: 'showResult.php',
    data: {formNo: qs},
    beforeSend: function() {

    },
    success: function(response) {
      $('#resultname').html(response);
      $("input").prop('disabled', true);
    }
  });
}

function editResult(){
  $("input").prop('disabled', false);
  $('#editDiv').html('<div class="row"><div class="col-lg-6" align="center"><button type="button" class="btn btn-primary" onclick="submitResult()">Submit</button></div><div class="col-lg-6"><button type="button" class="btn btn-primary" onclick="cancelResult()">Reset</button></div></div>')
}

function submitResult(){
  //alert($('#formNo').text());
  $.ajax({
    type: 'POST',
    url: 'update.php',
    data: {formNo: $('#formNo').text(),name: $('#name').val(),password: $('#password').val(),phone: $('#phone').val(),email: $('#email').val(),gender: $('#gender').val(),category: $('#category').val(),suggestion: $('#suggestion').val(),},
    beforeSend: function() {

    },
    success: function(response) {
      //alert(response);
      $("input").prop('disabled', true);
      showResult();
      $('#editDiv').html('<div class="row"><div class="col-lg-12" align="center"><button type="button" class="btn btn-primary" onclick="editResult()">Edit</button></div></div>');
    }
  });
}

function cancelResult(){
    showResult();
    $('#editDiv').html('<div class="row"><div class="col-lg-12" align="center"><button type="button" class="btn btn-primary" onclick="editResult()">Edit</button></div></div>');
}
