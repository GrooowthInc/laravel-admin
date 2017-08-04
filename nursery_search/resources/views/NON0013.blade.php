@extends('layouts.default')
<?php
  $title = 'FAQ';
  $description = 'FAQのページです';
  $keywords = '保活ナビ,FAQページ';
  $catchtext = 'FAQのページです';
?>
@section('title', $title)
@section('description', $description)
@section('keywords', $keywords)
@section('catchtext', $catchtext)

@section('contents')
<article class="bns-article">
  <section class="bns-section">
    <h2 class="bns-title-level2">FAQ</h2>
    <div class="bns-accordion">
      <ul class="bns-accordion-list">
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__top"></i>
            <span class="bns-accordion__text">1日の流れはどのような感じですか？</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nesciunt eveniet, eos doloribus praesentium ratione. Similique natus <a href="#" class="bns-text-link">nobis</a> voluptatibus magnam quasi, repellendus neque dolore, exercitationem quae, esse beatae doloribus sapiente?</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__top"></i>
            <span class="bns-accordion__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dolor architecto, hic velit?</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nesciunt eveniet, eos doloribus praesentium ratione. Similique natus <a href="#" class="bns-text-link">nobis</a> voluptatibus magnam quasi, repellendus neque dolore, exercitationem quae, esse beatae doloribus sapiente?</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__top"></i>
            <span class="bns-accordion__text">1日の流れはどのような感じですか？</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nesciunt eveniet, eos doloribus praesentium ratione. Similique natus <a href="#" class="bns-text-link">nobis</a> voluptatibus magnam quasi, repellendus neque dolore, exercitationem quae, esse beatae doloribus sapiente?</p>
          </div>
        </li>
        <li class="bns-accordion-list__item">
          <a href="javascript: void(0);" class="bns-accordion__title" data-bns-accordion="trigger">
            <i class="bns-icon-carret__top"></i>
            <span class="bns-accordion__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dolor architecto, hic velit?</span>
          </a>
          <div class="bns-accordion__body" data-bns-accordion="content">
            <p class="bns-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nesciunt eveniet, eos doloribus praesentium ratione. Similique natus <a href="#" class="bns-text-link">nobis</a> voluptatibus magnam quasi, repellendus neque dolore, exercitationem quae, esse beatae doloribus sapiente?</p>
          </div>
        </li>
      </ul>
    </div><!-- /.bns-accordion -->
  </section>

  <section class="bns-section">
    {!! Breadcrumbs::render('faq',$title ) !!}
  </section><!-- /.bns-section -->
</article>
@stop