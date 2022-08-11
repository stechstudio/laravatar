@props([
    'first' => null,
    'last' => null,
    'email' => null,
    'avatarClass' => '',
    'size' => 100,
    'zIndexStart' => 1,
    'image' => null,
])

<div {{ $attributes->merge(['class' => 'laravatar laravatar-stack', 'style' => 'position: relative;']) }}>
    @if($image)
        <img
            class="{{ $avatarClass }} laravatar-image"
            src="{{ $image }}"
            style="width: {{ $size }}px; height: {{ $size }}px; position: absolute; z-index: {{ $zIndexStart++ }};"
            alt=""
        />
    @else
        <x-laravatar::initials
            :class="$avatarClass"
            style="width: {{ $size }}px; height: {{ $size }}px; position: absolute; z-index: {{ $zIndexStart++ }};"
            alt=""
            :first="$first"
            :last="$last"
            :size="$size * 2"
        />

        @if($email)
            <x-laravatar::gravatar
                :class="$avatarClass"
                style="width: {{ $size }}px; height: {{ $size }}px; position: absolute; z-index: {{ $zIndexStart++ }};"
                alt=""
                :email="$email"
            />
        @endif
    @endif
</div>
