# Portfólio | Emanuel Eduardo

Portfólio profissional desenvolvido com **PHP e Laravel** para apresentar minha
trajetória, competências técnicas, projetos e experiências acadêmicas.

Além de centralizar minhas informações profissionais, este projeto foi criado
como uma forma prática de estudar Laravel, aplicando conceitos de roteamento,
controllers, Blade, configuração, testes automatizados e publicação em
ambiente de produção.

**Aplicação publicada:**

[portfolio-emanuel.alwaysdata.net](https://portfolio-emanuel.alwaysdata.net)

## Sobre o projeto

A aplicação consiste em uma página única, responsiva e organizada em seções:

- apresentação e links profissionais;
- experiências e atuação com ensino e monitoria;
- habilidades técnicas;
- projetos pessoais e acadêmicos;
- formação e certificações;
- informações de contato;
- chamada interativa para o código-fonte do portfólio.

O conteúdo profissional é centralizado no backend e enviado para uma view
Blade. Essa abordagem mantém os dados separados da marcação HTML e facilita
atualizações sem exigir banco de dados ou painel administrativo.

## Tecnologias

| Área | Tecnologias |
| --- | --- |
| Backend | PHP 8.3, Laravel 13 |
| Interface | Blade, HTML5, CSS3, Tailwind CSS 4 |
| Interatividade | JavaScript |
| Build | Vite 8, Node.js, npm |
| Qualidade | PHPUnit, Laravel Pint, PHPStan, Larastan |
| Dependências | Composer |
| Publicação | Alwaysdata |

## Arquitetura

O portfólio utiliza uma estrutura Laravel simples e adequada ao escopo da
aplicação:

```text
Requisição HTTP
    -> routes/web.php
    -> PortfolioController
    -> config/portfolio.php
    -> portfolio.blade.php
    -> Resposta HTML
```

- `routes/web.php` registra a rota principal da aplicação.
- `PortfolioController` é um controller invocável responsável por carregar a
  página.
- `config/portfolio.php` centraliza projetos, habilidades, certificados e
  atividades.
- `portfolio.blade.php` renderiza o conteúdo e a estrutura da interface.
- `app.css` concentra o design responsivo, animações e identidade visual.
- `app.js` controla o menu mobile, o cabeçalho e as animações de entrada.

Como o conteúdo é essencialmente institucional, o projeto não armazena dados da
aplicação em banco, nem utiliza autenticação ou operações de CRUD. Isso reduz a
complexidade da infraestrutura e mantém a aplicação leve.

## Estrutura principal

```text
2026-PORTFOLIO/
├── portfolio/
│   ├── app/Http/Controllers/
│   │   └── PortfolioController.php
│   ├── config/
│   │   └── portfolio.php
│   ├── public/images/
│   ├── resources/
│   │   ├── css/app.css
│   │   ├── js/app.js
│   │   └── views/portfolio.blade.php
│   ├── routes/web.php
│   └── tests/
│       ├── Feature/PortfolioPageTest.php
│       └── Unit/PortfolioConfigurationTest.php
└── README.md
```

## Executando localmente

### Pré-requisitos

- PHP 8.3 ou superior;
- Composer;
- Node.js e npm.

```bash
git clone https://github.com/emanusousa/2026-PORTFOLIO.git
cd 2026-PORTFOLIO/portfolio

composer install
npm install

cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate

composer dev
```

A aplicação ficará disponível em `http://localhost:8000`. Caso essa porta já
esteja em uso, o Laravel indicará outro endereço no terminal.

## Testes e qualidade

Os testes de funcionalidade verificam a disponibilidade da página, seus
conteúdos essenciais, imagens e links profissionais. Os testes unitários
validam a estrutura dos dados utilizados pelo portfólio.

```bash
php artisan test
```

O projeto também utiliza:

```bash
vendor/bin/pint --test
vendor/bin/phpstan analyse
npm run build
```

## Publicação

A aplicação está publicada na **Alwaysdata**. O servidor web aponta para
`portfolio/public`, mantendo o código interno do Laravel fora do acesso
direto.

No ambiente de produção:

- o modo de depuração permanece desativado;
- as dependências PHP são instaladas sem pacotes de desenvolvimento;
- os assets são compilados e versionados pelo Vite;
- configurações e views são armazenadas em cache pelo Laravel;
- sessões e cache utilizam arquivos, sem dependência de banco de dados.

## Autor

**Emanuel Eduardo**

Desenvolvedor Full Stack e estudante de Ciência da Computação.

[LinkedIn](https://www.linkedin.com/in/emanuel-eduardo-b99965296/) ·
[GitHub](https://github.com/emanusousa) ·
[E-mail](mailto:emanueledusousa@gmail.com)
