<x-layout>
    <x-slot:heading>Register</x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>
                        <x-form-input type="text" name="first_name" id="first_name" placeholder="Joe" required/>
                        <div class="mt-2">
                            <x-form-error name="first_name"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <x-form-input type="text" name="last_name" id="last_name" placeholder="Dalton" required/>
                        <div class="mt-2">
                            <x-form-error name="last_name"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <x-form-input type="email" name="email" id="email" placeholder="joedalton@example.com"
                                      required/>
                        <div class="mt-2">
                            <x-form-error name="email"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <x-form-input type="password" name="password" id="password" required/>
                        <div class="mt-2">
                            <x-form-error name="password"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password_confirmation">Password Confirmation</x-form-label>
                        <x-form-input type="password" name="password_confirmation" id="password_confirmation"
                                      required/>
                        <div class="mt-2">
                            <x-form-error name="password_confirmation"/>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button type="submit">Register</x-form-button>
        </div>
    </form>

</x-layout>
