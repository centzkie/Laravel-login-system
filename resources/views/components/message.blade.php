@if(session()->has('message'))
    <div class="bg-blue-100 fixed center mt-5 buttom-50 left-0 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
        <p class="font-bold text-center">Message</p>
        <p class="text-sm text-center">{{session('message')}}</p>
    </div>
@endif