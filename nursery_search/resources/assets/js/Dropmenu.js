
/**
 * Dropmenu
 * @export
 * @class Dropmenu
 */

export default class Dropmenu {

  /**
   * Creates an instance of Dropmenu.
   * @constructor
   */
  constructor(opts) {
    const defaults = {
      target: '[data-bns-dropmenu="target"]',
      targetNav: '[data-bns-dropmenu="target-nav"]',
      content: '[data-bns-dropmenu="content"]',
      contentNav: '[data-bns-dropmenu="content-nav"]',
      overlay: '[data-bns-dropmenu="overlay"]',
      overlayNav: '[data-bns-dropmenu="overlay-nav"]',
      close: '[data-bns-dropmenu="close"]',      
      active: 'is-active',
      event: '.Dropmenu'
    };
    this.conf = Object.assign({}, defaults, opts);
    this._init();
  }

  /**
   * _init
   * @private
   */
  _init() {
    const { target, targetNav, content, contentNav, overlay, overlayNav, close, active, event } = this.conf;
    const self = this;
    
    $(document).on(`click${event}`, target, (e)=>{
      e.preventDefault();
      $(e.currentTarget).toggleClass(active);
      $(overlay).toggleClass(active);
      $(content).slideToggle('500');
      return false;
    });
    $(document).on(`click${event}`, overlay, close, (e)=>{
      e.preventDefault();
      $(target).removeClass(active);
      $(overlay).removeClass(active);
      $(content).slideUp('500');
      return false;
    });

    $(document).on(`click${event}`, targetNav, (e)=>{
      e.preventDefault();
      $(e.currentTarget).toggleClass(active);
      $(overlayNav).toggleClass(active);
      $(contentNav).toggleClass(active);
      // $(contentNav).slideToggle('500');
      return false;
    });
    $(document).on(`click${event}`, overlayNav, close, (e)=>{
      e.preventDefault();
      $(targetNav).removeClass(active);
      $(overlayNav).removeClass(active);
      $(contentNav).removeClass(active);
      // $(contentNav).slideUp('500');
      return false;
    });
  }
}