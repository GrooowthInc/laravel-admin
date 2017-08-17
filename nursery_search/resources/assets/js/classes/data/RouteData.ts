import _ from 'lodash';

import Vue0001 from '../../components/Vue0001.vue';
import Vue0002 from '../../components/Vue0002.vue';
import Vue0003 from '../../components/Vue0003.vue';
import Vue0004 from '../../components/Vue0004.vue';
import Vue0005 from '../../components/Vue0005.vue';
import Vue0006 from '../../components/Vue0006.vue';
import Vue0007 from '../../components/Vue0007.vue';
import Vue0008 from '../../components/Vue0008.vue';
import Vue0009 from '../../components/Vue0009.vue';
import Vue0010 from '../../components/Vue0010.vue';
import Vue0011 from '../../components/Vue0011.vue';
import Vue0012 from '../../components/Vue0012.vue';
import Vue0013 from '../../components/Vue0013.vue';
import Vue0014 from '../../components/Vue0014.vue';
import Vue0015 from '../../components/Vue0015.vue';

export default class RouteData {

    public static readonly ROUTES = {
      top: { 
        path:      '/0001', 
        component: Vue0001, 
        name:      'top',
        display:   'トップ'
      },
      citySearch: {
        path:      '/0002',
        component: Vue0002,
        name:      'citySearch',
        display:   '市区町村検索'
      },
      wayside: {
        path:      '/0003',
        component: Vue0003,
        name:      'wayside',
        display:   '沿線選択'
      },
      NON0004: { // routes/web.php を見てもこいつだけ名前がNON0004ってなっている。なんでだろう？
        path:      '/0004',
        component: Vue0004,
        name:      'NON0004',
        display:   '駅名検索'
      },
      searchMap: {
        path:      '/0005',
        component: Vue0005,
        name:      'searchMap',
        display:   '地図検索'
      },
      searchResult: {
        path:      '/0006',
        component: Vue0006,
        name:      'searchResult',
        display:   '検索結果一覧'
      },
      facilityDetail: {
        path:      '/0007',
        component: Vue0007,
        name:      'facilityDetail',
        display:   '施設詳細'
      },
      agreement: {
        path:      '/0008',
        component: Vue0008,
        name:      'agreement',
        display:   'ご利用規約'
      },
      nurserySelectPoint: {
        path:      '/0009',
        component: Vue0009,
        name:      'nurserySelectPoint',
        display:   '保育園選びのポイント'
      },
      service: {
        path:      '/0010',
        component: Vue0010,
        name:      'service',
        display:   'サービス概要'
      },
      seeLater: { 
        path:      '/0011', 
        component: Vue0011, 
        name:      'seeLater', 
        display:   'あとでみる一覧' 
      },
      recommendNews: {
        path:      '/0012',
        component: Vue0012,
        name:      'recommendNews',
        display:   'おすすめ記事一覧'
      },
      faq: {
        path:      '/0013',
        component: Vue0013,
        name:      'faq',
        display:   'FAQ'
      },
      siteMap: {
        path:      '/0014',
        component: Vue0014,
        name:      'siteMap',
        display:   'サイトマップ'
      },
      error: {
        path:      '/0015',
        component: Vue0015,
        name:      'error',
        display:   'エラー画面'
      }
    }

    /**
     * title、meta タグを指定します
     * 
     * @param title 
     * @param keywords 
     * @param description 
     */
    /**
     * vue-routerの設定用配列を取得します。
     */
    public static getForVueRouter(): {
      path:      string,
      component: object,
      name:      string
    }[] {
      return _.map(
        RouteData.ROUTES,
        (route) => {
          return _.pick(route, ['path', 'component', 'name'])
        }
      );
    }

}
