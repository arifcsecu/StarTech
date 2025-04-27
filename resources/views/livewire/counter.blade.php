<!-- created for practice -->

<div x-data="{ count: $wire.entangle('count') }" class="p-0 space-y-4">
    <h2 class="text-xl font-bold">Counter</h2>

    <div class="flex items-center gap-4">
        <button @click.stop="count--" class="px-4 py-2 bg-red-500 text-white rounded"> - </button>

        <span x-text="count" class="text-2xl font-mono"></span>

        <button @click.stop="count++" class="px-4 py-2 bg-green-500 text-white rounded"> + </button>
    </div>

    <div class="text-sm text-gray-500">
        Livewire value: {{ $count }}
    </div>
</div>