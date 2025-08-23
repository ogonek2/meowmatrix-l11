@extends('layouts.main.app')

@section('title', $page->title)

@section('content')
    <section class="navigation-page-bread box content-element">
        <nav class="breadcrumbs padding-box" aria-label="breadcrumb">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="/catalog" class="breadcrumbs__link">Каталог</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="/catalog/shoes" class="breadcrumbs__link">Обувь</a>
                </li>
                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__current">{{ $page->title }}</span>
                </li>
            </ul>
        </nav>
    </section>
    <div class="box content-element section-content padding-box">
        <div class="content-el">
            <h1 class="head-t-class">{{ $page->title }}</h1>
            <div class="text-fs-class">{!! $page->body !!}</div>
        </div>
    </div>
@endsection
