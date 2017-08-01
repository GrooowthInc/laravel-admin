
/**
 * TextOverflow
 * @export
 * @class TextOverflow
 */

export default class TextOverflow  {

  /**
   * Creates an instance of MatchHeight.
   * @constructor
   */
  constructor(opts) {
    const defaults = {
      target: '[data-bns-textOverflow="target"]',
      count: 30,
      event: '.TextOverflow'
    };
    this.conf = Object.assign({}, defaults, opts);
    this._init();
  }

  /**
   * _init
   * @private
   */
  _init() {
    const { target, count, event } = this.conf;
    const self = this;

    $(target).each(function() {
      const target = $(this).text(),
            textLength = target.length;
      if ( textLength > count ) {
        // 16文字まで表示
        let showText = target.substring( 0, count );
        // 17文字から三点リーダ
        let hideText = target.substring( count, textLength );
        let insertText = showText;
        insertText += '…';
        $(this).html(insertText);
      };
    });
  }
}
