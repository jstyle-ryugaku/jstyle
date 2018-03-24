$ = jQuery;

$('.js-show-modal').on('click', showModal);
$('.js-close-modal').on('click', hideModal);
$('.js-on-select-period').on('click', onSelectPeriod);
$('.js-on-select-country').on('click', onSelectCountry);
$('.js-on-prev').on('click', toPrevPage);
$('.js-on-next').on('click', toNextPage);
$('.js-on-to-top').on('click', toTopPage);


var stepNumber = 1;
var currentNumber = 0;
var totalCost = 0;
var customizeType = null;
var isCountryPage = false;
var isTypePage = false;
var isPeriodPage = false;
const $topPage = $('.top-page');
var $currentPage = $topPage;
var $nextPage;
var $prevPage;

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

function showPage(pageClass) {
    pageClass
        .removeClass('hide')
        .addClass('show');
}

function hidePage(pageClass) {
    pageClass
        .removeClass('show')
        .addClass('hide');
}

function onSelectPeriod() {
    $nextPage = $('.select-period');
    customizeType = 'period';
    toNextPage();
}

function onSelectCountry() {
    $nextPage = $('.select-country');
    customizeType = 'country';
    toNextPage();
}

function toNextPage() {
    hidePage(stepNumberToPageClass(stepNumber));
    showPage(stepNumberToPageClass(stepNumber + 1));
    stepNumber++;
    $(stepNumberToPageClass(stepNumber)).find('.step__number').text('0' + stepNumber);
    $(stepNumberToPageClass(stepNumber)).find('.foreword').text(stepNumberToForeword(stepNumber));
}

function toPrevPage() {
    hidePage(stepNumberToPageClass(stepNumber));
    showPage(stepNumberToPageClass(stepNumber - 1));
    stepNumber--;
    $(stepNumberToPageClass(stepNumber)).find('.step__number').text('0' + stepNumber);
    $(stepNumberToPageClass(stepNumber)).find('.foreword').text(stepNumberToForeword(stepNumber));
}

function toTopPage() {
    hidePage(stepNumberToPageClass(stepNumber));
    showPage($topPage);
    stepNumber = 1;
    $(stepNumberToPageClass(stepNumber)).find('.step__number').text('0' + stepNumber);
}

function stepNumberToPageClass(stepNumber) {
    if (stepNumber === 1) {
        return $('.top-page');
    } else if(stepNumber === 5) {
        return $('.result');
    }
    if (customizeType === 'period') {
        switch (stepNumber) {
            case 2 :
                return $('.select-period');
            case 3 :
                return $('.select-type');
            case 4 :
                return $('.select-country');
        }
    } else if (customizeType === 'country') {
        switch (stepNumber) {
            case 2 :
                return $('.select-country');
            case 3 :
                return $('.select-period');
            case 4 :
                return $('.select-type');
        }
    }
}

function stepNumberToForeword(stepNumber) {
    switch (stepNumber) {
        case 1 :
            return '';
        case 2 :
            return '最初に';
        case 3 :
            return '次に';
        case 4 :
            return '最後に';
        case 5 :
            return '';
    }
}