jQuery(function ($) {
    // галлерея
    $('.mrk-gallery-thumbs a').on('click', function(event) {
        event.preventDefault();
    
        let dataPath = $(this).attr('data-path');
        let galleryTop = $('.mrk-gallery-image');
    
        galleryTop.attr('src', dataPath);
        $('.mrk-gallery-thumbs a.active').removeClass('active');
        $(this).addClass('active'); 
    });

    // динамика сердечек
    $('.mrk-card-heart').on('click', function() {
        $( this ).toggleClass( "no-active" );
    })

    $('.mrk-card-heart').on('click', function() {
        $( this ).toggleClass( "no-active" );
    })
 
    // чат
    if ($('.ready-made-solutions').length) {
        $('.mrk-project-chat').removeClass('hide')
        $('.mrk-project-chat').addClass('d-lg-block')
        $(window).on('scroll',function(){
            let result
            var smallScreen = window.matchMedia("(min-width: 992px)");
            if (smallScreen.matches){
                result = $('.ready-made-solutions').position().top
                $('.mrk-project-chat').css('margin-top', result)
            } else {
                $('.mrk-project-chat').css('margin-top', '0')
            }
            
          })
          $(window).trigger('scroll')
          console.log('chat')
    } else {
        $('.mrk-project-chat').removeClass('d-lg-block')
        $('.mrk-project-chat').addClass('hide')
        console.log('no-chat')
    }


}); // jQuery End

    // Вывод счётчика корзины
    const blocks = document.querySelectorAll(".mrk-cart-quantity");

    // храним шаблоны в удобном для редактирования месте
    const orderHTML = `<a href="#" class="btn-order btn btn-primary w-100">
    <img class="mx-auto pe-1" src="<?= esc_url(get_stylesheet_directory_uri()); ?>/img/svg/cart4-white.svg" alt="корзина">
    В корзину
    </a>`;

    const quantityHTML = `
    <div class="quantity btn btn-outline-primary d-flex justify-content-center align-items-center">
    <button type="button" class="minus input-group-text border-0 text-primary py-0">-</button>	<label class="screen-reader-text" >Количество товара</label>
    <input type="number" class="input-text qty text border-0 text-primary py-0" name="cart[111][qty]" value="1" aria-label="Количество товара" size="4" min="0" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
    <button type="button" class="plus input-group-text border-0 text-primary py-0">+</button></div>`;
   
    blocks.forEach((block) => {
        block.addEventListener("click", (event) => {
            if (event.target.classList.contains('btn-order')) {
                block.innerHTML = quantityHTML;
            
            }
        });
    });

    // Slider
