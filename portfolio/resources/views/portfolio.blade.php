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
            <a href="#projetos">Projetos</a>
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
            <div class="about-story">
                <figure class="about-portrait reveal">
                    <img
                        src="/images/about/emanuel-perfil.jpg"
                        alt="Retrato de Emanuel Eduardo"
                        width="900"
                        height="900"
                        loading="lazy"
                    >
                    <figcaption>
                        <span>Emanuel Eduardo</span>
                        <small>Desenvolvedor & educador</small>
                    </figcaption>
                </figure>

                <div class="about-content reveal">
                    <p class="about-kicker">Pessoas também fazem parte da solução.</p>
                    <h2>Tecnologia, para mim, é uma forma de construir junto.</h2>
                    <div class="about-copy">
                        <p>
                            O trabalho em equipe é uma das minhas principais fortalezas. Gosto de ouvir,
                            compartilhar ideias e aprender com diferentes perspectivas, construindo soluções em
                            conjunto e contribuindo para um ambiente de evolução mútua.
                        </p>
                        <p>
                            Também fui professor de informática básica para crianças em uma ONG, experiência que
                            aproximou tecnologia e educação de forma simples, acolhedora e prática.
                        </p>
                        <p>
                            Na CESAR School, ministrei monitorias de <strong>Banco de Dados</strong> e
                            <strong>Programação Orientada a Objetos</strong>. Ao revisar os conteúdos e trocar
                            experiências com outros estudantes, aprofundei meus conhecimentos enquanto contribuía
                            para o aprendizado coletivo.
                        </p>
                        <p>
                            Também participei por dois anos consecutivos como monitor da
                            <strong>Maratona de Inovação</strong>, durante o festival Rec’n’Play, em Recife. Nessa
                            experiência, acompanhei adolescentes na investigação de problemas reais, colaborando
                            com as equipes na construção e no desenvolvimento de suas ideias.
                        </p>
                    </div>
                    <div class="about-values">
                        <span>Colaboração</span>
                        <span>Desenvolvimento de pessoas</span>
                        <span>Educação</span>
                        <span>Inovação</span>
                    </div>
                </div>
            </div>

            <div class="about-gallery">
                <figure class="about-moment about-moment-wide reveal">
                    <img
                        src="/images/about/recnplay-equipe.jpg"
                        alt="Emanuel com participantes e monitores da Maratona de Inovação no Rec’n’Play"
                        width="1400"
                        height="1050"
                        loading="lazy"
                    >
                    <figcaption>
                        <span>Maratona de Inovação — Rec’n’Play</span>
                        <small>Dois anos ajudando adolescentes a criar soluções para problemas reais.</small>
                    </figcaption>
                </figure>
                <figure class="about-moment reveal">
                    <img
                        src="/images/about/aula-ong.jpg"
                        alt="Emanuel durante uma aula de informática básica para crianças em uma ONG"
                        width="1400"
                        height="777"
                        loading="lazy"
                    >
                    <figcaption>
                        <span>Educação que aproxima</span>
                        <small>Ensino de informática básica para crianças em uma ONG.</small>
                    </figcaption>
                </figure>
                <figure class="about-moment about-moment-monitoring reveal">
                    <img
                        src="/images/about/monitoria-poo.jpg"
                        alt="Emanuel ministrando uma monitoria online de Programação Orientada a Objetos"
                        width="1400"
                        height="759"
                        loading="lazy"
                    >
                    <figcaption>
                        <span>Monitorias na CESAR School</span>
                        <small>Banco de Dados e POO ensinados com revisão, prática e troca de conhecimento.</small>
                    </figcaption>
                </figure>
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

        <section id="projetos" class="section projects-section">
            <div class="section-heading reveal">
                <span class="section-number">04</span>
                <p>Projetos pessoais</p>
            </div>
            <div class="projects-intro reveal">
                <h2>Projetos onde transformei estudo em soluções práticas.</h2>
                <p>
                    Experimentos e projetos acadêmicos que exploram desenvolvimento web,
                    arquitetura de software, algoritmos, dados e aprendizado de máquina.
                </p>
            </div>
            <div class="projects-grid">
                @foreach ($projects as $project)
                    <article class="project-card reveal">
                        <div class="project-card-top">
                            <span class="project-number">0{{ $loop->iteration }}</span>
                            <a
                                class="project-link"
                                href="{{ $project['repository'] }}"
                                target="_blank"
                                rel="noreferrer"
                                aria-label="Ver repositório do projeto {{ $project['name'] }}"
                            >
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 2C6.48 2 2 6.58 2 12.23c0 4.52 2.87 8.35 6.84 9.71.5.1.68-.22.68-.49v-1.91c-2.78.62-3.37-1.21-3.37-1.21-.45-1.18-1.11-1.5-1.11-1.5-.91-.64.07-.62.07-.62 1 .07 1.53 1.06 1.53 1.06.9 1.57 2.35 1.12 2.92.86.09-.66.35-1.12.64-1.37-2.22-.26-4.56-1.14-4.56-5.06 0-1.12.39-2.03 1.03-2.75-.1-.26-.45-1.3.1-2.71 0 0 .84-.28 2.75 1.05A9.3 9.3 0 0 1 12 6.95a9.3 9.3 0 0 1 2.5.34c1.91-1.33 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.72 1.03 1.63 1.03 2.75 0 3.93-2.34 4.79-4.57 5.05.36.32.68.94.68 1.89v2.81c0 .27.18.59.69.49A10.24 10.24 0 0 0 22 12.23C22 6.58 17.52 2 12 2Z"/>
                                </svg>
                                <span>Ver código ↗</span>
                            </a>
                        </div>
                        <p class="project-subtitle">{{ $project['subtitle'] }}</p>
                        <h3>{{ $project['name'] }}</h3>
                        <p class="project-description">{{ $project['description'] }}</p>
                        <ul class="project-highlights">
                            @foreach ($project['highlights'] as $highlight)
                                <li>{{ $highlight }}</li>
                            @endforeach
                        </ul>
                        <div class="project-technologies">
                            @foreach ($project['technologies'] as $technology)
                                <span>{{ $technology }}</span>
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <section id="formacao" class="section education">
            <div class="section-heading reveal">
                <span class="section-number">05</span>
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

        <section class="pixel-cta" aria-labelledby="pixel-title">
            <div class="pixel-sky" aria-hidden="true">
                <i></i><i></i><i></i><i></i><i></i>
            </div>
            <div class="pixel-scene reveal">
                <div class="pixel-character-wrap" aria-hidden="true">
                    <div class="pixel-speech">Ei! Ainda não acabou...</div>
                    <div class="pixel-character">
                        <div class="pixel-hair"></div>
                        <div class="pixel-head">
                            <span class="pixel-ear pixel-ear-left"></span>
                            <span class="pixel-ear pixel-ear-right"></span>
                            <span class="pixel-eye pixel-eye-left"></span>
                            <span class="pixel-eye pixel-eye-right"></span>
                            <span class="pixel-smile"></span>
                        </div>
                        <div class="pixel-neck"></div>
                        <div class="pixel-body">
                            <span class="pixel-shirt-detail">&lt;/&gt;</span>
                        </div>
                        <span class="pixel-arm pixel-arm-left"></span>
                        <span class="pixel-arm pixel-arm-right"></span>
                        <span class="pixel-hand"></span>
                        <span class="pixel-leg pixel-leg-left"></span>
                        <span class="pixel-leg pixel-leg-right"></span>
                        <span class="pixel-shoe pixel-shoe-left"></span>
                        <span class="pixel-shoe pixel-shoe-right"></span>
                    </div>
                </div>

                <div class="pixel-copy">
                    <p class="pixel-label">FASE BÔNUS DESBLOQUEADA</p>
                    <h2 id="pixel-title">Você chegou até o final. Que tal conhecer o código?</h2>
                    <p>
                        Este portfólio também é um projeto de estudo em PHP e Laravel.
                        No repositório você pode explorar a estrutura, os testes e cada detalhe da construção.
                    </p>
                    <a
                        class="pixel-button"
                        href="https://github.com/emanusousa/2026-PORTFOLIO"
                        target="_blank"
                        rel="noreferrer"
                    >
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2C6.48 2 2 6.58 2 12.23c0 4.52 2.87 8.35 6.84 9.71.5.1.68-.22.68-.49v-1.91c-2.78.62-3.37-1.21-3.37-1.21-.45-1.18-1.11-1.5-1.11-1.5-.91-.64.07-.62.07-.62 1 .07 1.53 1.06 1.53 1.06.9 1.57 2.35 1.12 2.92.86.09-.66.35-1.12.64-1.37-2.22-.26-4.56-1.14-4.56-5.06 0-1.12.39-2.03 1.03-2.75-.1-.26-.45-1.3.1-2.71 0 0 .84-.28 2.75 1.05A9.3 9.3 0 0 1 12 6.95a9.3 9.3 0 0 1 2.5.34c1.91-1.33 2.75-1.05 2.75-1.05.55 1.41.2 2.45.1 2.71.64.72 1.03 1.63 1.03 2.75 0 3.93-2.34 4.79-4.57 5.05.36.32.68.94.68 1.89v2.81c0 .27.18.59.69.49A10.24 10.24 0 0 0 22 12.23C22 6.58 17.52 2 12 2Z"/>
                        </svg>
                        ABRIR REPOSITÓRIO
                        <span>+100 XP</span>
                    </a>
                    <small>Pressione para continuar a aventura ↗</small>
                </div>
            </div>
            <div class="pixel-ground" aria-hidden="true"></div>
        </section>
    </main>

    <footer>
        <p>© <span id="current-year">{{ date('Y') }}</span> Emanuel Eduardo</p>
        <p>Desenvolvido com PHP + Laravel</p>
        <a href="#inicio">Voltar ao topo ↑</a>
    </footer>
</body>
</html>
