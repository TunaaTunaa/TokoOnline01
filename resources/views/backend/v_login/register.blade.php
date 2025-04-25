<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h3>{{ $judul }}</h3>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('backend.register.store') }}" method="POST">
        @csrf
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required><br>

        <label for="password_confirmation">Konfirmasi Password</label><br>
        <input type="password" name="password_confirmation" id="password_confirmation" required><br>

        <label for="hp">No. HP</label><br>
        <input type="text" name="hp" id="hp" value="{{ old('hp') }}" required><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
