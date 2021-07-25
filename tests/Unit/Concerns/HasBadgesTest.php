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

namespace Konceiver\Badges\Tests\Unit\Concerns;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Konceiver\Badges\Tests\TestCase;
use Konceiver\Badges\Tests\Unit\ClassThatHasBadges;

/**
 * @covers \Konceiver\Badges\Concerns\HasBadges
 */
class HasBadgesTest extends TestCase
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
