//When the register form is clicked, an ajax request is made to register the business
$('#registerBusForm').submit(function(e) {
    e.preventDefault();
    //Pull the data from the form
    var data = {
        'busName': $('#registerBusForm input[name=busName]').val(),
        'busIndustry': $('#registerBusForm option:selected').val(),
        'busBio': $('#registerBusForm textarea[name=busBio]').val(),
        'username': $('#registerBusForm input[name=username]').val(),
        'firstName': $('#registerBusForm input[name=firstName]').val(),
        'lastName': $('#registerBusForm input[name=lastName]').val(),
        'password': $('#registerBusForm input[name=password]').val(),
        'email': $('#registerBusForm input[name=email]').val(),
        'phone': $('#registerBusForm input[name=phone]').val()
    };

    //Send ajax request to register business via the rest api endpoint
    $.ajax({
        url: "/api/business/register/",
        data: JSON.stringify(data),
        type: 'post',
        method: 'POST',
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            //Error in setting status
        },
        success: function(response) {
            if (response['Success']) {
                //On success, hide form and display success section
                $('#registerContent').hide();
                $('#successfulReg').show();
            } else {
                //On error, display success alert
                errorDisplay(response['Error']);
            }
        }
    });
});

//When the register form is clicked, an ajax request is made to register the developer
$('#registerDevForm').submit(function(e) {
    e.preventDefault();

    //Select the languages selected and join together separated by a comma
    var languagesSelected = '';
    $.each($('.languages option:selected'), function() {
        languagesSelected = languagesSelected + ',' + $(this).val();
    })

    //Pull the data from the form
    var data = {
        'username': $('#registerDevForm input[name=username]').val(),
        'firstName': $('#registerDevForm input[name=firstName]').val(),
        'lastName': $('#registerDevForm input[name=lastName]').val(),
        'dob': $('#registerDevForm input[name=dob]').val(),
        'languages': languagesSelected.substring(1, languagesSelected.length),
        'email': $('#registerDevForm input[name=email]').val(),
        'password': $('#registerDevForm input[name=password]').val(),
        'devBio': $('#registerDevForm textarea[name=devBio]').val(),
        'phone': $('#registerDevForm input[name=phone]').val()
    };

    //Make an ajax request to the rest api endpoint to register the developer
    $.ajax({
        url: "/api/developer/register/",
        data: JSON.stringify(data),
        type: 'post',
        method: 'POST',
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            //Error in setting status
        },
        success: function(response) {
            if (response['Success']) {
                //On success, hide form and display success section
                $('#registerContent').hide();
                $('#successfulReg').show();
            } else {
                //On error, display success alert
                errorDisplay(response['Error']);
            }
        }
    });
});

//Updates the number of characters left on the developer bio textarea
var devMaxText = 500;
$('#msgCount').html(devMaxText + ' remaining');
$('#devBio').keyup(function() {
    var currentTextLen = $('#devBio').val().length;
    var remainingText = devMaxText - currentTextLen;
    $('#msgCount').html(remainingText + ' remaining');
});

//Updates the number of characters left on the business bio textarea
var busMaxText = 500;
$('#busBioCount').html(devMaxText + ' remaining');
$('#busBio').keyup(function() {
    var currentTextLen = $('#busBio').val().length;
    var remainingText = devMaxText - currentTextLen;
    $('#busBioCount').html(remainingText + ' remaining');
});