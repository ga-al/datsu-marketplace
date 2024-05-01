jQuery(function ($) {

    $(document).ready(function () {
        sortProductArchive();

        console.log('qwewqeqw');



    });

    function sortProductArchive() {
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

});