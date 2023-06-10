<x-guest-layout>

    @if(Session::has('error'))
        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
            <p class="font-bold">Be Warned</p>
            <p>{{session::get('error')}}</p>
        </div>
    @endif

    <h3>Login Admin name: {{Auth::guard('admin')->user()->name}}</h3>
    <h3>Login Admin email: {{Auth::guard('admin')->user()->email}}</h3>

</x-guest-layout>
