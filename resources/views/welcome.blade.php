<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Sistema</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f9fafb;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        header h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        section h2 {
            color: #27ae60;
            margin-bottom: 10px;
        }

        section h3 {
            margin-top: 20px;
            color: #2980b9;
        }

        section p {
            margin: 10px 0;
            line-height: 1.6;
        }

        ul {
            margin: 15px 0;
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 8px;
        }

        #op {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background: #27ae60;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            border-radius: 8px;
            transition: background 0.3s, transform 0.2s;
        }

        #op:hover {
            background: #1e8449;
            transform: scale(1.05);
        }

    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>👋 Bem-vindo ao <strong>the QUESTION</strong></h1>
        </header>

        <main>
            <section>
                <h2>Como Funciona?</h2>
                <p>
                    Esse sistema coleta dados para termos um feedback geral das ações realizadas na OCA Rio Branco.
                </p>

                <h3>Por que isso?</h3>
                <ul>
                    <li><strong>Implementar Melhorias:</strong> Melhorar nossas ações para promover a saúde mental do servidor.</li>
                    <li><strong>Ambiente Saudável:</strong> Para um trabalho saudável precisamos de um ambiente saudável.</li>
                </ul>

                <p>Deseja prosseguir respondendo nosso questionário?</p>
                <div>
                    <a id="op" href="{{ route('servidores.index') }}">Responder Questionário</a>
                </div>
            </section>
        </main>

    </div>
</body>
</html>
