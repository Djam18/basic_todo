<!DOCTYPE html>
<html>
<head>
    <title>Formulaire CSRF</title>
</head>
<body>
    <h1>Formulaire protégé par CSRF</h1>
    <form action="/form" method="POST">
        {{ csrf_field() }}
        <label>Nom :</label>
        <input type="text" name="name" required>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
