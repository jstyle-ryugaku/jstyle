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
var totalMinCost = 0;
var totalMaxCost = 0;
var customizeType = null;
var isCountryPage = false;
var isTypePage = false;
var isPeriodPage = false;
const $topPage = $('.top-page');


var languageCost = {
    america: 18,
    australia: 22,
    newZealand: 21,
    canada: 18,
    UK: 26
};

var minCommission = {
    short: 1,
    middle: 2,
    long: 2,
    workingHoliday: 2
};

var maxCommission = {
    short: 59.8,
    middle: 69.8,
    long: 89.8,
    workingHoliday: 89.8
};

var universityCost = {
    min: 400,
    max: 1000
};

function calculateTotalCost() {
    var country = $("input[name='country']:checked").attr("id");
    var type = $("input[name='type']:checked").attr("id");
    var term = $("input[name='term']").val();

    if (term <= 2) {
        var period = 'short';
    } else if (term > 2 && term < 5) {
        period = 'middle';
    } else {
        period = 'long'
    }

    if (type === 'language') {
    totalMinCost = languageCost[country] * term + minCommission[period];
    totalMaxCost = languageCost[country] * term + maxCommission[period];
    } else if (type === 'university') {
        totalMinCost = universityCost['min'] + minCommission[period];
        totalMaxCost = universityCost['max'] + maxCommission[period]
    } else if (type === 'workingHoliday') {
        totalMinCost = minCommission[period];
        totalMaxCost = maxCommission[period];
    }

    $('.result__cost--min').text(totalMinCost);
    $('.result__cost--max').text(totalMaxCost);
}

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
    customizeType = 'period';
    toNextPage();
}

function onSelectCountry() {
    customizeType = 'country';
    toNextPage();
}

function toNextPage() {
    hidePage(stepNumberToPageClass(stepNumber));
    showPage(stepNumberToPageClass(stepNumber + 1));
    stepNumber++;
    $(stepNumberToPageClass(stepNumber)).find('.step__number').text('0' + stepNumber);
    $(stepNumberToPageClass(stepNumber)).find('.foreword').text(stepNumberToForeword(stepNumber));

    if (stepNumber === 5) {
        calculateTotalCost();
    }

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
            return '最初に、';
        case 3 :
            return '次に、';
        case 4 :
            return '最後に、';
        case 5 :
            return '';
    }
}

