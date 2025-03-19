<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suporte - NOVA INDIE</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="bg-gray-700 shadow-lg rounded-lg p-8 max-w-3xl text-center border-2 border-purple-600">
        <h3 class="text-3xl font-bold text-white border-b border-purple-500 pb-3 mb-6">📌 Suporte - NOVA INDIE</h3>

        <p class="text-white text-lg font-semibold text-left mb-4">Bem-vindo ao suporte do NOVA INDIE! 🎮</p>
        <p class="text-white text-sm text-left mb-6">
            Aqui você encontra respostas para dúvidas frequentes. Se precisar de mais ajuda, entre em contato conosco!
        </p>

        <div class="text-left">
            <h4 class="text-xl font-semibold text-purple-400 mb-2">📌 Perguntas Frequentes</h4>
            
            <p class="text-white text-sm mb-2"><strong>🎮 Como faço para baixar um jogo?</strong></p>
            <p class="text-gray-300 text-sm mb-4">Basta acessar a página do jogo e clicar no botão de download!</p>

            <p class="text-white text-sm mb-2"><strong>🕹️ Preciso pagar para jogar?</strong></p>
            <p class="text-gray-300 text-sm mb-4">Depende do jogo! Temos títulos gratuitos e pagos. Confira na descrição do jogo.</p>

            <p class="text-white text-sm mb-2"><strong>🚀 Meu jogo favorito não está aqui. O que fazer?</strong></p>
            <p class="text-gray-300 text-sm mb-4">Você pode sugerir jogos indie na nossa página de contato! Adoramos novas indicações.</p>

            <p class="text-white text-sm mb-2"><strong>👾 Como posso publicar meu jogo no NOVA INDIE?</strong></p>
            <p class="text-gray-300 text-sm mb-4">Entre em contato conosco e envie os detalhes do seu jogo!</p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 mt-6">
            <a href="{{ route('site.principal') }}" class="flex-1 px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                Voltar para Principal
            </a>
            <a href="{{ route('site.contato') }}" class="flex-1 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Entrar em Contato
            </a>
        </div>
    </div>
</body>
</html>
