function getBackendUrl(endpoint) {
    var base = window.location.origin;
    var path = window.location.pathname;
    var match = path.match(/\/(nananom_farms)(\/|$)/);
    var basePath = match ? '/' + match[1] : '';
    return base + basePath + '/core/backend/' + endpoint;
}

$(function() {
    $('#registerForm').on('submit', function(e) {
        e.preventDefault();
        var username = $('#username').val().trim();
        var email = $('#email').val().trim();
        var phone = $('#phone').val().trim();
        var password = $('#password').val();
        var confirm = $('#confirm_password').val();
        var msgDiv = $('#registerMessage');
        msgDiv.text('');
        if(password !== confirm) {
            showToast('Passwords do not match.', '#c62828');
            return;
        }
        showToast('Registering...', '#333');
        $.ajax({
            url: getBackendUrl('register.php'),
            type: 'POST',
            data: {
                username: username,
                email: email,
                phone: phone,
                password: password,
                confirm_password: confirm
            },
            dataType: 'json',
            success: function(data, textStatus, jqXHR) {
                var color = (data && data.success) ? '#2e7d32' : '#c62828';
                if(data && typeof data === 'object' && 'success' in data) {
                    showToast(data.message, color);
                    if(data.success) {
                        setTimeout(function() { window.location.href = 'login.php'; }, 1200);
                    }
                } else {
                    showToast('Unexpected server response. Please try again.', '#c62828');
                }
            },
            error: function(jqXHR) {
                let msg = 'Registration failed. Please try again.';
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


$('.fa-rectangle-xmark').on('click', function() {
    window.location.href = 'index.php';
});
