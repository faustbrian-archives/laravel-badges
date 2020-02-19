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

namespace KodeKeep\Badges\Tests\Unit\Concerns;

use KodeKeep\Badges\Models\Badge;
use KodeKeep\Badges\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use KodeKeep\Badges\Tests\Unit\ClassThatHasBadges;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Collection;

/**
 * @covers \KodeKeep\Badges\Concerns\HasBadges
 */
class HasBadges extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function morphs_to_a_badgeable(): void
    {
        $this->loadLaravelMigrations(['--database' => 'testbench']);
        $this->artisan('migrate', ['--database' => 'testbench'])->run();

        $user = ClassThatHasBadges::create([
            'name'     => 'John Doe',
            'email'    => 'john@doe.com',
            'password' => 'password',
        ]);

        $user->badges()->create([
            'name'        => $this->faker->firstName,
            'description' => $this->faker->paragraph,
        ]);

        $this->assertInstanceOf(MorphToMany::class, $user->badges());
        $this->assertInstanceOf(Collection::class, $user->badges);
    }
}
