<x-layout>

  
    <!-- SCHEDA PATRIOT START-->
    <div class="container-fluid bg-body-secondary vh-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center align-items-center w-100">
            <div class="col-12">
                <h1 class="text-center py-5">
                    {{$patriot['name']}} {{$patriot['surname']}}   <!--   {{$patriot['name']}}fammi vedere che c'è nell array $patriot in chiave name -->
                </h1>
            </div>
        </div>

        <div class="row justify-content-center align-items-center w-100">
            <div class="col-12 col-md-6">
                <img src="{{ $patriot['photo'] }}" class="img-fluid" alt="{{ $patriot['name'] }} {{ $patriot['surname'] }} Photo">
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex align-items-center justify-content-center vh-100">
        <div class="col-12 col-md-6 bg-body-secondary p-4 text-center">
            <h2> {{$patriot['biography']}} </h2>
            <a href="{{route('chi-siamo')}}" class="btn btn-outline-secondary mt-4">Go back</a>
        </div>
    </div>
    <!-- SCHEDA PATRIOT END-->

</x-layout>
