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
            ->assertSee('Pessoas também fazem parte da solução.')
            ->assertSee('professor de informática básica para crianças')
            ->assertSee('Banco de Dados')
            ->assertSee('Programação Orientada a Objetos')
            ->assertSee('Monitorias na CESAR School')
            ->assertSee('Maratona de Inovação')
            ->assertSee('/images/about/emanuel-perfil.jpg', false)
            ->assertSee('/images/about/recnplay-equipe.jpg', false)
            ->assertSee('/images/about/aula-ong.jpg', false)
            ->assertSee('/images/about/monitoria-poo.jpg', false)
            ->assertSee('Full Stack Software Developer')
            ->assertSee('Projetos pessoais')
            ->assertSee('Machine Learning Pipeline')
            ->assertSee('ECOSUN')
            ->assertSee('FASE BÔNUS DESBLOQUEADA')
            ->assertSee('Você chegou até o final. Que tal conhecer o código?')
            ->assertSee('https://github.com/emanusousa/2026-PORTFOLIO', false)
            ->assertSee('PHP Laravel Basics')
            ->assertSee('Ciência da Computação');
    }

    public function test_portfolio_exposes_the_correct_professional_links(): void
    {
        $this->get(route('portfolio'))
            ->assertOk()
            ->assertSee('https://github.com/emanusousa', false)
            ->assertSee('https://github.com/P-E-N-T-E-S/GerenciamentoFisioterapia', false)
            ->assertSee('https://github.com/lovepxdro/Projeto-Grafos', false)
            ->assertSee('https://github.com/emanusousa/machine-learning-project', false)
            ->assertSee('https://github.com/emanusousa/ecosunn', false)
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