if (document.querySelectorAll('.slider')) {
  
    const sliderItem = document.querySelector('.slider')
    const youtubes = document.querySelectorAll('.swiper-slide.youtube')
    const ImageYoutubes = document.querySelectorAll('.swiper-slide .youtube')
    const modalItem = document.querySelectorAll('.modal')
    const sliderImagesModals = document.querySelectorAll('.slider__images--modal') 
    
    const mediaQuery = window.matchMedia('(min-width: 769px)')
    
    let clicked = false
    let msnrySlider
    let isMobileWidth = window.innerWidth < 769
    let sliderThumbs
    let sliderImages
    let carousel
    let srcModal = "?rel=0&autoplay=1"
    let srcUrl
    let videoIframe
    let videoURL
    let iframeUrl
    let iframeThumb
    let urlThumb
        
    if (document.querySelector('.slider-vertical')) {
        document.querySelector('.slider-thumb__images .swiper-wrapper').classList.add('slider-grid')
        masonrySlider()
    }
    function sliderThumbActive(images, thumbs) {
        if (images && thumbs) {
        
        sliderThumbs = new Swiper(thumbs, {
            direction: getDirection(),
            slidesPerView: 'auto',
            speed: 600,
            grabCursor: true,
            mousewheel: true,
            spaceBetween: 10,
            on: {
            click: function () {
                clicked = true
                if (mediaQuery.matches) {
                    sliderThumbs.changeDirection(getDirection())
                    
                    let swSlImg = sliderImages.wrapperEl.querySelectorAll('img')
                    for (let i=0; i < swSlImg.length; i++) {
                        if (sliderImages.slides[i].classList.contains('swiper-slide-prev') || this.clickedSlide.classList.contains('ratio-16x9')) {
                            let width = swSlImg[i].offsetWidth;
                            let height = swSlImg[i].offsetHeight;
                            
                            if (width > height ) {
                                clicked = false
                                sliderThumbs.changeDirection(getDirection())
                                sliderItem.classList.remove('slider-vertical')
                                sliderThumbs.wrapperEl.classList.remove('slider-grid')
                                if (youtubes.length > 0) {
                                    youtubes.forEach(el => el.classList.remove('ratio-16x9'))
                                }
                            } else if (width < height) {
                                sliderItem.classList.add('slider-vertical')
                                sliderThumbs.wrapperEl.classList.add('slider-grid')
                                if (youtubes.length > 0) {
                                    youtubes.forEach(el => {
                                        el.classList.add('ratio-16x9')
                                    })
                                }
                            }
                        }
                    }
    
                    if (this.clickedSlide.classList.contains('ratio-16x9')) {
                        clicked = false
                        sliderThumbs.changeDirection(getDirection())
                        sliderItem.classList.remove('slider-vertical')
                        sliderThumbs.wrapperEl.classList.remove('slider-grid')
                        youtubes.forEach(el => el.classList.remove('ratio-16x9'))
                    }

                    if (document.querySelector('.slider-grid')) {
                        this.mousewheel.disable()
                        masonrySlider()
                    } else {
                        this.mousewheel.enable()
                        masonrySliderDelete()
                    }
                }
            }
            },
            breakpoints: {
            0: {
                direction: 'horizontal',
                spaceBetween: 4,
                allowSlideNext: true,
                allowSlidePrev: true,
                slideToClickedSlide: true,
            },
            768: {
                // allowSlideNext: false,
                // allowSlidePrev: false,
            }
            }
        })
    
        sliderImages = new Swiper(images, {
            direction: 'horizontal',
            slidesPerView: 1,
            spaceBetween: 24,
            speed: 600,
            autoHeight: false,
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
            on: {
                slideChange: function () {
                    hideIframe()
                    if (mediaQuery.matches) {
                        clicked = true
                        sliderItem.classList.add('slider-vertical')
                        sliderThumbs.changeDirection(getDirection())
        
                        sliderThumbs.wrapperEl.classList.add('slider-grid')
                        
                        let swSlImg = sliderImages.wrapperEl.querySelectorAll('img')
                        for (let i=0; i < swSlImg.length; i++) {
                            if (sliderImages.slides[i].classList.contains('swiper-slide-active') || sliderImages.activeIndex === 0) {
                                let width = swSlImg[i].offsetWidth;
                                let height = swSlImg[i].offsetHeight;
                                if (width > height ) {
                                    clicked = false
                                    sliderThumbs.changeDirection(getDirection())
                                    sliderItem.classList.remove('slider-vertical')
                                    sliderThumbs.wrapperEl.classList.remove('slider-grid')
                                    youtubes.forEach(el => el.classList.remove('ratio-16x9'))
                                } 
                            }
                        }
                        let swiperSliders = sliderImages.wrapperEl.querySelectorAll('.swiper-slide')
                        let fullSliders = sliderImages.wrapperEl.querySelectorAll('.fullscrin')

                        getSliderView(fullSliders)
                        getSliderView(swiperSliders)
                        
                        if (document.querySelector('.slider-grid')) {
                        masonrySlider()
                        } else {
                        masonrySliderDelete()
                        }
                    } else {
                    sliderThumbs.wrapperEl.classList.remove('slider-grid')
                    }
                }
            },
            thumbs: {
            swiper: sliderThumbs
            },
            breakpoints: {
            0: {
                direction: 'horizontal',
                autoHeight: true,
                // mousewheel: true,
                keyboard: true,
                allowSlidePrev: true,
                allowSlideNext: true
            }
            },
        })
    
        }
    }
    
    function getSliderView(slider) {
        let i
        for(i=0; i < slider.length; i++) {
            if (i != 0) {
                slider[i].setAttribute('data-slider', i)
            } else {
                slider[i].setAttribute('data-slider', '0')
            }
        }
    }

    function getDirection() {
        let direction = clicked ? 'vertical' : 'horizontal'
        return direction
    }
        
    function masonrySlider() {
        msnrySlider = new Masonry( document.querySelector('.slider-grid'), {
        gutter: 10,
        columnWidth: 110,
        percentPosition: true,
        })
    }
        
    function masonrySliderDelete() {
        if (msnrySlider) msnrySlider.destroy();
    }
    
    if (document.querySelectorAll('.slider__images--main') && document.querySelectorAll('.slider-thumb__images--main')) {
        if (isMobileWidth) {
        sliderThumbActive('.slider__images--main', '.slider-thumb__images--main')
        } else {
        sliderThumbActive('.slider__images--main', '.slider-thumb__images--main')
        }
    }
        
    function sliderModals(modal) {
        carousel = new bootstrap.Carousel(modal, {
        // interval: 2000,
        touch: true
        })
    }
        
    modalItem.forEach(modal => {
        modal.addEventListener('show.bs.modal', function (e) {
            if (this.querySelector('.iframe')) {
            videoIframe = this.querySelector('.iframe')
            videoURL = videoIframe.getAttribute('src')
            srcUrl = videoURL+srcModal
            videoIframe.setAttribute('src', srcUrl)
            }
            let invoker = e.relatedTarget
            console.log(invoker)
            sliderImagesModals.forEach(el => {
            sliderModals(el)
            carousel.to(invoker.getAttribute('data-slider')) 
            console.log(carousel)
                el.addEventListener('slid.bs.carousel', function(e) {
                    
                    let currentSlide = this.querySelector('.carousel-item.active')
                    if (currentSlide && videoIframe) {
                        let videoURLa = videoIframe.getAttribute('src');
                        if (videoURL === videoIframe.setAttribute('src', srcUrl)) {
                            videoIframe.setAttribute('src', videoURLa)
                        } 
                        if (videoIframe && videoIframe.setAttribute('src', videoURL)) {
                            videoIframe.setAttribute('src', srcUrl)
                        }
                    
                    }
                })
            })
            hideIframe()
        })
        modal.addEventListener('hidden.bs.modal', function(e) {
            if (this.querySelector('.iframe')) {
            iframeUrl = this.querySelector('.iframe')
            iframeUrl.setAttribute('src', videoURL)
            }
        });
    }) 
        
    function hideIframe() {
        ImageYoutubes.forEach(video => {
        let videoEl = video.querySelectorAll('.iframe')
        videoEl.forEach(el => {
            el.setAttribute('src', el.src)
        })
        })
    }

    if (youtubes.length > 0) {
        youtubes.forEach (thumb => {
          iframeThumb = thumb.querySelector('.iframe')
          urlThumb = iframeThumb.getAttribute('src')
          let urlId = YouTubeGetID(urlThumb)
          let srcLoop = `?rel=0&autoplay=1&loop=1&mute=1&start=10&end=40&controls=0&cc_load_policy=3&iv_load_policy=3&playlist=${urlId}`
          let urlPlay = urlThumb + srcLoop
          console.log(urlThumb)
          console.log(urlPlay)
          
          if (urlThumb !== null) {
            iframeThumb.setAttribute('src', urlPlay)
            console.log(iframeThumb)
          }
            
        })
    }
      
    function YouTubeGetID(url){
    if (url) {
        url = url.split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
        return (url[2] !== undefined) ? url[2].split(/[^0-9a-z_\-]/i)[0] : url[2];
    }
    }
}
