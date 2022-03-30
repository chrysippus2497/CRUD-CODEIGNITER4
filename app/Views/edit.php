<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - CodeIgniter 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <button class="btn btn-dark mt-2" onclick="history.back();">Back</button>
    <div class="card mt-4">
        <div class="card-body">
            <?= form_open('/updateBooks/'.$books['book_id'])?>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Book Title</label>
                <input type="text" class="form-control" name="title" value="<?= $books['book_title'];?>" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Book Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" ><?= $books['book_description'];?></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Book Author</label>
                <input type="text" class="form-control" name="author" value="<?= $books['book_author'];?>" id="exampleFormControlInput1" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Book Released</label>
                <input type="date" class="form-control" name="released" value="<?= $books['book_released'];?>" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Book Price</label>
                <input type="number" class="form-control" name="price" value="<?= $books['book_price'];?>" id="exampleFormControlInput1" >
            </div>
            <button type="submit" class="btn btn-success">Update Book</button>
            <?= form_close();?>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>
</html>