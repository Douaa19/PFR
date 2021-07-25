<?php include_once APPROOT . '../views/inc/normal-header1.php'; ?>

<main>
    <div class="container">
        <h1 class="m-3">Ajouter photo</h1>
        <form action="<?php echo URLROOT ?>/PostController/addPhoto" method="POST" class="form-group" enctype="multipart/form-data">
            <div class="title">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="choix">
                <div class="image">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image">
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
            </div>
            <div class="tags">
                <label for="tag">Tags</label>
                <input type="text" name="tag" id="tag">
            </div>
            <div class="description">
                <label for="description">Description</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="button">
                <input type="submit" value="Ajouter" name="submit">
            </div>
        </form>
    </div>
</main>
    
</body>
</html>