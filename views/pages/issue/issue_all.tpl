<?php $this->layout('layouts/default', ['title' => 'Issue Page']); ?>

<div>
  <legend>All!</legend>

  <p>
    This is content.
  </p>

</div>

<?php $this->push('scripts') ?>
<script>
  jQuery(document).ready(function ($) {
    console.log('document rendered.');
  });
</script>
<?php $this->end() ?>