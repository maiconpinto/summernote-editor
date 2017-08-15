<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $this->fetch('title'); ?></title>
  <?php echo $this->fetch('css'); ?>
</head>
<body>
  <?php echo $this->fetch('content'); ?>
  <div id="summernote"><p>Hello Summernote</p></div>
  <?php echo $this->fetch('script'); ?>
</body>
</html>
