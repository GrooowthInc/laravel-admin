import slick from 'slick-carousel';

/**
 * Slick
 * @export
 * @class Slick
 */

export default class Slick {

  /**
   * Creates an instance of Slick.
   * @constructor
   */
  constructor(opts) {
    const defaults = {
      container: null,
      target: null,
      prev: null,
      next: null,
      height: '[data-bns-slick="height"]',
      event: '.Slick',
      setting: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        infinite: true,
        lazyLoad: 'progressive',
        autoplay: false,
        autoplaySpeed: 5000,
        adaptiveHeight: false,
        centerMode: false,
        centerPadding: null,
        swipe: true,
        swipeToSlide: true,
        vertical: false,
        verticalSwiping: false,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      }
    };
    this.conf = Object.assign({}, defaults, opts);
    this._init();
  }

  /**
   * _init
   * @private
   */
  _init() {
    this._defaultSlick();
  }
  // 親は空にしておく
  _defaultSlick() {
    return null;
  }

}

// 通常カルーセル
export class Carousel extends Slick {
  constructor(opts) {
    super();
    this.conf = Object.assign({}, opts);
    this._init();
  }
  /**
   * init
   * 通常カルーセル
   */
  _defaultSlick() {
    const { target, prev, next, setting, event } = this.conf;
    const self = this;

    $(target).slick(setting);
    $(prev).on('click', function(){
      $(target).slickPrev();
    });
    $(next).on('click', function(){
      $(target).slickNext();
    });
  }
}