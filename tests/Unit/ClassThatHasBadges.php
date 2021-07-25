<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Badges.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\Badges\Tests\Unit;

use Illuminate\Foundation\Auth\User;
use Konceiver\Badges\Concerns\HasBadges;

class ClassThatHasBadges extends User
{
    use HasBadges;

    public $table = 'users';

    public $guarded = [];
}
