<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for additional styling */
        body {
            padding: 50px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            margin-top: 10px;
        }
        button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('password.update') }}" class="mt-5">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <label for="email">ईमेल:</label>
            <input type="email" id="email" name="email" value="{{ $email }}" class="form-control" required readonly>
        </div>
        <div class="form-group">
            <label for="password">नया पासवर्ड:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">नए पासवर्ड की पुष्टि करें:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">पासवर्ड रीसेट</button>
    </form>
</body>
</html>
