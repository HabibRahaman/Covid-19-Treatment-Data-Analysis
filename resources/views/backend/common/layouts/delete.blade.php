		<form action="{{ route('admin.'.$url.'.destroy', [$row->id]) }}" method="post" style="display: inline-block;">
		    @csrf
		    @method('DELETE')
		    <button type="submit" class="waves-effect waves-light btn btn-small red"><i class="fas fa-trash-alt"></i></button>
		</form>