<?php

namespace STS\Laravatar\Components;

use Illuminate\View\Component;

class Gravatar extends Component
{
    public $url;

    public function __construct($email = null, $size = 100, $default = null, $rating = null)
    {
        $useDefault = !!$default ? $default : config('laravatar.gravatar.default');
        $useRating = !!$rating ? $rating : config('laravatar.gravatar.rating');

        $this->url = !!$email ?
            '//www.gravatar.com/avatar/' . static::sanitizeEmail($email) . '?s=' . $size . '&d=' . $useDefault . '&rating=' . $useRating :
            '//www.gravatar.com/avatar/NOHASH?s=' . $size . '&d=' . $useRating . '&f=y';
    }

    public function render()
    {
        return view('laravatar::components.gravatar');
    }

    /**
     * Trims and lowercases an email address.
     * 
     * @param string $email
     * @return string
     */
    private static function sanitizeEmail($email)
    {
        return md5(strtolower(trim($email)));
    }
}
