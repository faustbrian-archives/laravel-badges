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

namespace KodeKeep\Badges\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Badge extends Model
{
    use HasSlug;

    protected $fillable = ['name', 'description'];

    public static function findByslug(string $slug): self
    {
        return static::where('slug', $slug)->firstOrFail();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }
}
