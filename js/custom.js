jQuery(function ($) {

    $('.mrk-gallery-thumbs a').on('click', function(event) {
        event.preventDefault();
    
        let dataPath = $(this).attr('data-path');
        let galleryTop = $('.mrk-gallery-image');
    
        galleryTop.attr('src', dataPath);
        $('.mrk-gallery-thumbs a.active').removeClass('active');
        $(this).addClass('active'); 
    });

    $('.mrk-card-heart').on('click', function() {
        $( this ).toggleClass( "no-active" );
    })


}); // jQuery End

    const blocks = document.querySelectorAll(".mrk-cart");

    // храним шаблоны в удобном для редактирования месте
    const orderHTML = `<a href="#" class="btn-order btn btn-primary w-100">
    <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
    В корзину
    </a>`;

    const quantityHTML = `<div class="quantity">
    <div class="btn btn-outline-primary d-flex justify-content-center align-items-center">
    <button type="button" class="minus input-group-text border-0 text-primary py-0">-</button>	<label class="screen-reader-text" >Количество товара</label>
    <input type="number" class="input-text qty text border-0 text-primary py-0" name="cart[111][qty]" value="1" aria-label="Количество товара" size="4" min="0" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
    <button type="button" class="plus input-group-text border-0 text-primary py-0">+</button></div>
    </div>
    </div>`;
   
    blocks.forEach((block) => {
        block.addEventListener("click", (event) => {
            if (event.target.classList.contains('btn-order')) {
                block.innerHTML = quantityHTML;
            
            }
        });
    });
