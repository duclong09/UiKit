;(function ($) {
  'use strict'
  var HT = {}
  HT.openCategoryDropdown = () => {
    $('.categories-dropdown').slideUp()
    $('.department-wrapper').click(function () {
      let _this = $(this)
      let isOpen = _this.attr('data-open')
      if (isOpen == 0) {
        $('.department-wrapper > span .uk-icon').css({
            'rotate' : '-180deg',
            'transition': 'all 0.4s ease'
        })
        _this.attr('data-open', 1)
      } else {
        $('.department-wrapper > span .uk-icon').css({
            'rotate' : '0deg',
            'transition': 'all 0.4s ease'
        })
        _this.attr('data-open', 0)
      }
      $('.categories-dropdown').slideToggle()
    })
  }

  HT.swiper = ()=>{
    var swiper = new Swiper(".panel-slide .swiper-container", {
      loop: false,
      pagination: {
        el: '.swiper-pagination',
      },
      // spaceBetween: 20,
      slidesPerView: 1,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      }
      // breakpoints: {

      // }
    });
  }

  $(document).ready(function () {
    HT.openCategoryDropdown()
    HT.swiper()
  })
})(jQuery)
