<?php

return [
    'gravatar' => [
        // Gravatar users can set a rating to descibe their avatar's level of objectionable content.
        // The ratings are based on US movie ratings: g, pg, r, x
        // Each rating includes those below itself. e.g. allowing "R-rated" avatars will also
        // allow PG and G-rated avatars.
        //
        // See Gravatar's documentation for specific guidelines:
        // https://en.gravatar.com/site/implement/images/
        'rating' => 'g',

        // What to display if no Gravatar exists. Will be passed as the 'd' parameter.
        //
        // See Gravatar's documentation for all available options:
        // https://en.gravatar.com/site/implement/images/
        'default' => 'blank',
    ],

    'fallback' => [
        // If a user does not have a Gravatar, the app will use one of the following colors
        // as the background for their initials.
        'colors' => [
            '#191028',
            '#46af45',
            '#a1d685',
            '#453e78',
            '#7664fe',
            '#833129',
            '#9ec2e8',
            '#dc534b',
            '#e18d79',
            '#d6b97b',
            '#216c4b',
            '#d365c8',
            '#afaab9',
        ],

        // If a user does not have a Gravatar, display their initials using these font families.
        'font_family' => 'Roboto, Helvetica, Arial, sans-serif',
    ],
];
