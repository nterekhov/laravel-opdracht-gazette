<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-100 text-slate-900">

<div class="mx-auto max-w-3xl px-6 py-12">
    <div class="overflow-hidden rounded-2xl bg-white shadow-lg ring-1 ring-slate-200">
        <div class="border-b border-slate-200 bg-slate-50 px-8 py-6">
            <h1 class="text-3xl font-bold tracking-tight">Contact</h1>
            <p class="mt-2 text-sm text-slate-600">
                Vul het formulier hieronder in. Zodra je op verzenden klikt, verwerkt Laravel de gegevens en maakt de applicatie een mail aan.
            </p>
        </div>

        <div class="px-8 py-8">
            <x-frontend.contact.contact-content />
        </div>
    </div>
</div>

</body>
</html>
