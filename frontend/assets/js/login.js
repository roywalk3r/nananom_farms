function getBackendUrl(endpoint) {
    var base = window.location.origin;
    var path = window.location.pathname;
    var match = path.match(/\/(nananom_farms)(\/|$)/);
    var basePath = match ? '/' + match[1] : '';
    return base + basePath + '/core/backend/' + endpoint;
}

$(function() {
    $('#loginForm').on('submit', function(e) {
        e.preventDefault();
        var email = $('#email').val().trim();
        var password = $('#password').val();
        var msgDiv = $('#loginMessage');
        msgDiv.text('');
        if (!email || !password) {
            showToast('Please enter both email and password.', '#c62828');
            return;
        }
        showToast('Logging in...', '#333');
        $.ajax({
            url: getBackendUrl('login.php'),
            type: 'POST',
            data: {
                email: email,
                password: password
            },
            dataType: 'json',
            success: function(data, textStatus, jqXHR) {
                var color = (data && data.success) ? '#2e7d32' : '#c62828';
                if(data && typeof data === 'object' && 'success' in data) {
                    showToast(data.message, color);
                    if(data.success) {
                        setTimeout(function() { window.location.href = 'dashboard.php'; }, 1200);
                    }
                } else {
                    showToast('Unexpected server response. Please try again.', '#c62828');
                }
            },
            error: function(jqXHR) {
                let msg = 'Login failed. Please try again.';
                let color = '#c62828';
                if(jqXHR.responseText) {
                    let lastBrace = jqXHR.responseText.lastIndexOf('{');
                    if (lastBrace !== -1) {
                        let jsonPart = jqXHR.responseText.substring(lastBrace);
                        try {
                            let data = JSON.parse(jsonPart);
                            if(data && data.message) msg = data.message;
                            if(data && typeof data.success !== 'undefined') color = data.success ? '#2e7d32' : '#c62828';
                        } catch(e) {}
                    }
                }
                showToast(msg, color);
            }
        });
    });
});
// Return to login homepage on fa-rectangle-xmark click
$('.fa-rectangle-xmark').on('click', function() {
    window.location.href = 'index.php';
});
