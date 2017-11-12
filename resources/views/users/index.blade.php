<h2>Liste paginée des utilisateurs</h2>

<ul>
@foreach ($users as $user)
    <li>{{ $user->name }} - {{ $user->email }}</li>
@endforeach
</ul>

<div>
    {{ $users->links() }}
</div>
