
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
    
    initMap.lat = Number($(selector).attr(attrLat)); // 緯度
    initMap.lng = Number($(selector).attr(attrLng)); // 軽度
    initMap.zoom = Number($(selector).attr(attrZoom)); // ズーム値

    let SearchMap = new google.maps.Map($(selector).get(0), {
      zoom: initMap.zoom,
      maxZoom: maxZoom,
      minZoom: minZoom,
      center: new google.maps.LatLng(initMap.lat, initMap.lng),
    });
    
    // $(document).on(`click${event}`, target, (e)=>{
    //   e.preventDefault();
    //   $(e.currentTarget).toggleClass(active);
    // });
  }
}