<div class="modal fade" id="modal_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal_<?php echo $id; ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><?php echo $title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo $src; ?>">
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function () {
        $("#<?php echo $id; ?>").on('click',function () {
            $('#modal_<?php echo $id; ?>').modal('show');
        });
    });
</script>