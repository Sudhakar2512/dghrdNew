<!-- reset-password.blade.php -->
<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <label for="email">ईमेल:</label>
    <input type="email" name="email" value="{{ old('email') }}" required>
    <label for="password">नया पासवर्ड:</label>
    <input type="password" name="password" required>
    <label for="password_confirmation">पासवर्ड की पुष्टि कीजिये:</label>
    <input type="password" name="password_confirmation" required>
    <button type="submit">पासवर्ड रीसेट</button>
</form>
