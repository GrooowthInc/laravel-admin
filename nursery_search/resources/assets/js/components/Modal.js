
/**
 * Modal
 * @export
 * @class Modal
 */

export default class Modal {

  /**
   * Creates an instance of Modal.
   * @constructor
   */
  constructor(opts) {
    const defaults = {
      open: '[data-bns-modal="open"]',
      close: '[data-bns-modal="close"]',
      overlay: '[data-bns-modal="overlay"]',
      active: 'is-active',
      fixed: 'is-fixed',
      event: '.Modal'
    };
    this.conf = Object.assign({}, defaults, opts);
    this._init();
  }

  /**
   * _init
   * @private
   */
  _init() {
    this._defaultModal();
  }
  _defaultModal() {
    return null;
  }
}

// 通常モーダル
export class ModalDefault extends Modal {
  constructor(opts) {
    super();
    this.conf = Object.assign({}, opts);
    this._init();
  }
  /**
   * _init
   * @private
   */
  _defaultModal() {
    const { open, close, overlay, active, fixed, event } = this.conf;
    const self = this;

    $(document).on(`click${event}`, open, (e)=>{
      e.preventDefault();
      const attrHref = $(e.currentTarget).attr('href');
      $(attrHref).modal('show');
      $(overlay).addClass(active);
      $('body').addClass(fixed);
    });

    $(document).on(`click${event}`, close, overlay, (e)=>{
      e.preventDefault();
      // const attrHref = '#' + $(e).parents('.modal').attr('id');
      $('.modal').modal('hide');
      $(overlay).removeClass(active);
      $('body').removeClass(fixed);
    });
  }
}
