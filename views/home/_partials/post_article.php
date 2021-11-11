<h2 id="post" class="post--title">Post an item!</h2>

<form method="POST">
    <div class="form__item">
        <label for="name">Title:</label>
        <input type="text" name="name" placeholder="Yamaha B12" required>
    </div>

    <div class="form__item">
        <label for="description">Description:</label>
        <textarea name="description" placeholder="Amazing description!"></textarea>
    </div>

    <div class="form__item">
        <label for="price">Price:</label>
        <input type="text" name="price" placeholder="€99" required>
    </div>

    <div class="form__item">
        <label for="image">Image:</label>
        <input type="file" name="image" placeholder="Drop image(s) here..." required>
    </div>

    <button class="btn-primary" type="submit">Post!</button>
</form>