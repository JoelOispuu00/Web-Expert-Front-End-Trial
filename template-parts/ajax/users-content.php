<?php 
$json_data = file_get_contents('data/users.json');
$users = json_decode($json_data, true);
?>

<div class="users__header">
    <div>Name</div>
    <div>Username</div>
    <div>Email</div>
    <div>Actions</div>
</div>
<div class="users__body ajax-body">
    <?php foreach($users as $key => $user) : ?>
        <div class="users__item js-user-item" data-key="<?= $key; ?>">
            <div class="users__item-value"><?= $user['name']; ?></div>
            <div class="users__item-value" id="user-name"><?= $user['username']; ?></div>
            <div class="users__item-value"><?= $user['email']; ?></div>
            <div class="users__item-actions">
                <div class="users__item-action ajax-delete">Delete</div>
                <div class="users__item-action ajax-edit">Edit</div>
            </div>
            <div class="users__item-edit js-item-edit">
                <form class="users__item-edit-fields" method="POST" action="functions.php">
                    <div class="users__item-edit-field">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="<?= $user['name']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" value="<?= $user['username']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" value="<?= $user['email']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="street">Street:</label>
                        <input type="text" id="street" name="street" value="<?= $user['address']['street']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="suite">Suite:</label>
                        <input type="text" id="suite" name="suite" value="<?= $user['address']['suite']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" value="<?= $user['address']['city']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="zipcode">Zipcode:</label>
                        <input type="text" id="zipcode" name="zipcode" value="<?= $user['address']['zipcode']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="lat">Lat:</label>
                        <input type="text" id="lat" name="lat" value="<?= $user['address']['geo']['lat']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="lng">Lng:</label>
                        <input type="text" id="lng" name="lng" value="<?= $user['address']['geo']['lng']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="phone">Phone:</label>
                        <input type="text" id="phone" name="phone" value="<?= $user['phone']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="website">Website:</label>
                        <input type="text" id="website" name="website" value="<?= $user['website']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="company-name">Company name:</label>
                        <input type="text" id="company-name" name="company-name" value="<?= $user['company']['name']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="catch-phrase">Catch phrase:</label>
                        <input type="text" id="catch-phrase" name="catch-phrase" value="<?= $user['company']['catchPhrase']; ?>">
                    </div>
                    <div class="users__item-edit-field">
                        <label for="bs">bs:</label>
                        <input type="text" id="bs" name="bs" value="<?= $user['company']['bs']; ?>">
                    </div>
                    <input type="submit" value="Submit" class="users__item-save-edit js-save-edit" data-key="<?= $key; ?>">
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>
