<body>
    <h2>Register</h2>

    <form method="POST">
        <div class="form__item">
            <label for="username">Username: *</label>
            <input type="text" name="username" placeholder="username" required>
        </div>

        <div class="form__item">
            <label for="password">Password: *</label>
            <input type="password" name="password" placeholder="*******" required>
        </div>

        <div class="form__item">
            <label for="confirmpassword">Confirm password: *</label>
            <input type="password" name="confirmpassword" placeholder="*******" required>
        </div>
        
        <div class="form__item">
            <label for="email">Email: *</label>
            <input type="email" name="email" placeholder="email" required>
        </div>

        <div class="form__item">
            <label for="number">Phone number: *</label>
            <input type="tel" name="number" placeholder="number" required>
        </div>

        <div class="form__item">
            <label for="location">Location: *</label>
            <input type="text" name="location" placeholder="location" required>
        </div>

        <button class="btn-primary" type="submit">Register</button>
    </form>
    <p>Already have an account?</p>
    <a href="/login">Sign in</a>
</body>
</html>