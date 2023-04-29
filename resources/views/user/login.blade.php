@include('partial.header')
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class= "text-4xl font-bold text-black text-center"> {{$title}} </h1>
        </a>
    </header>
    <main class= "bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class= "font-bold text-3xl text-center">CUSTOMER LOGIN</h3>
        </section>
        <section class= "mt-10">
            <form action="/login/process" method="POST" class= "flex flex-col" >
                @csrf
                @error('email')
                        <p class="text-center text-red-400 bg-white text-xs">
                            {{$message}}
                        </p>
                @enderror
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="email" class="block text-gray-700 text-sm
                        font-bold mb-2 ml-3">Email
                    </label>
                    <input type="email" name="email" class="bg-gray-100 rounded w-full 
                        text-gray-700 focus:outline-none border-b-4 border-gray-400
                        px-3">
                </div>
                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="password"  class="block text-gray-700 text-sm
                        font-bold mb-2 ml-3">Password
                    </label>
                    <input type="password" name="password" class="bg-gray-100 rounded w-full 
                        text-gray-700 focus:outline-none border-b-4 border-gray-400
                        px-3">
                </div>
                <button class="bg-blue-600 hover:bg-blue-800 text-white
                    font-bold py-2 rounded shadow-lg transition
                    duration-200" type="sumbit">Login</button>
                <p class="text-center text-blue-black font-bold text-xs pt-2">SIGN UP
                    <a href="/register" class="text-blue-600 text-xs hover:bg-gray-300">HERE</a>
                </p>
            </form>
        </section>
    </main>
@include('partial.footer')