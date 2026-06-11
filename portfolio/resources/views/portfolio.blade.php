<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfólio de Emanuel Eduardo, desenvolvedor Full Stack especializado em PHP, Laravel e aplicações web.">
    <meta name="theme-color" content="#09110f">
    <title>Emanuel Eduardo | Desenvolvedor Full Stack</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
        <a class="brand" href="#inicio" aria-label="Ir para o início">
            <span class="brand-mark">EE</span>
            <span>Emanuel Eduardo</span>
        </a>

        <button class="menu-button" type="button" aria-expanded="false" aria-controls="main-navigation">
            <span></span><span></span>
            <span class="sr-only">Abrir menu</span>
        </button>

        <nav id="main-navigation" class="main-nav" aria-label="Navegação principal">
            <a href="#sobre">Sobre</a>
            <a href="#experiencia">Experiência</a>
            <a href="#habilidades">Habilidades</a>
            <a href="#formacao">Formação</a>
            <a class="nav-cta" href="#contato">Vamos conversar</a>
        </nav>
    </header>

    <main>
        <section id="inicio" class="hero">
            <div class="hero-copy reveal">
                <p class="eyebrow"><span></span> Disponível para novos desafios</p>
                <h1>Transformo ideias em <em>produtos digitais</em> que funcionam.</h1>
                <p class="hero-description">
                    Desenvolvedor Full Stack na CI&T, construindo aplicações web escaláveis,
                    integrações e APIs com foco em código limpo e impacto real.
                </p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#experiencia">Conheça meu trabalho <span>↘</span></a>
                    <div class="profile-actions">
                        <a
                            class="button button-linkedin"
                            href="https://www.linkedin.com/in/emanuel-eduardo-b99965296/"
                            target="_blank"
                            rel="noreferrer"
                        >
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M5.37 3.5A2.18 2.18 0 1 1 5.36 7.86 2.18 2.18 0 0 1 5.37 3.5ZM3.5 9.5h3.74v11H3.5v-11Zm6.12 0h3.58V11h.05c.5-.94 1.72-1.94 3.54-1.94 3.79 0 4.49 2.5 4.49 5.74v5.7h-3.73v-5.05c0-1.2-.02-2.76-1.68-2.76-1.68 0-1.94 1.32-1.94 2.67v5.14H9.62v-11Z"/>
                            </svg>
                            Conecte-se comigo
                            <span>↗</span>
                        </a>
                        <a
                            class="button button-github"
                            href="https://github.com/emanusousa"
                            target="_blank"
                            rel="noreferrer"
                            aria-label="Ver GitHub de Emanuel Eduardo"
                            title="GitHub"
                        >
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 2C6.48 2 2 6.58 2 12.23c0 4.52 2.87 8.35 6.84 9.71.5.1.68-.22.68-.49v-1.91c-2.78.62-3.37-1.21-3.37-1.21-.45-1.18-1.11-1.5-1.11-1.5-.91-.64.07-.62.07-.62 1 .07 1.53 1.06 1.53 1.06.9 1.57 2.35 1.12 2.92.86.09-.66.35-1.12.64-1.37-2.22-.26-4.56-1.14-4.56-5.06 0-1.12.39-2.03 1.03-2.75-.1-.26-.45-1.3.1-2.71 0 0 .84-.28 2.75 1.05A9.3 9.3 0 0 1 12 6.95a9.3 9.3 0 0 1 2.5.34c1.91-1.33 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.72 1.03 1.63 1.03 2.75 0 3.93-2.34 4.79-4.57 5.05.36.32.68.94.68 1.89v2.81c0 .27.18.59.69.49A10.24 10.24 0 0 0 22 12.23C22 6.58 17.52 2 12 2Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="social-links">
                    <a href="mailto:emanueledusousa@gmail.com">E-mail ↗</a>
                </div>
            </div>

            <div class="hero-visual reveal">
                <div class="code-window">
                    <div class="window-bar">
                        <div><i></i><i></i><i></i></div>
                        <span>emanuel.php</span>
                    </div>
                    <pre><code><span class="code-muted">&lt;?php</span>

