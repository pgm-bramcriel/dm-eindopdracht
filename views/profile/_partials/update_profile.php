<button class="btn-primary show-update">Update profile</button>

<form class="update-form" method="POST">
        <div class="form__item">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="username" required>
        </div>

        <div class="form__item">
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="*******" required>
        </div>
        
        <div class="form__item">
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="email" required>
        </div>

        <div class="form__item">
            <label for="number">Phone number:</label>
            <input type="number" name="number" placeholder="number" required>
        </div>

        <div class="form__item">
            <label for="location">Location:</label>
            <input type="text" name="location" placeholder="location" required>
        </div>

        <button class="btn-primary" type="submit">Update</button>
    </form>