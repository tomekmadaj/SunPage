@extends('layouts.app')

@section('content')
<section id="contact">
<div class="d-flex justify-content-center py-5">
    <div class="container row">
        <div class="col-12 col-lg-6 rounded form p-4" style="background-color: #F7F9FF">
            <h3 class="my-3 fw-bold">Napisz do nas</h3>
            <form action="{{ route('contact.add.message') }}" method="post">
                @csrf
                <div class="row mt-4">
                    <div class="col-12 col-md">
                        <input type="text" class="form-control" placeholder="Imię" aria-label="First name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong><small>{{ $message }}</small></strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 col-md mt-3 mt-md-0">
                        <input type="text" class="form-control" placeholder="Nazwisko" aria-label="Last name" name="last_name" value="{{ old('last_name') }}" required>
                        @error('last_name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong><small>{{ $message }}</small></strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-md">
                        <input type="email" class="form-control" placeholder="Adres e-mail" id="inputEmail4" name="email" value="{{ old('email') }}" required>
                        @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong><small>{{ $message }}</small></strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 col-md mt-3 mt-md-0">
                        <input type="tel" class="form-control" placeholder="Numer telefonu" aria-label="Last name" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong><small>{{ $message }}</small></strong>
                            </span>
                            @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <textarea class="form-control" placeholder="Twoja wiadomość"
                            id="exampleFormControlTextarea1" rows="7" name="message" required>{{ old('message') }}</textarea>
                            @error('message')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong><small>{{ $message }}</small></strong>
                            </span>
                            @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Zapoznałem się z regulaminem i wyrażam zgodę na przetwarzanie moich danych osobowych przez Sungroup.pl
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-end">
                        <button type="submit" class="btn btn-primary">Wyślij wiadomość</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-6 mt-5 mt-lg-0">
            <div class="card">
                <img src="{{ asset('storage/ContactImage.png') }}">
            </div>
        </div>
    </div>
</div>
</section>
@endsection
