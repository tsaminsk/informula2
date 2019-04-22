'use strict'

class OrderDetail {
    constructor($el) {
        this.$element = $el;
        this.$zakaz = this.$element.find('#zakaz-more');
        this.$zakazButton = this.$element.find('#zakaz-more-button');
        this.$delivery = this.$element.find('#delivery-more');
        this.$deliveryButton = this.$element.find('#delivery-more-button');
        this.$deliveryClose = this.$element.find('#delivery-more-close');
        this.$deliveryOrders = this.$element.find('.order-delivery');
        this.$pay = this.$element.find('#pay-more');
        this.$payButton = this.$element.find('#pay-more-button');
        this.$payClose = this.$element.find('#pay-more-close');
        this.$payOrders = this.$element.find('.order-pay');
        this.$rows = this.$element.find('.js-align');
        
        this.setClientParams();
        this.setZakaz();
        this.setDelivery();
        this.setDeliveryOrders();
        this.setPay();
        this.setPayOrders();
        this.setAlign();
        this.setResaze();
    }

    setResaze() {
        $(window).resize( () => {
            this.setClientParams();
            this.setAlign();
        });
    }

    setClientParams() {
        if ($('.order-detail-more#zakaz-more')) {
            if ( $("body").innerWidth() < 992 ) {
                let innerCode = $('.order-detail-more#zakaz-more');
                $('.order-detail-more#zakaz-more').remove();
                $('.js-add-block-mob').after(innerCode);
            }
            else {
                let innerCode = $('.order-detail-more#zakaz-more');
                $('.order-detail-more#zakaz-more').remove();
                $('.js-add-block-desc').after(innerCode);
            }
        }
    }

    setAlign() {
        if ( $("body").innerWidth() >= 992) {
            $.each(this.$rows, function (index, value) {
                let max_col_height = 0;
                let columns = $(value).find('.col-md-4');
                for (var i = columns.length - 1; i >= 0; i--) {
                    if (columns[i].offsetHeight > max_col_height) {
                        max_col_height = columns[i].offsetHeight;
                    }
                }
                for (var i = 0; i <= columns.length; i++) {
                    $(columns[i]).css('height', max_col_height + 'px');
                }
            });
        }
        else {
            $.each(this.$rows, function (index, value) {
                let columns = $(value).find('.col-md-4');
                for (var i = 0; i <= columns.length; i++) {
                    $(columns[i]).css('height', 'auto');
                }
            });
        }
    }

    setZakaz() {
        $(this.$zakazButton).on('click', event => {
            event.preventDefault();
            if (!$(this.$zakazButton).hasClass('is-open')) {
                $(this.$zakazButton).addClass('is-open').find('span.whith-shape').html('Свернуть');
                $(this.$zakaz).fadeIn(500);
            }
            else if ($(this.$zakazButton).hasClass('is-open')) {
                $(this.$zakazButton).removeClass('is-open').find('span.whith-shape').html('Подробнее');
                $(this.$zakaz).fadeOut(500);
            }
        });
    }

    setDelivery() {
        $(this.$deliveryButton).on('click', event => {
            event.preventDefault();
            $('.js-delivery-more-button').hide(200);;
            $(this.$delivery).fadeIn(500);
        });

        $(this.$deliveryClose).on('click', event => {
            event.preventDefault();
            $('.js-delivery-more-button').show(200);
            $(this.$delivery).fadeOut(500);
        });
    }

    setDeliveryOrders() {
        let order = $('.order-delivery.order-delivery-changed');
        $(this.$deliveryOrders).on('click', event => {
            event.preventDefault();
            $(this.$deliveryOrders).removeClass('order-delivery-changed');

            $(event.target).hasClass('order-delivery') ? order = event.target : order = $(event.target).parent('.order-delivery');
            $(order).addClass('order-delivery-changed');
        });

        $('#delivery-method-save').on('click', event => {
            event.preventDefault();
            let orderName = $(order).find('.order-delivery-name').text().trim();
            let orderCost = $(order).find('.order-delivery-cost span').text().trim();
            $('.js-delivery-type').find('span').text(orderName);
            if ($(order).data('icon')) {
                $('.js-delivery-type').children('div').remove();
                let orderInner = '<div style="height: 100%; float: left;"><img src="' + $(order).data('icon') + '" style="margin: 1px 14px 0 0" alt="" /></div >' + $('.js-delivery-type').html();
                $('.js-delivery-type').html(orderInner);
            }
            else {
                $('.js-delivery-type').children('div').remove();
            }

            $('.js-delivery-cost').text(Number(orderCost) === NaN ? Number(0).toFixed(2) : Number(orderCost).toFixed(2));

            $('.js-delivery-more-button').show(200);
            $(this.$delivery).fadeOut(500);
        });
    }

    setPay() {
        $(this.$payButton).on('click', event => {
            event.preventDefault();
            $('.js-pay-more-button').hide(200);;
            $(this.$pay).fadeIn(500);
            
        });

        $(this.$payClose).on('click', event => {
            event.preventDefault();
            $('.js-pay-more-button').show(200);
            $(this.$pay).fadeOut(500);
        });
    }

    setPayOrders() {
        
        let currentPayOrder = $('.order-pay.order-pay-changed');
        let orderPayName = $(currentPayOrder).find('.order-pay-name').html();;
        $(this.$payOrders).on('click', event => {
            event.preventDefault();
            $(this.$payOrders).removeClass('order-pay-changed');
            $(event.target).hasClass('order-pay') ? currentPayOrder = event.target : currentPayOrder = $(event.target).parents('.order-pay');
            $(currentPayOrder).addClass('order-pay-changed');
            orderPayName = $(currentPayOrder).find('.order-pay-name').html();
        });

        $('#pay-method-save').on('click', event => {
            event.preventDefault();
            orderPayName = $(currentPayOrder).find('.order-pay-name').html();
            
            $('.js-pay-type').children('div') ? $('.js-pay-type').children('div').remove() : null;
            $('.js-pay-type').html(orderPayName);
            
            if ($(currentPayOrder).data('icon')) {
                let orderPayInner = '<div style="height: 100%; float: left;"><img src="' + 
                                $(currentPayOrder).data('icon') + '" style="width: 30px; margin: 1px 14px 0 0" alt="" /></div >' + 
                                $('.js-pay-type').html();
                $('.js-pay-type').html(orderPayInner);
            }

            $('.js-pay-more-button').show(200);
            $(this.$pay).fadeOut(500);
        });
    }

}

$(() => {
    $('.js-order-detail').each((i, item) => {
    new OrderDetail($(item));
    });
});