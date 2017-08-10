import heightLine from 'heightline';


/**
 * HeightLine
 * @export
 * @class HeightLine
 */

export default class HeightLine {

  /**
   * Creates an instance of HeightLine.
   * @constructor
   */
  constructor(opts) {
    const defaults = {
      target: null,
      event: '.HeightLine'
    };
    this.conf = Object.assign({}, defaults, opts);
    this._init();
  }

  /**
   * _init
   * @private
   */
  _init() {
    const { target, event } = this.conf;
    const self = this;

    $(target).heightLine();

  }
}
