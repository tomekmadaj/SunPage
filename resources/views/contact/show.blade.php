@extends('layouts.app')

@section('content')
<section id="list">
    <div class="container my-5">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-row justify-content-center">
                    <small class="me-2">Wiadomość z dnia: </small>
                    <small> {{ $message->created_at }}</small>
                </div>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Imię:</b> {{ $message->name }}</li>
                        <li class="list-group-item"><b>Nazwisko: </b> {{ $message->last_name }}</li>
                        <li class="list-group-item"><b>email: </b> {{ $message->email }}</li>
                        @if($message->phone)
                            <li class="list-group-item"><b>Numer telefonu: </b>{{ $message->phone }}</li>
                        @endif
                    </ul>
                </div>
                <div class="card-footer bg-light ps-4">
                    <p class="ps-2 pt-2"><b>Wiadmość: </b>{{ $message->message }}</p>
                 </div>
            </div>
    </div>
</section>
@endsection
