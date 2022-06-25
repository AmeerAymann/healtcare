<div class="modal fade" id="delete_post<?php echo e($notification->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('notifications.destroy', [$notification->notifiable_id])); ?>" method="POST">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <label> Are you sure about deleting?</label> <span
                        class="text-danger"><?php echo e($notification->data['title']); ?></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">delete </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH D:\laragon\www\xd\resources\views/dashboard/notifications/destroy.blade.php ENDPATH**/ ?>