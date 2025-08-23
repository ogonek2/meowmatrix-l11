@extends('layouts.main.app')

@section('title', $post->title)

@section('content')
    <section class="navigation-page-bread box content-element">
        <nav class="breadcrumbs padding-box" aria-label="breadcrumb">
            <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item">
                    <a href="/" class="breadcrumbs__link">Главная</a>
                </li>
                <li class="breadcrumbs__item">
                    <a href="{{ route('posts.show', $post) }}" class="breadcrumbs__link">Пости</a>
                </li>
                @if($post->categories && $post->categories->count())
                    @foreach($post->categories as $category)
                        <li class="breadcrumbs__item">
                            <a href="#" class="breadcrumbs__link">{{ $category->name }}</a>
                        </li>
                    @endforeach
                @endif
                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__current">{{ $post->title }}</span>
                </li>
            </ul>
        </nav>
    </section>

    <div class="box content-element section-content padding-box">
        <div class="content-el">
            <h1 class="head-t-class">{{ $post->title }}</h1>
            <div class="text-fs-class">{!! $post->body !!}</div>
        </div>
    </div>
@endsection
