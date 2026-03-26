@if(session('status'))
    <div class="mb-6 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800">
        {{ session('status') }}
    </div>
@endif

<form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
    @csrf

    <div>
        <label for="name" class="mb-2 block text-sm font-medium text-slate-700">
            Naam
        </label>
        <input
            type="text"
            name="name"
            id="name"
            value="{{ old('name') }}"
            class="block w-full rounded-lg border border-slate-300 bg-white px-4 py-3 text-sm shadow-sm outline-none transition focus:border-slate-500 focus:ring-2 focus:ring-slate-200"
        >

        @error('name')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email" class="mb-2 block text-sm font-medium text-slate-700">
            E-mail
        </label>
        <input
            type="email"
            name="email"
            id="email"
            value="{{ old('email') }}"
            class="block w-full rounded-lg border border-slate-300 bg-white px-4 py-3 text-sm shadow-sm outline-none transition focus:border-slate-500 focus:ring-2 focus:ring-slate-200"
        >

        @error('email')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="message" class="mb-2 block text-sm font-medium text-slate-700">
            Bericht
        </label>
        <textarea
            name="message"
            id="message"
            rows="8"
            class="block w-full rounded-lg border border-slate-300 bg-white px-4 py-3 text-sm shadow-sm outline-none transition focus:border-slate-500 focus:ring-2 focus:ring-slate-200"
        >{{ old('message') }}</textarea>

        @error('message')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center justify-end">
        <button
            type="submit"
            class="inline-flex rounded-lg bg-slate-900 px-5 py-3 text-sm font-semibold text-white transition hover:bg-slate-800"
        >
            Verzenden
        </button>
    </div>
</form>
