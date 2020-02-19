<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Badges.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Badges\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use KodeKeep\Badges\Models\Badge;

trait HasBadges
{
    public function badges(): MorphToMany
    {
        return $this->morphToMany(Badge::class, 'model', 'badgeables');
    }
}
