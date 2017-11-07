<form method="POST" enctype="multipart/form-data" action="{{ route('add.resume') }}">
    @csrf
    <input type="file" name="cv">
    <button type="submit">Envoyer</button>
</form>
