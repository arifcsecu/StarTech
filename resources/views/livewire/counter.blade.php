<div x-data="{ count: $wire.entangle('count') }" class="p-0 space-y-4">
    <h2 class="text-xl font-bold">Counter</h2>
    
    <div class="flex items-center gap-4">
        <button @click.stop="count--" class="px-4 py-2 bg-red-500 text-white rounded">
            -
        </button>
        
        <span x-text="count" class="text-2xl font-mono"></span>
        
        <button @click.stop="count++" class="px-4 py-2 bg-green-500 text-white rounded">
            +
        </button>
    </div>
    
    <div class="text-sm text-gray-500">
        Livewire value: {{ $count }}
    </div>
</div>


<!-- <div x-data="{ 
        localCount: $wire.entangle('count'),
        increment() {
            this.localCount++;
            $wire.increment();
        },
        decrement() {
            this.localCount--;
            $wire.decrement();
        }
    }" class="p-0 space-y-4">
    <h2 class="text-xl font-bold">Livewire + Alpine Counter</h2>

    <div class="flex items-center gap-4">
        <button @click="decrement()" class="px-4 py-2 bg-red-500 text-white rounded"> - </button>

        <span x-text="localCount" class="text-2xl font-mono"></span>

        <button @click="increment()" class="px-4 py-2 bg-green-500 text-white rounded"> + </button>
    </div>

    <div class="text-sm text-gray-500">
        <span>Livewire value: {{ $count }}</span>
    </div>
</div> -->


<!-- <div>
    <h1>{{ $count }}</h1>
 
    <button wire:click="increment">+</button>
 
    <button wire:click="decrement">-</button>
</div> -->

<!-- resources/views/livewire/counter.blade.php -->