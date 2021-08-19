@section('title', 'Sign in to your account')
@section('content')
<div>
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="flex w-full xl:w-3/4 lg:w-11/12">
                <!-- Col -->
                <div
                    class="hidden w-full h-auto bg-gray-400 bg-cover rounded-l-lg lg:block lg:w-1/2"
                    style="background-image: url('https://source.unsplash.com/K4mSJ7kc0As/600x800')"
                ></div>
                <!-- Col -->
                <div class="w-full p-5 bg-white rounded-lg lg:w-1/2 lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Welcome Back!</h3>
                    <a href="{{ route('home') }}">
                        <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
                    </a>
                    
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" wire:submit.prevent="authenticate">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                                Username
                            </label>
                            <input wire:model.lazy='username' class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="username"  required type="text" placeholder="Username"/>
                            @error('username')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Password
                            </label>
                            <input wire:model.lazy='password' class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" required type="password" placeholder="Password"/>
                            @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="text-sm" for="remember">
                                <input wire:model.lazy="remember" id="remember" type="checkbox" class="w-4 h-4 text-indigo-600 transition duration-150 ease-in-out form-checkbox" />
                                Remember Me
                            </label>
                        </div>
                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Sign In
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <p class="mt-2 text-sm leading-5 text-center text-gray-600 max-w">
                            <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline">
                                Forgot your password?
                            </a>
                        </p>
                        @if (Route::has('register'))
                        <p class="mt-2 text-sm leading-5 text-center text-gray-600 max-w">
                            <a href="{{ route('register') }}" class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline">
                                Create an Account
                            </a>
                        </p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>