jQuery(function ($) {
    // галлерея
    $('.mrk-gallery-thumbs a').on('click', function(event) {
        event.preventDefault();

        let dataPath = $(this).attr('data-path');
        let dataLinkText = $(this).children('span').attr('data-link-text');
        let dataTitle = $(this).children('h1').attr('data-title');
        let galleryTop = $('.mrk-gallery-image');
        let galleryBlurTitle = $('.mrk-gallery-blur-title');
        let galleryBlurLink = $('.mrk-gallery-blur-link');

        if ($(this)) {
            galleryTop.attr('src', dataPath);
            if ($('.mrk-gallery-thumbs a.active')) {
                galleryBlurTitle.text(dataTitle);
                galleryBlurLink.text(dataLinkText);
                if(galleryBlurTitle.text() === "Все для перил и ограждений" && $(window).width() > 550) {
                    galleryBlurTitle.addClass("w-50");
                }
                else {
                    galleryBlurTitle.removeClass("w-50");
                }

                // Вывод списка на слайде галлереи

                let galleryList = $('.mrk-gallery-list');
                let description = $(this).children('p').text();
                
                if(description != '') {
                    galleryList.removeClass('d-none');
                   
                    let array = description.split(';').filter(Boolean);
                  
                    array.forEach(function(element) {
                        galleryList.append("<li>" + element + "</li>");
                    }); 
            
                } else {
                    galleryList.addClass('d-none');
                }
            }
           
            $('.mrk-gallery-thumbs a.active').removeClass('active');
            $(this).addClass('active');
        }

    });

    // динамика сердечек
    $('.mrk-card-heart a').on('click', function() {
        $('.mrk-card-heart .feedback').css('display', 'none');
        $('.mrk-card-heart').toggleClass( "no-active" );
    })

    // чат
    if ($('.ready-made-solutions').length) {
        $('.mrk-project-chat').removeClass('hide')
        $('.mrk-project-chat').addClass('d-lg-block')
        $(window).on('scroll',function(){
            let result
            // var smallScreen = window.matchMedia("(min-width: 992px)");
            if ($(window).width() > 992){
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



    // Вывод счётчика корзины
    const blocks = document.querySelectorAll(".mrk-cart-quantity");

    const quantityHTML = `
    <div class="quantity btn btn-outline-primary d-flex justify-content-center align-items-center">
    <button type="button" class="minus input-group-text border-0 text-primary py-0">-</button>	<label class="screen-reader-text" >Количество товара</label>
    <input type="number" class="input-text qty text border-0 text-primary py-0" name="cart[111][qty]" value="1" aria-label="Количество товара" size="4" min="0" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off">
    <button type="button" class="plus input-group-text border-0 text-primary py-0">+</button></div>`;

    blocks.forEach(item => {
        renameQuantiyElement(item, 'btn-order');
    });


    function renameQuantiyElement(block, btn) {
        block.addEventListener("click", (event) => {
            if (event.target.classList.contains(btn)) {
                block.innerHTML = quantityHTML;
            }
        });
    }


}); // jQuery End


// Slider
if (document.querySelectorAll('.slider').length) {

    const sliderItem = document.querySelector('.slider')
    console.log(sliderItem)
    const youtubes = document.querySelectorAll('.swiper-slide.youtube')
    const ImageYoutubes = document.querySelectorAll('.swiper-slide .youtube')
    const modalItem = document.querySelectorAll('.modal')
    const swiperSliders = document.querySelectorAll('.swiper-slide')
    const fullSliders = document.querySelectorAll('.fullscrin')
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


    if (sliderItem.classList.contains('slider-vertical')) {
        document.querySelector('.slider-thumb__images .swiper-wrapper').classList.add('slider-grid')
        if(youtubes) {
            addYoutubes(youtubes)
        }
        masonrySlider()
    }

    if (sliderItem.classList.contains('slider-horizontal')) {
        document.querySelector('.slider-thumb__images .swiper-wrapper').classList.remove('slider-grid')
        if(youtubes) {
            removeYoutubes(youtubes)
        }
        masonrySliderDelete()
    }

    swiperSliders.forEach((swiper) => {
        getOffsetSlide(swiper)

        const swiperImage = swiper.querySelector('.image-4x3 img')
        if (swiperImage) {
            const swiperImageParent = swiperImage.parentNode.parentNode
            getOffsetParentSlide(swiperImage, swiperImageParent)
        }
    })

    function getOffsetSlide(slide) {
        if (slide.offsetWidth > slide.offsetHeight) {
            slide.classList.add('slider-horizont')
            slide.classList.remove('slider-vertic')
        }
         if (slide.offsetWidth <= slide.offsetHeight) {
            slide.classList.remove('slider-horizont')
            slide.classList.add('slider-vertic')
        }
    }

    function getOffsetParentSlide(slide, parent) {
        if (slide.offsetWidth > slide.offsetHeight) {
            parent.classList.add('slider-horizont')
            parent.classList.remove('slider-vertic')
        }
        if (slide.offsetWidth <= slide.offsetHeight) {
            parent.classList.remove('slider-horizont')
            parent.classList.add('slider-vertic')
        }
    }

    getSliderView(fullSliders)
    getSliderView(swiperSliders)

    if (window.matchMedia('(max-width: 769px)').matches) {
        document.querySelector('.slider.slider-vertical').classList.remove('slider-vertical')
        if (document.querySelector('.slider.slider-vertical.slider-card')) {
            document.querySelector('.slider.slider-vertical.slider-card').classList.remove('slider-vertical')
        }
        document.querySelector('.slider-thumb__images .swiper-wrapper').classList.remove('slider-grid')
        removeYoutubes(youtubes)
        masonrySliderDelete()
    }

    function sliderThumbActive(images, thumbs) {
        if (images && thumbs) {

        sliderThumbs = new Swiper(thumbs, {
            direction: getDirection(),
            slidesPerView: 'auto',
            speed: 600,
            grabCursor: false,
            mousewheel: false,
            spaceBetween: 10,
            on: {
            click: function () {
                clicked = true
                if (mediaQuery.matches) {
                    sliderThumbs.changeDirection(getDirection())
                    // addYoutubes(youtubes)

                    if (this.clickedSlide.classList.contains('slider-horizont')) {
                        clicked = false
                        sliderThumbs.changeDirection(getDirection())
                        sliderItem.classList.remove('slider-vertical')
                        sliderItem.classList.add('slider-horizontal')
                        sliderThumbs.wrapperEl.classList.remove('slider-grid')
                        masonrySliderDelete()
                    } else if (this.clickedSlide.classList.contains('slider-vertic')) {
                        // sliderThumbs.changeDirection(getDirection())
                        sliderItem.classList.remove('slider-horizontal')
                        sliderItem.classList.add('slider-vertical')
                        sliderThumbs.wrapperEl.classList.add('slider-grid')
                        masonrySlider()
                    }

                    if (document.querySelector('.slider-grid')) {
                        this.mousewheel.disable()
                    } else {
                        this.mousewheel.enable()
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
            992: {
                direction: getDirection(),
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
            mousewheel: false,
            allowTouchMove:false,
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
            on: {
                slideChange: function () {
                    hideIframe()
                    clicked = true
                    if (mediaQuery.matches) {
                        sliderThumbs.changeDirection(getDirection())

                        const index_currentSlide = this.realIndex;
                        const currentSlide = this.slides[index_currentSlide]

                        if (currentSlide.classList.contains('slider-horizont')) {
                            clicked = false
                            sliderThumbs.changeDirection(getDirection())
                            sliderItem.classList.remove('slider-vertical')
                            sliderItem.classList.add('slider-horizontal')
                            sliderThumbs.wrapperEl.classList.remove('slider-grid')
                            masonrySliderDelete()

                        } else if (currentSlide.classList.contains('slider-vertic')) {
                            sliderThumbs.changeDirection(getDirection())
                            sliderItem.classList.remove('slider-horizontal')
                            sliderItem.classList.add('slider-vertical')
                            sliderThumbs.wrapperEl.classList.add('slider-grid')
                            masonrySlider()
                            if(youtubes) {
                                addYoutubes(youtubes)
                            }
                        }

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
                mousewheel: true,
                keyboard: true,
                allowSlidePrev: true,
                allowSlideNext: true,
                allowTouchMove:true,
            },
            // 800: {
            //     autoHeight: true,
            //     allowTouchMove: false,
            // },
            992: {
                direction: getDirection(),
                autoHeight: true,
                allowTouchMove: false,
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
            itemSelector: '.swiper-slide',
            gutter: 10,
            columnWidth: 110,
            percentPosition: true,
        })
        msnrySlider.layout()

    }

    function masonrySliderDelete() {
        if (msnrySlider) msnrySlider.destroy();
    }

    function sliderModals(modal) {
        carousel = new bootstrap.Carousel(modal, {
        // interval: 2000,
        touch: true
        })
    }

    // вывод модального окна
    modalItem.forEach(modal => {
        modal.addEventListener('show.bs.modal', function (e) {
            if (this.querySelector('.iframe')) {
                videoIframe = this.querySelector('.iframe')
                videoURL = videoIframe.getAttribute('src')
                srcUrl = videoURL+srcModal
                const currentSlide = this.querySelector('.carousel-item.active')

            if (currentSlide.querySelector('.iframe')) {
                videoIframe.setAttribute('src', srcUrl)
            }}
            let invoker = e.relatedTarget

            sliderImagesModals.forEach(el => {
            sliderModals(el)
            carousel.to(invoker.getAttribute('data-slider'))

            if (!this.querySelector('.iframe')) {
                this.querySelector('.carousel-item').classList.add('active')
                console.log(carousel.to(invoker.getAttribute('data-slider')) )
            }

            el.addEventListener('slid.bs.carousel', function(e) {
                const currentSlide = this.querySelector('.carousel-item.active')
                if (currentSlide && videoIframe) {

                    let videoURLa = videoIframe.getAttribute('src')
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

    function addYoutubes(youtube) {
        if (youtube.length > 0) {
            youtube.forEach(el => {
                el.classList.add('ratio-16x9')
            })
        }
    }

    function removeYoutubes(youtube) {
        if (youtube.length > 0) {
            youtube.forEach(el => {
                el.classList.remove('ratio-16x9')
            })
        }
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

    if (document.querySelectorAll('.slider__images--main') && document.querySelectorAll('.slider-thumb__images--main')) {
        if (isMobileWidth) {
        sliderThumbActive('.slider__images--main', '.slider-thumb__images--main')
        } else {
        sliderThumbActive('.slider__images--main', '.slider-thumb__images--main')
        }
    }

}

// Slider-cards
let swiper = new Swiper(".swiper-general", {
    slidesPerView: 4,
    spaceBetween: 15,
    navigation: {
        nextEl: ".uploaded-in-next",
        prevEl: ".uploaded-in-prev",
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
        },
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
        },
        // when window width is >= 800px
        800: {
            slidesPerView: 4,
        }
        // when window width is >= 920px
        // 920: {
        //     slidesPerView: 4,
        // }
    }
})

var mainSecondSwiper = new Swiper('.swiper-children', {
    slidesPerView: 1,
    spaceBetween: 0,
    centeredSlides: false,
    // autoplay: {
    //     delay: 1000,
    //     // disableOnInteraction: false,
    // },
    navigation: {
        nextEl: ".next-btn",
        prevEl: ".prev-btn",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    on: {
        init() {
            this.autoplay.stop();
            this.el.addEventListener('mouseenter', () => {
                setTimeout(() => this.autoplay.start(), 200);
            });
        
            this.el.addEventListener('mouseleave', () => {
                this.autoplay.stop();
            });
        }
    },
})

if (document.querySelector('.share-buttons')) {
    const shareBtns = document.querySelector('.share-buttons.hide')
    const copyPath = document.querySelector('.copypath')

    document.querySelector('.share-link').addEventListener('click', function() {
        if (shareBtns) {
            shareBtns.classList.toggle('hide')
        }
    })

    copyPath.addEventListener('click', function(e) {
        e.preventDefault()
        copyPath.innerHTML = 'Скопировано'
        copyPath.style.color = '#212529'
        copyPath.style.width = '100%'
        copyPath.style.padding = '0'
        copyPath.style.backgroundImage = 'none'


        const textArea = document.createElement("textarea");
        textArea.value = e.target.getAttribute('href');
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        try {
            console.log('copy');
            document.execCommand('copy');
        } catch (err) {
            console.error('Unable to copy to clipboard', err);
        }
        document.body.removeChild(textArea);

    })

}
