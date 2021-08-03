<?php include_once APPROOT . '../views/inc/header-dash.php'; ?>

<main class="row m-0">
  <?php var_dump($data ) ?>
    <div class="container col-10">
        <h1 class="mt-5">Dashboard clients</h1>
        <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Email</th>
                <th scope="col">Télephone</th>
                <th scope="col">Genre</th>
                <th scope="col">Occasion</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($data as $keys) : ?>
              <tr>
                <th scope="row"><?php echo $keys->id ?></th>
                <td><?php echo $keys->email ?></td>
                <td><?php echo $keys->phone ?></td>
                <td>
                  <?php foreach($keys as $key) : ?>
                  <?php echo $key->gender['0'] ?>
                  <?php endforeach; ?>
                </td>
                <!-- <td>
                  <?php foreach($keys as $key -> $value) : ?>
                  <?php echo $key['occasion'] ?>
                  <?php endforeach; ?>
                </td> -->
              </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<!-- MAIN -->
<!-- SECTION FOOTER -->
<?php include_once APPROOT . '../views/inc/footer.php'; ?>
<!-- SECTION FOOTER -->