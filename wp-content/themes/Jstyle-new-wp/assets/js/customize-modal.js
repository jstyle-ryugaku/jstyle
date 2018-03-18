$ = jQuery;
$(function () {
    $('.js-show-modal').on('click', showModal);
    $('.js-close-modal').on('click', hideModal);

    function showModal(event) {
        event.preventDefault();

        var $modalWin = $('.customize-modal');

        $modalWin
            .removeClass('hide')
            .addClass('show');
    }

    function hideModal() {

        $('#modal-window')
            .removeClass('show')
            .addClass('hide');

    }
});