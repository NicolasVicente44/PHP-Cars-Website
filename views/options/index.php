<div class="container">
  <h1 class="text-center">My Options</h1>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center">
            <?php if (isset($options) && count($options) > 0): ?>
              <?php foreach ($options as $option): ?>
                <div class="col-md-4 mb-4">
                  <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <h5 class="card-title text-center h4 mb-3"><?= $option->option_name ?></h5>
                      <p class="card-text text-center h5 mb-3">$<?= $option->price ?></p>
                      <div class="d-flex justify-content-center">
                        <a href="<?= ROOT_PATH ?>/options/edit/<?= $option->id ?>" class="btn btn-primary me-2">
                          <i class="fa-solid fa-pen"></i> Edit
                        </a>
                        <a href="<?= ROOT_PATH ?>/options/delete/<?= $option->id ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this option?')">
                          <i class="fa-solid fa-trash"></i> Delete
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
