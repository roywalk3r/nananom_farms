window.showToast = function(message, color = '#2e7d32') {
    let toast = $('#toastMessage');
    if (toast.length === 0) {
        toast = $('<div id="toastMessage"></div>').appendTo('body');
        toast.css({
            position: 'fixed', bottom: '30px', left: '50%', transform: 'translateX(-50%)',
            background: color, color: '#fff', padding: '15px 28px', borderRadius: '8px', fontSize: '1rem',
            zIndex: 9999, boxShadow: '0 2px 10px rgba(0,0,0,0.15)', display: 'none', minWidth: '180px', textAlign: 'center'
        });
    }
    toast.text(message).css('background', color).fadeIn(200);
    setTimeout(() => toast.fadeOut(400), 2200);
}
