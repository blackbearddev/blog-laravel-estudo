
<form action="users/create" method="POST">
    @csrf
    <input type="text" name='name'>
    <input type="text" name='codigo'>
    <br>
    <button>Salvar</button>
</form>