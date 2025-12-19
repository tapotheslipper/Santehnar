@props([
    'title' => null,
    'headClass' => '',
    'bodyClass' => '',
    'subTitle' => '',
    'subLink' => '',
])

<section {{ $attributes->merge(['class' => '']) }}>
    @if($title)
        <div class="section-head {{ $headClass }}">
            <h2 class="section-head__title">{{ $title }}</h2>
            
            @if($subTitle && $subLink)
                <a href="{{ Route::has($subLink) ? route($subLink) : url($subLink) }}">{{ $subTitle }}</a>
            @endif
        </div>
    @endif
    
    @if($slot->isNotEmpty())
        <div class="section-body {{ $bodyClass }}">
            {{ $slot }}
        </div>
    @endif
</section>
