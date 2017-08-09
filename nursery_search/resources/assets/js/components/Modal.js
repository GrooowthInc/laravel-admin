import * as Cookies from 'js-cookie';

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
      openTooltip: '[data-bns-modal="open-tooltip"]',
      tooltipTrigger: '[data-bns-tooltip="trigger"]',
      tooltipCloseBtn: '[data-bns-tooltip="close"]',
      tooltipContent: '[data-bns-tooltip="content"]',
      close: '[data-bns-modal="close"]',
      closeTooltip: '[data-bns-modal="close-tooltip"]',
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

// 初回だけツールチップが出てくるモーダル
export class ModalTooltip extends Modal {
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
    const { openTooltip, closeTooltip, tooltipTrigger, tooltipCloseBtn, tooltipContent, overlay, active, fixed, event } = this.conf;
    const self = this;
    let period = 365;

    if(Cookies.get('access') == undefined) {
      // cookie追加
      Cookies.set('access', 'on', { expires: period });

      $(document).on(`click${event}`, openTooltip, (e)=>{
        e.preventDefault();
        const attrHref = $(e.currentTarget).attr('href');
        $(attrHref).modal('show');
        $(overlay).addClass(active);
        $('body').addClass(fixed);
      });

      $(document).on(`click${event}`, closeTooltip, overlay, (e)=>{
        e.preventDefault();
        // const attrHref = '#' + $(e).parents('.modal').attr('id');
        $('.modal').modal('hide');
        $(overlay).removeClass(active);
        $('body').removeClass(fixed);
      });
      console.log('初回アクセス');

    // 2回目以降のアクセス
    } else {
      $(document).on(`click${event}`, tooltipTrigger, (e)=>{
        e.preventDefault();
        $(tooltipContent).fadeIn('100');
      });

      $(document).on(`click${event}`, openTooltip, (e)=>{
        e.preventDefault();
        const attrHref = $(e.currentTarget).attr('href');
        $(attrHref).modal('show');
        $(overlay).addClass(active);
        $('body').addClass(fixed);
      });

      $(document).on(`click${event}`, closeTooltip, overlay, (e)=>{
        e.preventDefault();
        // const attrHref = '#' + $(e).parents('.modal').attr('id');
        $('.modal').modal('hide');
        $(overlay).removeClass(active);
        $('body').removeClass(fixed);
      });
      console.log('2回目以降のアクセス');
    }
  }
}