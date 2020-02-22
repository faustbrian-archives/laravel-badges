<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Invitations.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use KodeKeep\Badges\Models\Badge;

return [

    'models' => [

        /*
         * When using the "HasBadges" trait from this package, we need to
         * know which Eloquent model should be used to retrieve your badges.
         */

        'badge' => Badge::class,

    ],

    'tables' => [

        /*
         * When using the "HasBadges" trait from this package, we need to know which
         * table should be used to store your badges. We have chosen a basic
         * default value but you may easily change it to any table you like.
         */

        'badges' => 'badges',

        /*
         * When using the "HasBadges" trait from this package, we need to know which
         * table should be used to store your members. We have chosen a basic
         * default value but you may easily change it to any table you like.
         */

        'model_has_badges' => 'model_has_badges',

    ],

];
