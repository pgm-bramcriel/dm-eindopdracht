<body>
    <h1>Register</h1>

    <form method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="username" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="*******" required>
        </div>

        <div>
            <label for="confirmpassword">Confirm password:</label>
            <input type="password" name="confirmpassword" placeholder="*******" required>
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="email" required>
        </div>

        <div>
            <label for="number">Phone number:</label>
            <input type="number" name="number" placeholder="number" required>
        </div>

        <div>
            <label for="location">Location:</label>
            <input type="text" name="location" placeholder="location" required>
        </div>

        <button class="btn-primary" type="submit">Register</button>
    </form>
    <p>Already have an account?</p>
    <a href="/login">Sign in</a>
</body>
</html>