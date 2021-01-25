    {{-- 以下の記載をすると全てにCSSが反映される。 --}}
    {{-- {{{asset('css/style.css')}}} --}}
    <link rel="stylesheet" href="{{{asset('css/all.css')}}}">

    @component('components.header')
    @endcomponent  
    
    <main class="py-4">
     @yield('content')
    </main>
     
    <div class="side">
     {{-- @if ($name != 'index') --}}
     {{-- @include('components/side') --}}
     @component('components.sideber')
     @endcomponent
     {{-- @endif --}}
    </div>
     

     @component('components.fooder')
     @endcomponent  
