
<form action="/users/create?query=porrraa" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name='name' value="{{old('name')}}">
    <input type="text" name='codigo'>
    <br>

    <input type="file" name='photo'>
    <button>Salvar</button>
</form>