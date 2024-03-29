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

namespace Konceiver\Badges\Tests\Unit\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Konceiver\Badges\Models\Badge;
use Konceiver\Badges\Tests\TestCase;

/**
 * @covers \Konceiver\Badges\Models\Badge
 */
class BadgeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_be_found_by_its_slug(): void
    {
        $label = $this->createBadge();

        $this->assertSame(Badge::findBySlug($label->slug)->id, $label->id);
    }

    private function createBadge(): Badge
    {
        return Badge::create([
            'name'        => $this->faker->firstName,
            'description' => $this->faker->paragraph,
            'color'       => $this->faker->hexColor,
        ]);
    }
}
