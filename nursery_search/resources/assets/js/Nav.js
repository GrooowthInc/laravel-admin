
/**
 * Nav
 * @export
 * @class Nav
 */

export default class Nav {

  /**
   * Creates an instance of Nav.
   * @constructor
   */
  constructor(opts) {
    const defaults = {
      target: '[data-bns-nav="target"]',
      content: '[data-bns-nav="content"]',
      main: '[data-bns-nav="main"]',
      fixed: 'is-fixed',
      event: '.Nav'
    };
    this.conf = Object.assign({}, defaults, opts);
    this._init();
  }

  /**
   * _init
   * @private
   */
  _init() {
    const { target, content, main, fixed, event } = this.conf;
    const self = this;

    if ($(target).length !== 0 && window.innerWidth) {
      const navHeight = $(target).outerHeight(),
            navPos = $(target).offset().top;

      $(window).on('load scroll', function() {
        const value = $(this).scrollTop();
        if ( value > navPos ) {
          $(target).addClass(fixed);
          $(main).addClass(fixed);
        } else {
          $(target).removeClass(fixed);
          $(main).removeClass(fixed);
        }
      });
    }
  }
}