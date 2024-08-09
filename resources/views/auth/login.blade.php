<x-layout>
    <x-slot:heading>Login</x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <x-form-input type="email" name="email" id="email" placeholder="joedalton@example.com"
                                      :value="old('email')"
                                      required/>
                        <div class="mt-2">
                            <x-form-error name="email"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <x-form-input type="password" name="password" id="password" :value="old('password')" required/>
                        <div class="mt-2">
                            <x-form-error name="password"/>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button type="submit">Login</x-form-button>
        </div>
    </form>

</x-layout>
