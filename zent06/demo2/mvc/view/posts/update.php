
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
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
        <form action="index.php?mod=posts&act=update" method="POST" role="form" class="table">
        	<input type="hidden" name = 'id' value='<?php echo $data['id']; ?>'>
            <div class="form-group">
                <label for="">user_id</label>
                <input type="text" class="form-control" id="" placeholder="user_id" name="user_id" value='<?php echo $data['user_id']; ?>'>
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="title" name="title" value='<?php echo $data['title']; ?>'>
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input type="text" class="form-control" id="" placeholder="description" name="description" value='<?php echo $data['description']; ?>'>
            </div>
            <div class="form-group">
                <label for="">content</label>
                <input type="text" class="form-control" id="" placeholder="content" name="content" value='<?php echo $data['content']; ?>'>
            </div> 
             <div class="form-group">
                <label for="">status</label>
                <input type="text" class="form-control" id="" placeholder="status" name="status" value='<?php echo $data['status']; ?>'>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>