@if ($breadcrumbs)
<div class="bns-breadcrumb">
  <ol class="bns-breadcrumb-list">
    @foreach($breadcrumbs as $breadcrumb)
      @if(!$breadcrumb->last)
        <li class="bns-breadcrumb-list__item"><a href="{{ $breadcrumb->url }}" class="bns-breadcrumb-list__link">{{ $breadcrumb->title }}</a></li>
      @elseif($breadcrumb->last && $breadcrumb->title ==="トップ")
        <li class="bns-breadcrumb-list__item"><a href="{{ $breadcrumb->url }}" class="bns-breadcrumb-list__link">{{ $breadcrumb->title }}</a></li>
      @else
        <li class="bns-breadcrumb-list__item">{{ $breadcrumb->title }}</li>
      @endif
    @endforeach
  </ol>
</div><!-- /.end bns-breadcrumb -->
@endif