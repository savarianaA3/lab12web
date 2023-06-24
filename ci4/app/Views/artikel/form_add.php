<?= $this->include('template/admin_header'); ?>
<div class="form">
    <h2><?= $title; ?></h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" placeholder="">
        <textarea name="isi" cols="50" rows="10"></textarea>
        <div class="form-data">
        <input type="file" name="gambar">
        </div>
        <input type="submit" value="Kirim" class="btn btn-large">
    </form>
</div>
<?= $this->include('template/admin_footer'); ?>