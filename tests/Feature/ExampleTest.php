<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_homepage_contains_complete_seo_metadata(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('<html lang="fa" dir="rtl">', false)
            ->assertSee('<title>حمیدرضا نیاکان | متخصص Laravel و توسعه بک‌اند</title>', false)
            ->assertSee('<meta name="description" content="برای همکاری و اجرای پروژه‌های بک‌اند', false)
            ->assertSee('<link rel="canonical" href="http://localhost">', false)
            ->assertSee('<meta property="og:image:alt"', false)
            ->assertSee('<meta name="twitter:card" content="summary">', false)
            ->assertSee('https://t.me/DeveloperProgrammer', false)
            ->assertSee('https://wa.me/989178223037', false)
            ->assertSee('"@type":"ProfilePage"', false)
            ->assertSee('"@type":"Person"', false)
            ->assertSee('"@type":"Occupation"', false)
            ->assertSee('"@type":"ContactPoint"', false)
            ->assertSee('"@type":"WebSite"', false);

        preg_match(
            '/<script type="application\/ld\+json">\s*(.*?)\s*<\/script>/s',
            $response->getContent(),
            $structuredData,
        );

        $this->assertNotEmpty($structuredData[1] ?? null);
        $this->assertIsArray(json_decode($structuredData[1], true, flags: JSON_THROW_ON_ERROR));
    }
}
