<svg {{ $attributes->merge(['class' => 'laravatar laravatar-fallback']) }} xmlns="http://www.w3.org/2000/svg" viewbox="0 0 122 122">
    <rect x="-1" y="-1" width="122" height="122" fill="{{ $color }}"/>
    <text fill="#ffffff" x="60" y="80" font-size="52" font-family="{{ config('laravatar.fallback.font_family') }}" text-anchor="middle" font-weight="bold">{{ $initials }}</text>
 </svg>