<span class="code-purple">final class</span> <span class="code-green">Developer</span>
{
    <span class="code-purple">public string</span> $name =
        <span class="code-yellow">'Emanuel Eduardo'</span>;

    <span class="code-purple">public array</span> $focus = [
        <span class="code-yellow">'Laravel'</span>,
        <span class="code-yellow">'APIs'</span>,
        <span class="code-yellow">'Experiência web'</span>,
    ];

    <span class="code-purple">public function</span> <span class="code-blue">build</span>(): string
    {
        <span class="code-purple">return</span> <span class="code-yellow">'impacto real'</span>;
    }
}</code></pre>
                </div>
                <div class="floating-tag">Recife, PE <span>●</span></div>
            </div>
        </section>

        <section id="sobre" class="section about">
            <div class="section-heading reveal">
                <span class="section-number">01</span>
                <p>Sobre mim</p>
            </div>
            <div class="about-grid">
                <h2 class="reveal">Tecnologia com propósito, colaboração e atenção aos detalhes.</h2>
                <div class="about-copy reveal">
                    <p>
                        Atuo de ponta a ponta no desenvolvimento de soluções digitais para um cliente global,
                        passando por banco de dados, regras de negócio, APIs e interfaces.
                    </p>
                    <p>
                        Gosto de transformar problemas complexos em experiências simples, sustentáveis e fáceis
                        de evoluir. Aprendizado contínuo e trabalho em equipe fazem parte do meu processo.
                    </p>
                    <div class="quick-facts">
                        <div><strong>1+ ano</strong><span>Experiência profissional</span></div>
                        <div><strong>B2</strong><span>Inglês intermediário avançado</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experiencia" class="section experience">
            <div class="section-heading reveal">
                <span class="section-number">02</span>
                <p>Experiência profissional</p>
            </div>
            <article class="experience-card reveal">
                <div class="experience-meta">
                    <div class="company-monogram">C</div>
                    <div>
                        <h3>Full Stack Software Developer</h3>
                        <p>CI&T</p>
                    </div>
                    <span class="experience-date">Mar 2025 — Atual</span>
                </div>
                <div class="experience-content">
                    <p>
                        Desenvolvimento e sustentação de soluções digitais de alta escala em ambiente
                        internacional, atuando em backend, frontend, integrações e qualidade.
                    </p>
                    <ul>
                        <li>Construção de APIs REST e implementação de regras de negócio.</li>
                        <li>Desenvolvimento com PHP, Laravel, Node.js, Blade, JavaScript e MySQL.</li>
                        <li>Participação em refinamentos, análises técnicas e processos ágeis.</li>
                        <li>Colaboração diária com equipes internacionais.</li>
                    </ul>
                </div>
            </article>
        </section>

        <section id="habilidades" class="section skills-section">
            <div class="section-heading reveal">
                <span class="section-number">03</span>
                <p>Habilidades técnicas</p>
            </div>
            <div class="skills-intro reveal">
                <h2>Ferramentas que uso para tirar projetos do papel.</h2>
                <p>Uma base full stack combinada com qualidade de software e visão de produto.</p>
            </div>
            <div class="skills-grid">
                @foreach ($skills as $category => $items)
                    <article class="skill-card reveal">
                        <span class="skill-index">0{{ $loop->iteration }}</span>
                        <h3>{{ $category }}</h3>
                        <div class="skill-tags">
                            @foreach ($items as $item)
                                <span>{{ $item }}</span>
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <section id="formacao" class="section education">
            <div class="section-heading reveal">
                <span class="section-number">04</span>
                <p>Formação & desenvolvimento</p>
            </div>
            <div class="education-grid">
                <div class="education-main reveal">
                    <p class="eyebrow">Formação acadêmica</p>
                    <h2>Ciência da Computação</h2>
                    <p class="institution">CESAR School</p>
                    <div class="education-details">
                        <span>2023.1 — 2026.2</span>
                        <span>7º período</span>
                    </div>
                    <div class="activities-list">
                        @foreach ($activities as $activity)
                            <div>
                                <span>{{ $activity['role'] }}</span>
                                <small>{{ $activity['date'] }}</small>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="certificates reveal">
                    <p class="eyebrow">Certificados</p>
                    @foreach ($certificates as $certificate)
                        <article>
                            <div>
                                <h3>{{ $certificate['name'] }}</h3>
                                <p>{{ $certificate['issuer'] }}</p>
                            </div>
                            <span>{{ $certificate['year'] }}</span>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="contato" class="contact">
            <div class="contact-content reveal">
                <p class="eyebrow"><span></span> Entre em contato</p>
                <h2>Tem uma ideia ou desafio em mente?</h2>
                <p>Estou sempre aberto a boas conversas sobre tecnologia, produtos e novas oportunidades.</p>
                <a href="mailto:emanueledusousa@gmail.com">emanueledusousa@gmail.com <span>↗</span></a>
            </div>
        </section>
    </main>

    <footer>
        <p>© <span id="current-year">{{ date('Y') }}</span> Emanuel Eduardo</p>
        <p>Desenvolvido com PHP + Laravel</p>
        <a href="#inicio">Voltar ao topo ↑</a>
    </footer>
</body>
</html>
