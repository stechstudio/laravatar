<?php

namespace STS\Laravatar\Components;

use Illuminate\View\Component;

class Initials extends Component
{
    public $color;

    public $initials;

    public function __construct($first = '', $last = '')
    {
        $this->initials = static::getInitials($first, $last);
        $this->color = static::getColor($first . $last . $this->initials);
    }

    public function render()
    {
        return view('laravatar::components.initials');
    }

    /**
     * Return a color deterministically from a source string.
     * 
     * @param string $source
     * @return string
     */
    public static function getColor($source)
    {
        $seed = 0;
        
        for ($i = 0; $i < strlen($source); $i++) {
            $seed += ord(substr($source, $i, 1));
        }
        srand($seed);

        $colors = config('laravatar.fallback.colors');
        return $colors[rand(0, count($colors) - 1)];
    }

    /**
     * Return two initials or '??' from a first and/or last name.
     * 
     * @param string $first
     * @param string $last
     * @return string
     */
    public static function getInitials($first = '', $last = '')
    {
        if (!!$first && !!$last) {
            return substr($first, 0, 1) . substr($last, 0, 1);
        }
        
        if (!!$first) {
            return substr($first, 0, 2);
        }
        
        if (!!$last) {
            return substr($last, 0, 2);
        }

        return '??';
    }
}
