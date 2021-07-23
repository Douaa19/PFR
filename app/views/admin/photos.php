<?php include_once APPROOT . '../views/inc/header-photos-admin.php'; ?>



    <main>
        <div class="container">
            <h1 class="m-3">Add photo</h1>
            <form action="<?php echo URLROOT ?>/PostController/addPhoto" method="POST" class="form-group" enctype="multipart/form-data">
                <div class="title">
                    <label for="title">Titre</label>
                    <input type="text" name="title" id="title">
                </div>
                <div class="image">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="description">
                    <label for="description">Description</label>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="tags">
                    <label for="tag">Tags</label>
                    <input type="text" name="tag" id="tag">
                </div>
                <div class="folder">
                <label for="folder">Dossier</label>
                    <select name="folder" id="folder">
                        <option value="">Choisir un dossier</option>
                        <option value="marriage">marriage</option>
                        <option value="nature">nature</option>
                        <option value="sport">sport</option>
                        <option value="fête">fête</option>
                        <option value="autre">autre</option>
                    </select>
                </div>
                <div class="button">
                    <input type="submit" value="Ajouter" name="submit">
                </div>
            </form>
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
            
              <tr>
            <?php foreach ($data as $row) :?>
                <th scope="row"><?php echo $row->id ?></th>
                <td><?php echo $row->title; ?></td>
                <td><?php echo $row->image; ?></td>
                <td><?php echo $row->description; ?></td>
                <td><?php echo $row->tag; ?></td>
                <td><a href="<?php URLROOT; ?>/PostController/edit?id=<?php echo $row->id; ?>" class="btn btn-info">Edit</a>
                <a href="<?php URLROOT; ?>/PostController/delete?id=<?php echo $row->id; ?>" class="btn btn-danger">Delete</a></td>
            <?php endforeach ?>
              </tr>
            
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
<?php include_once APPROOT . './views/inc/footer-1.php'; ?>
</footer>