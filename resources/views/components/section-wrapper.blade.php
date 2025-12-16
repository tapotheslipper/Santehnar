@props([
    'title' => null,
    'id' => null,
    'class' => '',
    'headClass' => '',
    'bodyClass' => '',
])

<section @if($id) id="{{ $id }}" @endif class="{{ $class }}">
    @if($title)
    <div class="section-head {{ $headClass }}">
        <h2 class="section-head__title">{{ $title }}</h2>
    </div>
    @endif
    <div class="section-body {{ $bodyClass }}">
        {{ $slot }}
    </div>
</section>
