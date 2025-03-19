<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="bg-gray-700 shadow-lg rounded-lg p-8 max-w-3xl text-center border-2 border-purple-600">
    <h3 class="text-3xl font-bold text-white border-b border-purple-500 pb-3 mb-6">📌 Esse é o Super Sayajin fase 2!</h3>
    <img src="{{ asset('img/super-sayajin-2.jpg') }}" alt="Super Sayajin Fase 2" class="w-full rounded-lg mb-4">
    <p class="text-white font-semibold  text-sm text-left">
        "Esse é o poder que supera o super sayajin, eu apelidei ele de Super Sayajin fase 2..."
        <a href="{{ route('site.principal') }}" class="block mt-12 px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700">Voltar para Principal</a>
    </div>
</body>
</html>
