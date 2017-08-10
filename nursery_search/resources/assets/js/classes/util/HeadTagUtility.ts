export default class HeadTagUtility {

    /**
     * title、meta タグを指定します
     * 
     * @param title 
     * @param keywords 
     * @param description 
     */
    public static setInfo(
      title: string,
      keywords: string,
      description: string
    ): void {
      document.title = title;
      const metas = document.head.children;
      for (let i = 0; i < metas.length; i++) {
        const name     = metas[i].getAttribute('name');
        if (name !== null && name === 'Keywords') {
          metas[i].setAttribute('content', keywords);
          continue;
        }
        
        const property = metas[i].getAttribute('property');
        if (property === null) continue;
        if (property === 'og:title')       metas[i].setAttribute('content', title);
        if (property === 'og:description') metas[i].setAttribute('content', description);
      }
    }

}
