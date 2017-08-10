
/**
 * SearchLocation
 * @export
 * @class SearchLocation
 */

export default class SearchLocation  {

  /**
   * Creates an instance of SearchLocation.
   * @constructor
   */
  constructor(opts) {
    const defaults = {
      trigger: '[data-bns-searchlocation="trigger"]',
      event: '.SearchLocation'
    };
    this.conf = Object.assign({}, defaults, opts);
    this._init();
  }

  /**
   * _init
   * @private
   */
  _init() {
    const { trigger, event } = this.conf;
    const self = this;

    $(document).on(`click${event}`, `${trigger}`, (e)=> {
      e.preventDefault();
      
    });
  }
}