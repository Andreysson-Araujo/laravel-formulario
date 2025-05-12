<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Sistema</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Bem-vindo ao the QUESTION</h1>
        </header>

        <main>
            <section>
                <h2>Como Funciona?</h2>
                <p>
                    Esse sistem faz o uso da sua coleta de dados para termos um feedback geral das ações aqui realizas na oca Rio Branco
                </p>
                <H3>Porque isso?</H3>
                <ul>
                    <li><strong>Implementar Melhorias:</strong> Melhorar nossas ações para Implementar na saude mental do servidor.</li>
                    <li><strong>Saber como esta o ambiente:</strong>Para um trabalho saudavel prescisamos de um ambiente saudavel</li>
                </ul>

                <p>Deseja prosseguir respondendo nosso Questionario?</p>
            </section>
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} Sistema de Gestão</p>
        </footer>
    </div>
</body>
</html>
