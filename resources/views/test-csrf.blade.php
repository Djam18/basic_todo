<form method="POST" action="/form-csrf">
    {{ csrf_field() }}
    <input type="text" name="donnee" placeholder="Entrez une donnée">
    <button type="submit">Envoyer</button>
</form>
