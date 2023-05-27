@extends('layouts.app')

@section('title')
@endsection

@section('content')
<div class="container">
    <div class="row my-5 justify-content-center">
        <div class="col-md-4">
            
            <form action="{{ route('send-contact') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Votre nom </label>
                    <input type="text" name="name" id="" placeholder="nom....." class="form-control w-200" >
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-dark w-100">VALIDER</button>
                </div>


            </form>
        </div>
    </div>
</div>

@endsection