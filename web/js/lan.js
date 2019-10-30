$(document).ready(function() {
    $(".order-minus").click(function() {
        count = parseInt($('.order-count').text());
        if (count > 1) {
            count--;
        }
        $('.order-count').text(count);
        calculateTotalAndSumm(count);
    });

    $(".order-plus").click(function() {
        count = parseInt($('.order-count').text());
        count++;
        $('.order-count').text(count);
        calculateTotalAndSumm(count);
    });
});

function calculateTotalAndSumm(count) {
    $('#order-count').val(count);
    total = count * 17;
    summ = total + 5;
    $('.order-total').text(total);
    $('.summ').text(summ);
    $('.order-summ').text(summ);
}