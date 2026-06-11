# Portfólio Emanuel Eduardo

Portfólio profissional desenvolvido com Laravel para apresentar minha experiência,
habilidades técnicas, formação acadêmica, certificados e formas de contato.

O projeto foi construído como uma aplicação web responsiva, com conteúdo organizado
pelo backend do Laravel e uma interface personalizada com Blade, CSS e JavaScript.

## Tecnologias utilizadas

### Backend

- **PHP 8.3+**: linguagem principal da aplicação.
- **Laravel 13**: framework responsável por rotas, controller, configurações e
  renderização da página.
- **Blade**: template engine utilizada para gerar o HTML e exibir os dados do
  portfólio.
- **Composer**: gerenciamento das dependências PHP e execução dos scripts do projeto.

### Frontend

- **HTML5**: estrutura semântica do conteúdo.
- **CSS3**: identidade visual, responsividade, animações e componentes personalizados.
- **Tailwind CSS 4**: processamento e suporte à construção dos estilos.
- **JavaScript**: menu responsivo, comportamento do cabeçalho e animações de entrada
  com `IntersectionObserver`.
- **Vite 8**: compilação e otimização dos arquivos CSS e JavaScript.

### Qualidade e desenvolvimento

- **PHPUnit**: testes unitários e testes de funcionalidade.
- **Laravel Pint**: padronização e formatação do código PHP.
- **PHPStan com Larastan**: análise estática do código Laravel.
- **Git e GitHub**: versionamento e armazenamento do projeto.

## Funcionalidades

- Apresentação profissional e resumo da atuação.
- Seção de experiência profissional.
- Habilidades organizadas por categorias.
- Formação acadêmica, atividades e certificados.
- Links para LinkedIn, GitHub e e-mail.
- Navegação por seções com rolagem suave.
- Menu adaptado para dispositivos móveis.
- Animações ativadas conforme os elementos aparecem na tela.
- Layout responsivo para desktop, tablet e celular.

## Como a aplicação funciona

Ao acessar a página inicial, a requisição percorre o seguinte fluxo:

```text
Navegador
   |
   v
routes/web.php
   |
   v
PortfolioController
   |
   v
config/portfolio.php
   |
   v
resources/views/portfolio.blade.php
   |
   v
HTML enviado ao navegador
```

1. A rota `/` recebe a requisição.
2. O `PortfolioController` carrega os dados definidos em `config/portfolio.php`.
3. Os dados são enviados para a view Blade.
4. O Laravel renderiza a página e devolve o HTML ao navegador.
5. Vite fornece os arquivos compilados de CSS e JavaScript.

## Estrutura principal

```text
2026-PORTFOLIO/
├── portfolio/
│   ├── app/Http/Controllers/
│   │   └── PortfolioController.php
│   ├── config/
│   │   └── portfolio.php
│   ├── resources/
│   │   ├── css/app.css
│   │   ├── js/app.js
│   │   └── views/portfolio.blade.php
│   ├── routes/
│   │   └── web.php
│   ├── tests/
│   │   ├── Feature/PortfolioPageTest.php
│   │   └── Unit/PortfolioConfigurationTest.php
│   ├── composer.json
│   └── package.json
└── README.md
```

## Executando localmente

### Pré-requisitos

- PHP 8.3 ou superior
- Composer
- Node.js
- npm

### Instalação

```bash
git clone https://github.com/emanusousa/2026-PORTFOLIO.git
cd 2026-PORTFOLIO/portfolio
composer install
npm install
cp .env.example .env
php artisan key:generate
npm run build
```

### Iniciando o projeto

```bash
composer dev
```

A aplicação ficará disponível em:

```text
http://localhost:8000
```

## Comandos úteis

```bash
# Iniciar somente o servidor Laravel
php artisan serve

# Iniciar o Vite em desenvolvimento
npm run dev

# Gerar os arquivos otimizados para produção
npm run build

# Executar os testes
php artisan test

# Verificar a formatação do código
vendor/bin/pint --test

# Executar a análise estática
vendor/bin/phpstan analyse

# Listar as rotas da aplicação
php artisan route:list
```

## Testes

O projeto possui testes automatizados para verificar:

- disponibilidade da página;
- conteúdo profissional essencial;
- links de contato e redes profissionais;
- estrutura das habilidades, atividades e certificações;
- consistência dos dados enviados para a view.

## Autor

**Emanuel Eduardo**

- [LinkedIn](https://www.linkedin.com/in/emanuel-eduardo-b99965296/)
- [GitHub](https://github.com/emanusousa)
- [E-mail](mailto:emanueledusousa@gmail.com)
