<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Management System - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- Main Login Form -->
    <div class="login-container">
        <div class="login-header">
            <h1>Welcome Back</h1>
            <p>Sign in to your file management system</p>
        </div>

        <form id="loginForm" action="login" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <div class="error-message" id="usernameError">Please enter your username</div>
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password" required>
                <div class="error-message" id="nicknameError">Please enter your nickname</div>
            </div>

            <div class="button-group">
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="button" class="btn btn-success" id="signupBtn">Sign Up</button>
            </div>
        </form>
    </div>

    <!-- Signup Modal -->
    <div class="modal-overlay" id="signupModal">
        <div class="modal-content">
            <button class="modal-close" id="closeModal">&times;</button>
            
            <div class="modal-header">
                <h2>Create Account</h2>
                <p>Join our file management system</p>
            </div>

            <form id="signupForm" action="signup" method="post">
                @csrf
                <div class="form-group">
                    <label for="signupUsername">Username</label>
                    <input type="text" id="signupUsername" name="username" required>
                    <div class="error-message" id="signupUsernameError">Please enter a username</div>
                </div>

               

                <div class="form-group">
                    <label for="signupPassword">Password</label>
                    <input type="password" id="signupPassword" name="password" required>
                    <div class="error-message" id="signupPasswordError">Password must be at least 6 characters</div>
                </div>

                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                    <div class="error-message" id="confirmPasswordError">Passwords do not match</div>
                </div>

                <button type="submit" class="btn btn-success register-btn">Register</button>
            </form>
        </div>
    </div>
    <script src="js/login.js"></script>

</body>
    
</html>
