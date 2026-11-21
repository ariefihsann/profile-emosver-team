<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    private function payload(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'subject' => 'Sponsorship & Partnership',
            'message' => 'Kami tertarik bekerja sama dengan tim EMOSVER.',
        ], $overrides);
    }

    public function test_valid_submission_sends_email_and_redirects_with_success(): void
    {
        Mail::fake();

        $response = $this->from('/contact')->post('/contact/send', $this->payload());

        $response->assertRedirect('/contact');
        $response->assertSessionHas('success');

        Mail::assertSent(\Illuminate\Mail\Mailable::class, 0);
    }

    public function test_invalid_email_is_rejected(): void
    {
        Mail::fake();

        $response = $this->from('/contact')->post('/contact/send', $this->payload(['email' => 'bukan-email']));

        $response->assertSessionHasErrors('email');
    }

    public function test_missing_fields_are_rejected(): void
    {
        $response = $this->from('/contact')->post('/contact/send', []);

        $response->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
    }

    public function test_mail_failure_returns_error_message_not_success(): void
    {
        Mail::shouldReceive('raw')->once()->andThrow(new \RuntimeException('SMTP down'));

        $response = $this->from('/contact')->post('/contact/send', $this->payload());

        $response->assertSessionHas('error');
        $response->assertSessionMissing('success');
    }
}
