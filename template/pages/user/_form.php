<form action="" method="POST">
  <div class="form-item">
    <label for="email">Email</label>
    <input
      type="email" name="email" id="email" required
      <?php if ($data['type'] == 'edit') { echo 'value="' . $data['user']->getEmail() .'"'; } ?>
    >
  </div>

  <div class="form-item">
    <label for="password">Password</label>
      <input type="password" name="password" id="password" required
          <?php if ($data['type'] == 'edit') { echo 'value="' . $data['user']->getPassword() .'"'; } ?>
      >
  </div>

  <div class="form-item">
    <input
      type="submit"
      <?php
        if ($data['type'] == 'add') {
          echo 'value="Ajouter"';
        } else {
          echo 'value="Editer"';
        }
      ?>
    >
  </div>
</form>