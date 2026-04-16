<x-layout>

    <header class="header d-flex align-items-center">

        <div class="container">
            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-12 col-md-6">
                    <h1 class="text-center">I miei iscritti</h1>
                </div>
            </div>
        </div>









    </header>





    <div class="container">
        <div class="row">
            @foreach ($trainee as $traine)
                <div class="col-12 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$traine->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{$traine->surname}}</h6>
                            <p class="card-text">{{$traine->age}}</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
            @endforeach
        </div>

    </div>










</x-layout>
