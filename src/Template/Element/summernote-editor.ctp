<?php
if (isset($layout) && $layout) {
    // for debug - minimum layout
    $this->layout = 'SummernoteEditor.summernote';
}

if (!isset($jquery) || $jquery) {
    $this->Html->script('http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js', ['block' => 'script']);
}
if (!isset($bootstrap) || $bootstrap) {
    $this->Html->css('http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css', ['block' => 'css']);
    $this->Html->script('http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js', ['block' => 'script']);
}
$this->Html->css('SummernoteEditor.summernote', ['block' => 'css']);

$this->Html->script('SummernoteEditor.summernote.min', ['block' => 'script']);

$this->append('script');
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.summernote').summernote();
    });
</script>
<?php $this->end(); ?>
