<h2>Utilisateurs Actifs</h2>
<ul>
@foreach($users as $user)
    <li>{{ $user->name }} - {{ $user->email }}</li>
@endforeach
</ul>
