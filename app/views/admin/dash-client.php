<?php include_once APPROOT . '../views/inc/header-dash.php'; ?>

<main>
    <div class="container">
        <h1 class="mt-5">Dashboard clients</h1>
        <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th scope="col">Email</th>
                <th scope="col">Télephone</th>
                <th scope="col">Genre</th>
                <th scope="col">Type</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
        </table>
    </div>
</main>

</body>
</html>
<!-- SECTION FOOTER -->
<footer>
<?php include_once APPROOT . '../views/inc/footer.php'; ?>
</footer>
<!-- SECTION FOOTER -->