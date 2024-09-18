<form action="{{ route('comics.destroy', $comic) }}" method="POST"
    onsubmit="return confirm('sicuro di voler eliminare')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
</form>