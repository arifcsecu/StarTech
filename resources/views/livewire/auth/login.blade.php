<!-- resources/views/livewire/auth/login.blade.php -->

<div class="vh-100 d-flex align-items-center justify-content-center bg-light">
    <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
        <!-- StarTech Logo -->
        <div class="text-center mb-4">
            <img src="/images/startech-logo.png" alt="StarTech" class="img-fluid" style="height: 50px;">
        </div>

        @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
        @endif

        <form wire:submit.prevent="login">
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email</label>
                <input type="email" id="email" wire:model.defer="email"
                    class="form-control @error('email') is-invalid @enderror" placeholder="you@example.com">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password with Alpine.js toggle -->
            <div class="mb-3" x-data="{ show: false }">
                <label for="password" class="form-label fw-semibold">Password</label>
                <div class="input-group">
                    <input :type="show ? 'text' : 'password'" id="password" wire:model.defer="password"
                        class="form-control @error('password') is-invalid @enderror" placeholder="••••••••">
                    <button class="btn btn-outline-secondary" type="button" @click="show = !show"
                        x-text="show ? 'Hide' : 'Show'"></button>
                    @error('password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Remember Me -->
            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" wire:model="remember" id="remember">
                <label class="form-check-label" for="remember">
                    Remember me
                </label>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary w-100" wire:loading.attr="disabled">
                Log In
            </button>
        </form>

        <!-- Extras -->
        <div class="mt-3 text-center">
            <a href="{{ route('password.request') }}" class="link-secondary">
                Forgot your password?
            </a>
        </div>
    </div>
</div>