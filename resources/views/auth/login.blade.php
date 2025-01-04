<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Login Information</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-input label="Email" placeholder="" name="email" type='email' :value="old('email')" required />
                    <x-form-input label="Password" placeholder="" name="password" type="password" required />
                </div>

                <div class="mt-8 pt-2 border-t border-gray-300 opacity-40">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="text-red-600">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
        </div>
    </form>

</x-layout>
