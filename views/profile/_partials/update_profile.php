<button class="btn-primary show-update">Update profile</button>

<form class="update-form" method="POST">
        <div class="form__item">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="username">
        </div>

        <div class="form__item">
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="*******">
        </div>
        
        <div class="form__item">
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="email">
        </div>

        <div class="form__item">
            <label for="number">Phone number:</label>
            <input type="number" name="number" placeholder="number">
        </div>

        <div class="form__item">
            <label for="location">Location:</label>
            <input type="text" name="location" placeholder="location">
        </div>

        <button class="btn-primary" type="submit">Update</button>
    </form>