<!-- resources/views/users/create.blade.php -->
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label>Nom :</label>
    <input type="text" name="name">
    <label>Email :</label>
    <input type="email" name="email">
    <label>Mot de passe :</label>
    <input type="password" name="password">
    <button type="submit">Créer</button>
</form>
