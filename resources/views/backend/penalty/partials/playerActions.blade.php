<span class="modal-trigger btn btn-xs btn-primary " load="{{ route('admin.penalty.player.show', $id)}}"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="" data-original-title="Show"></i></span>
<a class="btn btn-xs btn-warning" href="{{ route('admin.penalty.player.edit', $id)}}"><i class="glyphicon glyphicon-edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i> </a>
<a class="btn btn-xs btn-danger"  href="{{ route('admin.penalty.player.delete', $id)}}" name="delete" deactivate><i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Διαγραφή"></i></a>