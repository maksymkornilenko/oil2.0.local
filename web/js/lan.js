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
    $('.order-total').text();
    var price=$('.order-price').text();
    var deliveryPrice=+$('.order-delivery-price').text();
    console.log(deliveryPrice);
    console.log(price);
    total = count * price;
    console.log(total);
    summ = total + deliveryPrice;
    $('.order-total').text(total);
    $('.summ').text(summ);
    $('.order-summ').text(summ);
}