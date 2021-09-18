    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/simplemde/simplemde.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var unusedLink = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      unusedLink.setAttribute('rel', '');
      unusedLink.setAttribute('disabled', true);
    </script>
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/simplemde/simplemde.min.js"></script>
    <script src="<?php echo base_url();?>assets/javascript/theme.min.js"></script>
       
    <textarea data-toggle="simplemde" data-spellchecker="false" data-autosave='{ "enabled": true, "unique_id": "SimpleMDEDemo" }'></textarea>
    