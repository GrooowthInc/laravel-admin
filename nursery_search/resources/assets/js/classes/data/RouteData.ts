import _ from 'lodash';

import Vue0001 from '../../components/Vue0001.vue';
import Vue0011 from '../../components/Vue0011.vue';

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
        component: Vue0001,
        name:      'citySearch',
        display:   '市区町村検索'
      },
      wayside: {
        path:      '/0003',
        component: Vue0001,
        name:      'wayside',
        display:   '沿線選択'
      },
      searchMap: {
        path:      '/0005',
        component: Vue0001,
        name:      'searchMap',
        display:   '地図検索'
      },
      searchResult: {
        path:      '/0006',
        component: Vue0001,
        name:      'searchResult',
        display:   '検索結果一覧'
      },
      facilityDetail: {
        path:      '/0007',
        component: Vue0001,
        name:      'facilityDetail',
        display:   '施設詳細'
      },
      agreement: {
        path:      '/0008',
        component: Vue0001,
        name:      'agreement',
        display:   'ご利用規約'
      },
      nurserySelectPoint: {
        path:      '/0009',
        component: Vue0001,
        name:      'nurserySelectPoint',
        display:   '保育園選びのポイント'
      },
      service: {
        path:      '/0010',
        component: Vue0001,
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
        component: Vue0001,
        name:      'recommendNews',
        display:   'おすすめ記事一覧'
      },
      faq: {
        path:      '/0013',
        component: Vue0001,
        name:      'faq',
        display:   'FAQ'
      },
      siteMap: {
        path:      '/0014',
        component: Vue0001,
        name:      'siteMap',
        display:   'サイトマップ'
      },
      error: {
        path:      '/0015',
        component: Vue0001,
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
