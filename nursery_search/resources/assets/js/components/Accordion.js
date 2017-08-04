
/**
 * Accordion
 * @export
 * @class Accordion
 */

export default class Accordion {

  /**
   * Creates an instance of Accordion.
   * @constructor
   */
  constructor(opts) {
    const defaults = {
      trigger: '[data-bns-accordion="trigger"]',
      content: '[data-bns-accordion="content"]',
      active: 'is-active',
      event: '.Accordion'
    };
    this.conf = Object.assign({}, defaults, opts);
    this._init();
  }

  /**
   * _init
   * @private
   */
  _init() {
    const { trigger, content, active, event } = this.conf;
    const self = this;
    
    $(document).on(`click${event}`, trigger, (e)=>{
      e.preventDefault();
      $(e.currentTarget).toggleClass(active);
      $(e.currentTarget).next(content).slideToggle('500');
      // $(content).slideToggle('500');
      return false;
    });
  }
}