<!-- Modal Dialog -->
<div class="modal fade" id="userInfo" role="dialog" aria-labelledby="userInfoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">{{ trans('ticketit::lang.flash-x') }}</button>
        <h4 class="modal-title">{{ $ticket->user->name }}</h4>
      </div>
      <div class="modal-body">
        <p>{{ $ticket->user->email }}</p>
        
        <p><a href="{{ URL::route('userDetails', array('id'=>$ticket->user->id)) }}" target="_blank">Details</a>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
