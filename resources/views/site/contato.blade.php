<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - NOVA INDIE</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="bg-gray-700 shadow-lg rounded-lg p-8 max-w-3xl text-center border-2 border-purple-600">
        <h3 class="text-3xl font-bold text-white border-b border-purple-500 pb-3 mb-6">📌 Contato - NOVA INDIE</h3>

        <p class="text-white text-lg font-semibold text-left mb-4">Entre em contato com nossa equipe (menos o Raul)!</p>
        <p class="text-gray-300 text-sm text-left mb-6">Se precisar de suporte, parcerias ou mais informações, fale com um de nossos atendentes abaixo:</p>

        <div class="text-left">
            <h4 class="text-xl font-semibold text-purple-400 mb-2">Contatos da Equipe</h4>
            <ul class="text-gray-300 text-sm list-disc list-inside space-y-2">
                <li><strong>Guts</strong> - 📱 (11) 91234-5678</li>
                <li><strong>Griffith</strong> - 📱 (11) 98765-4321</li>
                <li><strong>Yuji Itadori</strong> - 📱 (11) 99876-5432</li>
                <li><strong>Megumi Fushiguro</strong> - 📱 (11) 92345-6789</li>
                <li><strong>Raul Jardim Helena</strong> - 📱 (11) 93000-1234 ❌ (Evite)</li>
                <li><strong>Dio Brando</strong> - 📱 (55) 98491-2520</li>
                <li><strong>Noriaki Kakyoin</strong> - 📱 (69) 21651-1231</li>
            </ul>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 mt-6">
            <a href="{{ route('site.principal') }}" class="flex-1 px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                Voltar para Principal
            </a>

        </div>
    </div>
</body>
</html>
