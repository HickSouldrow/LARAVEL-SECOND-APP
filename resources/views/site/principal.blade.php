<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="bg-gray-700 shadow-lg rounded-lg p-6 w-80 text-center">
        <h3 class="text-2xl font-bold text-white border-b border-y-purple-500 pb-2 mb-4">Menu</h3>
        <ul class="space-y-3">
            <li><a href="{{ route('site.sobrenos') }}" class="block px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">Sobre Nós</a></li>
            <li><a href="{{ route('site.contato') }}" class="block px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">Contato</a></li>
            <li><a href="{{ route('site.termos') }}" class="block px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">Termos</a></li>
            <li><a href="{{ route('site.ajuda') }}" class="block px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">Ajuda</a></li>
            <li><a href="{{ route('site.imagem') }}" class="block px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">Imagem</a></li>
        </ul>
    </div>
</body>
</html>