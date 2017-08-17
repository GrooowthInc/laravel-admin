<footer class="bns-footer">
  <h4 class="bns-title-level4">ご利用について</h4>
  <p class="bns-text">保育園情報は、ベネッセコーポレーション「保活ナビ」が独自に実施したアンケートの内容を基に掲載しております。<br>掲載内容については、調査時点の内容となりますので、必ず各自治体が公開している最新情報等をご確認ください。</p>
  <a href="#" class="bns-text-link">会社案内</a>
  <p class="bns-footer-copyright">&copy; Benesse&nbsp;Corporation&nbsp;2000&nbsp;-&nbsp;2014.</p>
  @if (env('APP_ENV') != 'production')
    <div class="ui label ">v.{{ ComposerBump::getVersion() }}</div>
  @endif
</footer><!-- .bns-footer -->