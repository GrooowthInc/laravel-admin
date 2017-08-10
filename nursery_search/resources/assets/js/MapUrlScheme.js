
/**
 * MapUrlScheme
 * @export
 * @class MapUrlScheme
 */

export default class MapUrlScheme {

  /**
   * Creates an instance of MapUrlScheme.
   * @constructor
   */
  constructor(opts) {
    const defaults = {
      objectName: '[data-bns-url-scheme]',
      event: '.MapUrlScheme'
    };
    this.conf = Object.assign({}, defaults, opts);
    this._init();
  }

  /**
   * _init
   * @private
   */
  _init() {
    const { objectName, event } = this.conf;
    $(document).on(`click${event}`, objectName, (e)=> {
      e.preventDefault();
      const target = $(e.target).attr('href');
      let iOS_Scheme = 'comgooglemaps://';
      let iOS_Store = 'https://itunes.apple.com/jp/app/id585027354';
      if ($('html').hasClass('ios')) {
        const urlPalams = target.replace(/\/\/maps.google.com\/maps/g, iOS_Scheme);
        
        $(objectName).attr('href', urlPalams);
        location.href = urlPalams;
        const _timerId = setTimeout(function() {
          location.href = iOS_Store;
        }, 500);
        
      } else {
        window.open(target, '_blank');
      }
    });
  }
}