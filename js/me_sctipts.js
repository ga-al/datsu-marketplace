jQuery(function ($) {

    $(document).ready(function () {
        me_sortProductArchive();

        if(document.querySelector('body').classList.contains('post-type-archive-product')){
            wbq_show_current_cat_parent();
        }

        $(document).on('click', '.quantity > .minus, .quantity > .plus', function() {
            // Debounce the click event to prevent multiple rapid clicks
            clearTimeout($(this).data('lastClick'));
            $(this).data('lastClick', setTimeout(function() {
                autoUpdateCart();
            }, 300)); // Adjust the debounce delay as needed
        });

        $(document).on('submit', "#page_home_form", function(e) {
            e.preventDefault();

            me_FORM_page_home();

        })

    });

    function me_sortProductArchive() {
        $('.me_btn_sort_producrs').on('click', function() {
            let btn = $(this)
            let sort = btn.data('sort')
            let term_id = btn.data('term_id')

            // $.ajax({
            //     type: "GET",
            //     url: "/wp-admin/admin-ajax.php",
            //     data: {
            //         'action': 'me_arhive_sort_product',
            //         'sort': sort,
            //         'term_id': term_id,
            //     },
            //     beforeSend: function () {},
            //     success: function (response) {

            //     }
            // });
        });
    }

    function me_FORM_page_home() {

            console.log( $('#page_home_form') );



        if ( ! $('#page_home_form').length ) return;

        let form = $('#page_home_form')



        let phone = form.find('#inputPhone').val();
        let name = form.find('#inputName').val();



        console.log(  phone, name  );

        $.ajax({
            type: "POST",
            url: "/wp-admin/admin-ajax.php",
            data: {
                'action': 'me_FORM_page_home',
                'phone': phone,
                'name': name,
            },
            beforeSend: function () {},
            success: function (response) {
                $('.page_home_form__title').text('Отправлено')
                $('#page_home_form').trigger("reset");

                setTimeout(() => {
                    $('.page_home_form__title').text('оставьте заявку, мы вам перезвоним')
                }, 3500);


            }
        });



    }



    function wbq_show_current_cat_parent(){
        let cur_cat_el = document.querySelector('.current-cat');
        let cur_pat_el = cur_cat_el.closest('.current-cat-parent');

        if(cur_pat_el){
            cur_pat_el.querySelector('.collapse').classList.add('show');
            cur_pat_el.querySelector('.btn-toggle').classList.remove('collapsed');
            cur_pat_el.querySelector('.btn-toggle').setAttribute('aria-expanded',true);
        }
    }

    function autoUpdateCart() {
        document.querySelector('button[name="update_cart"]').click();
    }
});


