jQuery(function() { 
    $('.js-users').on('click', '.ajax-delete', function() {
        $.ajax({
            type: 'GET',
            url: 'functions.php',
            data: {
                function: 'delete',
                key: $(this).closest('.js-user-item').data('key'),
            },
            success: function(result) {              
                $('.js-users').html(result);
            },
        });
    });

    $('.js-users').on('click', '.ajax-edit', function() {
        $('.js-item-edit.active').removeClass('active');
        $(this).parent().parent().find('.js-item-edit').addClass('active');
    });

    $('.js-users').on('click', '.js-save-edit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'GET',
            url: 'functions.php',
            data: {
                function: 'save-edit',
                key: $(this).data('key'),
                userData: {
                    name: $(this).parent().find('#name').val(),
                    username: $(this).parent().find('#username').val(),
                    email: $(this).parent().find('#email').val(),
                    street: $(this).parent().find('#street').val(),
                    suite: $(this).parent().find('#suite').val(),
                    city: $(this).parent().find('#city').val(),
                    zipcode: $(this).parent().find('#zipcode').val(),
                    lat: $(this).parent().find('#lat').val(),
                    lng: $(this).parent().find('#lng').val(),
                    phone: $(this).parent().find('#phone').val(),
                    website: $(this).parent().find('#website').val(),
                    companyName: $(this).parent().find('#company-name').val(),
                    catchPhrase: $(this).parent().find('#catch-phrase').val(),
                    bs: $(this).parent().find('#bs').val(),
                }
            },
            success: function(result) {
                $('.js-users').html(result);
            },
        });
    });

    let timeout = null;
    $('#search').on('keyup', function(e) {
        clearTimeout(timeout);
        value = $(this).val();
        timeout = setTimeout(function () {
            if(value.length > 0) {
                $('.js-users').addClass('search-active');
                $('.ajax-body').children().removeClass('item-active');
                $('.js-user-item').each(function(index, item) {
                    if($(item).find('#user-name').text().toLowerCase().includes(value.toLowerCase())) {
                        $(item).addClass('item-active');
                        console.log('found');
                    }
                });
            } else {
                $('.js-users').removeClass('search-active');
            }
        }, 1000);
        
    });
});