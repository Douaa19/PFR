<?php include_once APPROOT . '../views/inc/header-photos-admin.php'; ?>



    <main>
        <div class="container">
        </div>


        <div class="table-photos">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Tags</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $row) :?>
              <tr>
            
                <th scope="row"><?php echo $row->id ?></th>
                <td><?php echo $row->title; ?></td>
                <td><img src="../public/uploads/<?php echo $row->image ?>" class="w-20"></td>
                <td><?php echo $row->description; ?></td>
                <td><?php echo $row->tag; ?></td>
                <td><a href="<?php URLROOT; ?>/PhotoController/edit?id=<?php echo $row->id; ?>" class="btn btn-info">Edit</a>
                <a href="<?php URLROOT; ?>/PhotoController/delete?id=<?php echo $row->id; ?>" class="btn btn-danger">Delete</a></td>
            
              </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        </div>




        <div class="photos">
            <a href=""><h1>photos</h1></a>
            <div class="galery">
                <div class="img">
                    <h3>Titre</h3>
                    <img src="./public/img/kenny-leys-j27SKDa-vBg-unsplash.jpg" alt="">
                </div>
                <div class="img">
                    <h3>Titre</h3>
                    <img src="./public/img/header-img.jpg" alt="">
                </div>
                <div class="img">
                    <h3>Titre</h3>
                    <img src="./public/img/alexander-andrews-VLGWE_SumrA-unsplash.jpg" alt="">
                </div>
                <div class="img">
                    <h3>Titre</h3>
                    <img src="./public/img/annie-spratt-ceMXSBfPoBs-unsplash.jpg" alt="">
                </div>
                <div class="img">
                    <h3>Titre</h3>
                    <img src="./public/img/claudio-schwarz-VPT1C8b_OE8-unsplash.jpg" alt="">
                </div>
                <div class="img">
                    <h3>Titre</h3>
                    <img src="./public/img/alexander-andrews-sNPfZxrBYdQ-unsplash.jpg" alt="">
                </div>
            </div>
        </div>
    </main>


    
</body>
</html>

<footer>
<?php include_once APPROOT . './views/inc/footer.php'; ?>
</footer>