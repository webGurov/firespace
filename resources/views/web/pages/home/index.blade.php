<x-base-layout>
    <x-slot:meta>
        <title>{{ $title ?? 'Название страницы' }} - {{ $site_name ?? config('app.name') }}</title>
        <meta name="title" content="{{ $meta_title ?? 'Meta-заголовок сайта' }}">
        <meta name="description" content="{{ $meta_description ?? 'Meta-описание сайта' }}">
        <meta name="keywords" content="{{ $meta_keywords ?? 'Meta-ключевые слова' }}">
        <meta property="og:title" content="{{ $meta_og_title ?? 'Meta-заголовок сайта' }}" />
        <meta property="og:description" content="{{ $meta_og_description ?? 'Meta-описание сайта' }}" />
    </x-slot:meta>
    @include('web.sections.intro.index')
    @include('web.sections.post.index')
</x-base-layout>
