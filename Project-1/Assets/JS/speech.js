if (annyang) {
  // Let's define a command.
  var commands = {
    'print': function() { speech(); },
    'reset': function() { clear(); },
    'submit': function() { validate(); },
    'name': function() { $('#name').focus(); },
    'password': function() { $('#password').focus(); },
    'phone number': function() { $('#phone').focus(); },
    'e-mail address': function() { $('#email').focus(); },
    'male': function() { $("#checkMale"). prop("checked", true); },
    'female': function() { $("#checkFemale"). prop("checked", true); },
    'category': function() { $('#name').click(); },
    'suggestion': function() { $('#suggestion').focus(); },
    'I agree': function() { $("#check"). prop("checked", true); },
    'show password': function() { showPassword(); },
    'hide password': function() { showPassword(); },
    'clear': function() { $( document.activeElement ).val(''); },
    'show': function() { alert($( document.activeElement ).attr('id')); },

  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening.
  annyang.start();
}
