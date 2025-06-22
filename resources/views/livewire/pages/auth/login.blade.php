<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.app')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>
<section class="flex justify-center relative">
    <img src="https://pagedone.io/asset/uploads/1702362010.png" alt="gradient background image" class="w-full h-full object-cover fixed">
    <div class="mx-auto max-w-lg px-6 lg:px-8 absolute py-20">
        <img src="https://pagedone.io/asset/uploads/1702362108.png" alt="pagedone logo" class="mx-auto lg:mb-11 mb-8 object-cover">
        <div class="rounded-2xl bg-white shadow-xl">
            <form wire:submit="login" class="lg:p-11 p-7 mx-auto">
                <div class="mb-11">
                    <h1 class="text-gray-900 text-center font-manrope text-3xl font-bold leading-10 mb-2">Войти в аккаунт</h1>
                    <p class="text-gray-500 text-center text-base font-medium leading-6">Если у вас нет аккаунта, вам необходимо оставить заявку на
                        <a class="text-gray-800 underline hover:text-gray-300" href="{{route('home')}}">главной</a> странице</p>
                </div>
                <input type="email" name="email" required autofocus autocomplete="username" wire:model.live="form.email" id="email" class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal leading-7 rounded-full border-gray-300 border shadow-sm focus:outline-none px-4 mb-6" placeholder="user@gmail.com">
                <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                <input wire:model.live="form.password" id="password" type="password" name="password" required autocomplete="current-password" class="w-full h-12 text-gray-900 placeholder:text-gray-400 text-lg font-normal leading-7 rounded-full border-gray-300 border shadow-sm focus:outline-none px-4 mb-1" placeholder="Пароль">
                <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                <a href="{{route('password.request')}}" class="flex justify-end mb-6">
                    <span class="text-indigo-600 text-right text-base font-normal leading-6">Забыли пароль?</span>
                </a>
                <div class="block mt-4">
                    <label for="remember" class="inline-flex items-center">
                        <input wire:model.live="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Запомнить пароль') }}</span>
                    </label>
                </div>
                <button class="w-full h-12 text-white text-center text-base font-semibold leading-6 rounded-full hover:bg-indigo-800 transition-all duration-700 bg-indigo-600 shadow-sm mb-11">Login</button>
            </form>
        </div>
    </div>
</section>
