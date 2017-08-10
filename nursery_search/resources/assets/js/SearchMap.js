
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
      event: '.map'
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

    // mapの表示
    let map = new google.maps.Map($(selector).get(0), {
      zoom: initMap.zoom,
      maxZoom: maxZoom,
      minZoom: minZoom,
      center: new google.maps.LatLng(initMap.lat, initMap.lng),
    });
    this._renderMap(map);
  }

  _renderMap (map) {
    let self = this;
    let marker = [];
    // ダミーデータ
    let data = [
      {"name": "モニカ人形町保育園", "type": "permission", "lat": 35.686847, "lng": 139.781360},
      {"name": 'アスク人形町駅前保育園', "type": "authentication", "lat": 35.686125, "lng": 139.781352},
      {"name": 'さくら保育園', "type": "disapproval", "lat": 35.684653, "lng": 139.784849},
      {"name": '中央区立堀留町保育園', "type": "permission", "lat": 35.687595, "lng": 139.778977},
      {"name": 'まちのてらこや保育園・学童ひろば', "type": "authentication", "lat": 35.687787, "lng": 139.782869},
      {"name": 'ダミー保育園', "type": "disapproval", "lat": 35.688299, "lng": 139.783158},
      {"name": 'とちょう保育園', "type": "disapproval", "lat": 35.689305, "lng": 139.692996},
      {"name": '新宿成子坂愛育園', "type": "authentication", "lat": 35.694393, "lng": 139.691526},
      {"name": 'ルーチェ保育園', "type": "permission", "lat": 35.695613, "lng": 139.696848},
      {"name": "たいよう保育園", "type": "permission", "lat": 35.694742, "lng": 139.705989},
      {"name": 'ベネッセ保育園', "type": "authentication", "lat": 35.691936, "lng": 139.693901},
      {"name": 'アスク神楽坂駅前保育園', "type": "disapproval", "lat": 35.702294, "lng": 139.734452},
      {"name": 'ソラスト神楽坂', "type": "permission", "lat": 35.707878, "lng": 139.734270},
      {"name": 'メリーポピンズ保育園', "type": "authentication", "lat": 35.704908, "lng": 139.728616},
      {"name": 'キッズスクエア', "type": "disapproval", "lat": 35.703630, "lng": 139.753300}
    ];

    $.each(data, function(index, facilityList) {
      let iconImg = '/images/ico_mapMarkBlue.png';
      if(facilityList.type === "permission") {
        iconImg = '/images/ico_mapMarkBlue.png';
      }
      if(facilityList.type === "authentication") {
        iconImg = '/images/ico_mapMarkGreen.png';
      }
      if(facilityList.type === "disapproval") {
        iconImg = '/images/ico_mapMarkOrange.png';
      }
      // marker立てる
      let marker = new google.maps.Marker({
        map: map,
        position: {lat: Number(facilityList.lat), lng: Number(facilityList.lng)},
        title: facilityList.name,
        icon: {
          url: iconImg,
          scaledSize: new google.maps.Size(60, 78)
        }
      });
      // ウィンドウ出す
      let infoWindow = new google.maps.InfoWindow({
        content: `<div class="sample">${facilityList.name}</div>`
      });
      marker.addListener('click', function() {
        infoWindow.open(map, marker);
      });
      // マップ押下でも閉じる
      google.maps.event.addListener(map, 'click', ()=> {
        infowindow.close();
      });
    });

  } // _renderMap
}