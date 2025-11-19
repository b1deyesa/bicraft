import './bootstrap';

$(document).ready(function () {
    $('.copy').click(function () {
        const targetId = $(this).data('target');
        const text = $('#' + targetId).text();

        const tempInput = $('<textarea>');
        $('body').append(tempInput);
        tempInput.val(text).select();
        document.execCommand('copy');
        tempInput.remove();

        const $btn = $(this);
        const originalHTML = '<i class="fa-regular fa-copy"></i>';
        const successHTML = '<i class="fa-solid fa-check"></i>';

        $btn.html(successHTML);
        setTimeout(() => $btn.html(originalHTML), 1500);
    });
});
