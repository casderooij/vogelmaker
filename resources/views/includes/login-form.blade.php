<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <label for="email">E-Mail Address</label>
    <input type="email" name="email" value="{{ old('email') }}" required autofocus>

    <label for="password" >Password</label>
    <input type="password" name="password" required>

    <button type="submit">
        Login
    </button>
</form>
