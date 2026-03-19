<!-- forgot-password.blade.php -->
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <label for="email">ईमेल:</label>
    <input type="email" name="email" required>
    <button type="submit">पासवर्ड रीसेट लिंक भेजें</button>
</form>
