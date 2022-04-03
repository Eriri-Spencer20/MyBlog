@extends('layouts.main')
@section('container')
    <h1 class="text-green-600 text-center text-4xl">Halaman About</h1>
    <div class="w-full h-24 ">

        <h2 class="text-green-600 mb-4 text-2xl"><?= $name ?> </h2>
        <p class="text-green-600 text-xl"> <?= $email ?> </p>
    </div>
    <img src="img/<?= $image ?>" alt="{{ $name }}" width="200" class="rounded-xl  py-4">
@endsection
