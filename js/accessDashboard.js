var userType = '';

function accessDashboardPermission() {
    $.ajax({
        url: '../../logic/accessDashboard.php',
        data: {},
        type: 'get',
        method: 'GET',
        beforeSend: function(request) {
            request.setRequestHeader('Authorization', 'Bearer ' + getCookie('JWT').replace(" ", "+"));
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            //Error in setting status
        },
        success: function(response) {
            if (response['Error']) {
                window.location.href = "/";
            } else {
                console.log(response);
                userType = response['Success'];
                //render sidebar content depending on userType
            }
        }
    });
};

window.onload = accessDashboardPermission();

function projectRequests() {
    $.ajax({
        url: '../api/endpoints/retrieveProjectRequests.php',
        data: { 'userType': userType },
        type: 'get',
        method: 'GET',
        beforeSend: function(request) {
            request.setRequestHeader('Authorization', 'Bearer ' + getCookie('JWT').replace(" ", "+"));
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            //Error in setting status
        },
        success: function(response) {
            if (response['Error']) {
                console.log(response);
            } else {
                console.log(response['Success']);
            }
        }
    });
}