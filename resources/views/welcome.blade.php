<x-layout>

<header class="header d-flex align-items-center">

    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Benvenuto nel Corso</h1>
            </div>
        </div>
    </div>









</header>

 <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-12 col-md-6">

                <h2>Iscriviti</h2>
                <form class="rounded-4 shadow bg-secondary p-3" action="{{ route('trainee.signup') }}"
 method="POST">
                    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="surname" class="form-label">Cognome </label>
    <input name="surname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="age" class="form-label">Età</label>
    <input name="age" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="email" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </div>













</x-layout>
