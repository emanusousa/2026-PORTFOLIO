# Portfólio 

Este é o repositório do meu portfólio profissional, desenvolvido em Laravel.

A aplicação foi construída como uma página única e responsiva. O conteúdo é
organizado pelo backend e renderizado com Blade, enquanto a interface utiliza CSS
personalizado e JavaScript para as interações e animações.

O projeto está publicado em:

[portfolio-emanuel.alwaysdata.net](https://portfolio-emanuel.alwaysdata.net)

## Tecnologias

- **PHP 8.3+**
- **Laravel 13**
- **Blade**
- **HTML5**
- **CSS3**
- **Tailwind CSS 4**
- **JavaScript**
- **Vite 8**
- **Composer**

## Estrutura técnica

O projeto utiliza a estrutura MVC do Laravel para separar a entrada da aplicação,
o processamento da requisição e a apresentação do conteúdo.

### Roteamento

A rota principal está definida em `routes/web.php`. Quando uma requisição `GET` é
feita para `/`, o Laravel direciona o processamento para o
`PortfolioController`.

```php
Route::get('/', PortfolioController::class)->name('portfolio');
```

A rota possui o nome `portfolio`, que também é utilizado pelos testes de
funcionalidade para acessar a página sem depender diretamente da URL.

### Controller

O `PortfolioController` foi implementado como um controller invocável. Como a
aplicação possui uma única página, não foi necessário criar vários métodos de
ação.

```php
class PortfolioController extends Controller
{
    public function __invoke(): View
    {
        return view('portfolio', config('portfolio'));
    }
}
```

O método `__invoke()` carrega os dados de `config/portfolio.php` e os envia para
a view `portfolio`.

### Configuração dos dados

As habilidades, certificações e atividades acadêmicas ficam centralizadas em
`config/portfolio.php`.

Esse arquivo retorna um array associativo que é carregado pelo helper
`config('portfolio')`. As chaves do array são disponibilizadas como variáveis na
view Blade.

Essa organização mantém o conteúdo estruturado fora do HTML e permite atualizar
os dados sem alterar a marcação da página. Como o portfólio não possui conteúdo
dinâmico cadastrado por usuários, não foi necessário adicionar banco de dados,
Models ou operações de CRUD.

### Blade

A interface está em `resources/views/portfolio.blade.php`. A view utiliza os
recursos do Blade para renderizar os dados recebidos do controller.

As diretivas `@foreach` são usadas para montar as listas de habilidades,
certificados e atividades. O Blade também aplica o escape automático com
`{{ }}`, evitando que valores sejam inseridos no HTML sem tratamento.

### Assets com Vite

Os arquivos `resources/css/app.css` e `resources/js/app.js` são carregados na
view através da diretiva `@vite`.

```php
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

O Vite processa e versiona os assets para produção. O CSS utiliza Tailwind como
parte do pipeline de build, além de regras personalizadas para o layout,
responsividade e animações. O JavaScript controla o menu mobile, o estado visual
do cabeçalho e a exibição progressiva das seções com `IntersectionObserver`.

### Fluxo da requisição

O fluxo principal da aplicação é:

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

1. O servidor recebe uma requisição para `/`.
2. O roteador do Laravel encontra a rota nomeada `portfolio`.
3. O container da aplicação resolve e executa o `PortfolioController`.
4. O controller carrega a configuração com `config('portfolio')`.
5. Os dados são enviados para a view Blade.
6. O Blade gera o HTML final.
7. O Laravel devolve a resposta HTTP ao navegador.

## Organização

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

## Qualidade

O projeto utiliza:

- **PHPUnit** para testes unitários e de funcionalidade;
- **Laravel Pint** para padronização do código PHP;
- **PHPStan com Larastan** para análise estática;
- **Vite** para compilação e otimização dos assets.

Os testes de funcionalidade inicializam a aplicação Laravel e realizam
requisições HTTP para a rota do portfólio. Eles verificam o status da resposta,
os conteúdos principais e os links profissionais.

Os testes unitários validam isoladamente a estrutura de `config/portfolio.php`,
garantindo que certificados e atividades mantenham os campos esperados.

## Publicação

A aplicação está hospedada no plano gratuito do **Alwaysdata**, utilizando um
ambiente PHP compatível com os requisitos do Laravel 13.

O servidor web está configurado para utilizar como diretório raiz:

```text
/home/portfolio-emanuel/www/2026-PORTFOLIO/portfolio/public
```

Essa configuração mantém os arquivos internos do Laravel fora do acesso público.
Somente o conteúdo de `public/`, incluindo `index.php`, `.htaccess`, ícones e
assets compilados, pode ser acessado diretamente pelo navegador.

O arquivo `public/index.php` funciona como front controller da aplicação. Todas
as requisições são direcionadas para esse ponto de entrada e encaminhadas ao
roteador do Laravel pelas regras definidas em `public/.htaccess`.

No ambiente publicado, a aplicação utiliza configurações específicas de
produção:

- `APP_ENV=production`;
- `APP_DEBUG=false`;
- sessões e cache armazenados em arquivos;
- fila configurada para execução síncrona;
- configurações e views armazenadas em cache pelo Laravel.

As dependências PHP são instaladas com o Composer em modo de produção, sem os
pacotes de desenvolvimento. Os assets são compilados localmente pelo Vite e o
conteúdo gerado em `public/build` é enviado ao servidor. Dessa forma, o ambiente
de hospedagem não precisa manter o Node.js nem a pasta `node_modules`.

Como o portfólio não utiliza banco de dados, uploads ou processamento em segundo
plano, a infraestrutura publicada permanece simples e com baixo consumo de
recursos.

## Autor

**Emanuel Eduardo**

- [LinkedIn](https://www.linkedin.com/in/emanuel-eduardo-b99965296/)
- [GitHub](https://github.com/emanusousa)
- [E-mail](mailto:emanueledusousa@gmail.com)
