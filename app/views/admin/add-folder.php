<?php include_once APPROOT . '../views/inc/header-dash-pvf.php'; ?>


<main>
    <div class="container">
        <h1 class="m-3">Ajouter dossier</h1>
        <div class="form">
            <form action="<?php echo URLROOT ?>/PostController/insertFolder" method="POST" class="form-group" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="formGroupExampleInput" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" name="title">
                </div>
                <div class="choix">
                    <div class="image">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">image</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple name="image">
                        </div>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Ajouter" name="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</main>
    
</body>
</html>