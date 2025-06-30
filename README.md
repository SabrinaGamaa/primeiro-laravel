# To-Do List com Laravel

Esse é meu **primeiro projetinho com Laravel**, feito com muito carinho para praticar os conceitos básicos da framework e preparar meu portfólio para oportunidades como desenvolvedora back-end júnior.

## Sobre o projeto

O projeto é uma **lista de tarefas (To-Do List) comum para fins de aprendizagem**, onde é possível:

- Adicionar uma nova tarefa
- Marcar uma tarefa como concluída (com checkbox estilizado)
- Deletar uma tarefa
- Visualizar as tarefas em ordem de criação
- Ver um relógio em tempo real no canto inferior da tela 🕒

Tudo isso com uma interface simples, usando apenas **HTML, CSS e Blade (sem frameworks externos de estilo)**.

> Apesar de ser meu primeiro projeto com Laravel, me senti bastante confortável por já ter estudado **Django e Flask**, que seguem uma lógica muito parecida de MVC, rotas, views, migrations e templates. Então foi bem tranquila

## Tecnologias Utilizadas

- [Laravel 10](https://laravel.com/)
- PHP 8.2.12
- SQLite
- Blade
- HTML5 + CSS3
- JavaScript (para o relógio em tempo real)

## Como rodar localmente

1. Clone o repositório:

```bash
    git clone https://github.com/SabrinaGamaa/primeiro-laravel.git
    cd primeiro-laravel
```

2. Instale as dependências:

```bash
    composer install
```

3. Crie um arquivo `.env` e configure o banco de dados (MySQL ou SQLite)

```bash
    cp .env.example .env
    php artisan key:generate
```

4. Rode as migrations:

```bash
    php artisan migrate
```

5. Suba o servidor:

```bash
    php artisan serve
```

6. Acesse no navegador:

```
    http://127.0.0.1:8000
```

---

## Objetivo

Esse projeto foi desenvolvido com o foco de aplicar a uma vaga de **desenvolvedora back-end júnior com Laravel**. Ele mostra de forma prática:

- Organização com MVC
- Uso de rotas, migrations e Eloquent
- Domínio básico de Blade e lógica de negócio com PHP
- Capacidade de entregar projetos completos, funcionais e bem-apresentados

---

## Futuras melhorias

- Permitir edição das tarefas existentes, além de criar, concluir e deletar.
- Adicionar filtros e busca para facilitar o gerenciamento das tarefas.
- Criar testes automatizados para garantir a qualidade do código.
- Refatorar o front-end usando Blade layouts e componentes para melhor organização.

---

📌 Obrigada por visitar meu repositório! Qualquer feedback é muito bem-vindo. ❤️
