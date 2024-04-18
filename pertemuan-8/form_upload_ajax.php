<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Document</title>
    </head>
    <body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <br>
    <div id="status"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="upload.js"></script>
    </body>
</html> -->

<!-- Soal 3.2 -->
<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Unggah Gambar</title>
    </head>
    <body>
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" id="files" multiple="multiple" accept=".jpg, .jpeg, .png, .gif">
            <input type="submit" name="submit" value="Unggah">
        </form>
        <div id="status"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="upload1.js"></script>
    </body>
</html> -->

<!-- Praktikum 4 -->
<!DOCTYPE html>
<html>
    <head>
        <title>Unggah File Dokumen</title>
        <link rel="stylesheet" href="upload.css" type="text/css">
    </head>
    <body>
        <div class="upload-form-container">
            <h2>Unggah File Dokumen</h2>
            <form action="upload_ajax.php" id="upload-form" method="post" enctype="multipart/form-data">
                <div class="file-input-container">
                    <input type="file" name="file" id="file" class="file-input">
                    <label for="file" class="file-label">Pilih File</label>
                </div>
                <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
            </form>
            <div id="status" class="upload-status"></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script>
    </body>
</html>