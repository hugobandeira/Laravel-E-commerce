


<form action="{{ route('produtos.destroy', ['id'=>$p->id]) }}" class="form" method="POST" style="display:inline-block">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="remove">
</form>