
/**
 * SeachMap
 * @export
 * @class SeachMap
 */

export default class SeachMap {

  /**
   * Creates an instance of SeachMap.
   * @constructor
   */
  constructor(opts) {
    const defaults = {
      target: '[data-bns-seelater="target"]',
      active: 'is-active',
      event: '.SearchMap'
    };
    this.conf = Object.assign({}, defaults, opts);
    this._init();
  }

  /**
   * _init
   * @private
   */
  _init() {
    const { target, active, event } = this.conf;
    const self = this;
    
    $(document).on(`click${event}`, target, (e)=>{
      e.preventDefault();
      $(e.currentTarget).toggleClass(active);
    });
  }
}