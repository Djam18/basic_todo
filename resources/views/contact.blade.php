@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form method="POST" action="/contact">
    {{ csrf_field() }}
    <div>
        <label>Nom:</label>
        <input type="text" name="nom">
        @if ($errors->has('nom')) <span>{{ $errors->first('nom') }}</span> @endif
    </div>

    <div>
        <label>Email:</label>
        <input type="email" name="email">
        @if ($errors->has('email')) <span>{{ $errors->first('email') }}</span> @endif
    </div>

    <div>
        <label>Message:</label>
        <textarea name="message"></textarea>
        @if ($errors->has('message')) <span>{{ $errors->first('message') }}</span> @endif
    </div>

    <button type="submit">Envoyer</button>
</form>
