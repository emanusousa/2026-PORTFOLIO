<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioPageTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_portfolio_page_is_available_with_essential_content(): void
    {
        $this->get(route('portfolio'))
            ->assertOk()
            ->assertSee('Emanuel Eduardo')
            ->assertSee('Full Stack Software Developer')
            ->assertSee('PHP Laravel Basics')
            ->assertSee('Ciência da Computação');
    }

    public function test_portfolio_exposes_the_correct_professional_links(): void
    {
        $this->get(route('portfolio'))
            ->assertOk()
            ->assertSee('https://github.com/emanusousa', false)
            ->assertSee('https://www.linkedin.com/in/emanuel-eduardo-b99965296/', false)
            ->assertSee('mailto:emanueledusousa@gmail.com', false);
    }

    public function test_removed_resume_and_test_coverage_content_stay_hidden(): void
    {
        $this->get(route('portfolio'))
            ->assertOk()
            ->assertDontSee('Baixar currículo')
            ->assertDontSee('Impacto em destaque')
            ->assertDontSee('97%');
    }
}
