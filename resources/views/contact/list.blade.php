@extends('layouts.app')

@section('content')
<section id="list">
<div class="container">
<div class="d-flex justify-content-center py-5">
    <table class="table table-bordered table-hover table-responsive">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Email</th>
            <th>Numer telefonu</th>
            <th>Data przesłania</th>
            <th>Wiadomość</th>
            <th>Opcje</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $message->name }}</td>
                <td>{{ $message->last_name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->phone }}</td>
                <td>{{ $message->created_at }}</td>
                <td>{{ $message->excerpt()  }}</td>
                <td>
                    <a href="{{ route('contact.show.message', ['id' => $message->id])}}">Szczegóły</a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
{{ $messages->links() }}
</div>
</section>
@endsection
