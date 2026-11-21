<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class PagesTest extends TestCase
{
    public function test_home_page_is_reachable(): void
    {
        $this->get('/')->assertOk()->assertViewIs('welcome');
    }

    public function test_about_page_is_reachable(): void
    {
        $this->get('/about')->assertOk()->assertViewIs('about');
    }

    public function test_gallery_page_is_reachable(): void
    {
        $this->get('/gallery')->assertOk()->assertViewIs('gallery');
    }

    public function test_contact_page_is_reachable(): void
    {
        $this->get('/contact')->assertOk()->assertViewIs('tech');
    }

    public function test_navigation_labels_are_consistent(): void
    {
        $html = $this->get('/')->getContent();

        $this->assertStringNotContainsString('Tech Specs', $html);
        $this->assertStringNotContainsString('href="#"', $html);
    }

    public function test_pages_do_not_reference_missing_assets(): void
    {
        foreach (['/', '/about', '/gallery', '/contact'] as $path) {
            $html = $this->get($path)->getContent();
            $this->assertStringNotContainsString('img/gallery/gallery-4.jpg', $html);
        }
    }
}
