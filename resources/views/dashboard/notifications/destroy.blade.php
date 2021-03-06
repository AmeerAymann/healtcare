<div class="modal fade" id="delete_post{{ $notification->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('notifications.destroy', [$notification->notifiable_id]) }}" method="POST">
                @method('DELETE')
                @csrf
                <div class="modal-body">
                    <label> Are you sure about deleting?</label> <span
                        class="text-danger">{{ $notification->data['title'] }}</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">delete </button>
                </div>
            </form>
        </div>
    </div>
</div>
