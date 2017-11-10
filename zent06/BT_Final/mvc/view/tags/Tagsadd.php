
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
   <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script>
        .form-control{
            width: 500px !important;
        };
        .form-group{
            width:500px;
        }
    </script>
</head>
<body>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <hr>
        <form action="index.php?mod=tag&act=store" method="POST" role="form" class="table">
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name">
            </div>
            <div class="form-group">
                <label for="">Post_ID</label><br>
                <select name="post_id">

        
                <?php 
                    foreach ($data1 as $key => $value) { 
                 ?>                 
                    <option><?php echo $value['id']; ?></option>                
                <?php } ?>
                </select>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>