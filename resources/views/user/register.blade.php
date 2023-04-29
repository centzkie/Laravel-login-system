@include('partial.header')
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class= "text-4xl font-bold text-black text-center"> {{$title}} </h1>
        </a>
        
    </header>
    <main class= "bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class= "font-bold text-gray-600 text-3xl text-center">CUSTOMER REGISTER</h3>
        </section>
        <section class= "mt-10">
            <form action="/store" method="POST" class="flex flex-col">
                @csrf
                <form action="" class= "flex flex-col" >
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="name" class="block text-gray-700 text-sm
                        font-bold mb-2 ml-3">Name
                    </label>
                    <input type="name" name="name" class="bg-gray-100 rounded w-full 
                        text-gray-700 focus:outline-none border-b-4 border-gray-400
                        px-3" value={{old('name')}}>
                    @error('name')
                        <p class="text-red-400 bg-white text-xs">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="email" class="block text-gray-700 text-sm
                        font-bold mb-2 ml-3">Email
                    </label>
                    <input type="email" name="email" class="bg-gray-100 rounded w-full 
                        text-gray-700 focus:outline-none border-b-4 border-gray-400
                        px-3"value={{old('email')}}>
                    @error('email')
                        <p class="text-red-400 bg-white text-xs">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="password" class="block text-gray-700 text-sm
                        font-bold mb-2 ml-3">Password
                    </label>
                    <input type="password" name="password" class="bg-gray-100 rounded w-full 
                        text-gray-700 focus:outline-none border-b-4 border-gray-400
                        px-3" value={{old('password')}}>
                    @error('password')
                        <p class="text-red-400 bg-white text-xs">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="password_confirmation" class="block text-gray-700 text-sm
                        font-bold mb-2 ml-3">Confirm Password
                    </label>
                    <input type="password" name="password_confirmation" class="bg-gray-100 rounded w-full 
                        text-gray-700 focus:outline-none border-b-4 border-gray-400
                        px-3">
                    @error('password_confirmation')
                        <p class="text-red-400 bg-white text-xs">
                            {{$message}}
                        </p>
                    @enderror
                </div>
                <button class="bg-blue-600 hover:bg-blue-800 text-white
                    font-bold py-2 rounded shadow-lg transition
                    duration-200" type="sumbit">Register</button>
            </form>
            <p class="text-center text-blue-black font-bold text-xs pt-2">SIGN IN
                <a href="/login" class="text-blue-600 text-xs hover:bg-gray-300">HERE</a>
            </p>
            </form>
        </section>
    </main>
@include('partial.footer')