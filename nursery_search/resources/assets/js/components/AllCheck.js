
/**
 * AllCheck
 * @export
 * @class AllCheck
 */

export default class AllCheck {

  /**
   * Creates an instance of AllCheck.
   * @constructor
   */
  constructor(opts) {
    const defaults = {
      container: '[data-bns-checkbox="container"]',
      release: '[data-bns-checkbox="release-trigger"]',
      check: '[data-bns-checkbox="check"]',
      active: 'is-active',
      event: '.AllCheck'
    };
    this.conf = Object.assign({}, defaults, opts);
    this._init();
  }

  /**
   * _init
   * @private
   */
  _init() {
    const { container, release, check, active, event } = this.conf;
    const self = this;

    // 背景色変更
    $(document).on(`change${event}`, check, (e)=>{
      e.preventDefault();
      $('input').closest('label').removeClass(active);
      $(':checked').closest('label').addClass(active);
    });

    // 一括解除
    $(document).on(`click${event}`, release, (e)=>{
      e.preventDefault();
      let items = $(container).find('label').children('input');
      if($(e.currentTarget).is(':checked')) { //全解除がchecked
        $(items).prop('checked', false);
        $(items).parent('label').removeClass(active);
      }
    });
  }
}