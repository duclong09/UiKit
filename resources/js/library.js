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
  $(document).ready(function () {
    HT.openCategoryDropdown()
  })
})(jQuery)
