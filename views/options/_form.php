<?php
    $form_fields = $form_fields ?? [];
    if (count($form_fields) === 0 && isset($option)) $form_fields = (array) $option;
?>

<?php if($carts && count($carts) > 0): ?>
<div class="d-flex justify-content-center">
    <form action="<?= ROOT_PATH ?>/options/<?= $action ?>" method="post" class="my-3 col-md-6">
        <?php if ($action === "update"): ?>
            <input type="hidden" name="id" value="<?= $form_fields["id"] ?>">
        <?php endif ?>

        <div class="mb-3">
            <label for="option_name" class="form-label">Option Name</label>
            <input class="form-control" type="text" name="option_name" value="<?= $form_fields["option_name"] ?? "" ?>">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input class="form-control" type="text" name="price" value="<?= $form_fields["price"] ?? "" ?>">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input class="form-control" type="text" name="description" value="<?= $form_fields["description"] ?? "" ?>">
        </div>

        <div class="mb-3">
            <label for="cart_id" class="form-label">Cart</label>
            <select name="cart_id" class="form-select">
                <option value="" selected>Choose a cart...</option>
                <?php foreach($carts as $cart): ?>
                    <?php
                        $selected = (isset($form_fields["cart_id"]) && $form_fields["cart_id"] == $cart->cart_id) ? "selected" : "";    
                    ?>
                    <option value="<?= $cart->id ?>" <?= $selected ?>>
                        <?= $cart->cart_name ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>

        <div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<?php else: ?>
    <p class="alert alert-warning">
        You need to add a cart first. <br>
        <a href="<?= ROOT_PATH ?>/carts/new">New Cart</a>
    </p>
<?php endif ?>
