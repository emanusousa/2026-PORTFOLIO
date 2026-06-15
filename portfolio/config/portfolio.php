<?php

return [
    'skills' => [
        'Backend' => ['PHP', 'Laravel', 'Node.js', 'Java', 'Spring Boot', 'Python', 'TypeScript'],
        'Frontend' => ['React', 'Angular', 'JavaScript', 'Blade', 'HTML', 'CSS'],
        'Dados & Cloud' => ['MySQL', 'Modelagem de dados', 'AWS', 'Azure'],
        'Qualidade' => ['Testes unitários', 'Git', 'Clean Code', 'Scrum', 'Kanban'],
    ],

    'projects' => [
        [
            'name' => 'GFO',
            'subtitle' => 'Sistema de Gestão para Fisioterapia',
            'description' => 'Sistema para gestão de clínicas de fisioterapia, com cadastro de pacientes, agendamento de consultas e controle de materiais.',
            'highlights' => ['Engenharia de software', 'DDD, BDD e TDD', 'Projeto acadêmico em equipe'],
            'technologies' => ['Java', 'React', 'Testes', 'Modelagem de domínio'],
            'repository' => 'https://github.com/P-E-N-T-E-S/GerenciamentoFisioterapia',
        ],
        [
            'name' => 'Graphs Recife',
            'subtitle' => 'Algoritmos de Grafos com Dados Reais',
            'description' => 'Implementação de algoritmos de grafos aplicados aos bairros do Recife e à malha aérea mundial, com execução dinâmica por terminal.',
            'highlights' => ['BFS e DFS', 'Dijkstra e Bellman-Ford', 'Comparação de desempenho'],
            'technologies' => ['Python', 'Teoria dos Grafos', 'CLI', 'Visualização de dados'],
            'repository' => 'https://github.com/lovepxdro/Projeto-Grafos',
        ],
        [
            'name' => 'Machine Learning Pipeline',
            'subtitle' => 'Pipeline de Dados e Aprendizado de Máquina',
            'description' => 'Pipeline completo para dados de doenças cardíacas, integrando simulação IoT, API, armazenamento, análise exploratória e treinamento de modelos.',
            'highlights' => ['Ingestão e API de dados', 'Análise e treinamento', 'Ambiente reproduzível'],
            'technologies' => ['FastAPI', 'ThingsBoard', 'Jupyter', 'Docker Compose'],
            'repository' => 'https://github.com/emanusousa/machine-learning-project',
        ],
        [
            'name' => 'ECOSUN',
            'subtitle' => 'Sistema de Gestão de Energia Solar',
            'description' => 'Backend para gerenciamento de clientes, técnicos, instalações e pagamentos, com regras de negócio e persistência de dados.',
            'highlights' => ['APIs RESTful', 'Arquitetura em camadas', 'Lógica de domínio'],
            'technologies' => ['Java', 'Spring Boot', 'Banco de dados', 'REST API'],
            'repository' => 'https://github.com/emanusousa/ecosunn',
        ],
    ],

    'certificates' => [
        ['name' => 'PHP Laravel Basics', 'issuer' => 'Rocketseat', 'year' => '2026'],
        ['name' => 'AI for Developers: Writing Code', 'issuer' => 'Alura', 'year' => '2026'],
        ['name' => 'Agile Methodologies', 'issuer' => 'AprendeAí', 'year' => '2026'],
        ['name' => 'How to Master Software Quality', 'issuer' => 'Udemy', 'year' => '2026'],
        ['name' => 'Computação em Nuvem AWS', 'issuer' => 'Udemy', 'year' => '2026'],
        ['name' => 'High Intermediate English (B2)', 'issuer' => 'Voxy', 'year' => '2024'],
    ],

    'activities' => [
        ['role' => 'Monitor de Programação Orientada a Objetos', 'date' => 'Outubro 2025'],
        ['role' => 'Monitor de Banco de Dados', 'date' => 'Junho 2025'],
        ['role' => 'Monitor de Projeto — Rec’n’Play', 'date' => '2024 — 2025'],
        ['role' => 'Representante de Classe', 'date' => '2025 — 2026'],
    ],
];
