
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
      selector: '[data-search-map]',
      attrLat: 'data-search-map-lat',
      attrLng: 'data-search-map-lng',
      attrZoom: 'data-search-map-zoom',
      initMap: {},
      maxZoom: 18,
      minZoom: 9,
      event: '.SearchMap'
    };
    this.conf = Object.assign({}, defaults, opts);
    if ($(this.conf.selector).get(0)) {
      this._init();
    }
  }

  /**
   * _init
   * @private
   */
  _init() {
    const { selector, attrLat, attrLng, attrZoom, initMap, maxZoom, minZoom } = this.conf;
    
    let SearchMap = new google.maps.Map($(selector).get(0), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 8
    });
    
    // $(document).on(`click${event}`, target, (e)=>{
    //   e.preventDefault();
    //   $(e.currentTarget).toggleClass(active);
    // });
  }
}