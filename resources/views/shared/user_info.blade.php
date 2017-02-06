
<a href="{{ route('users.show', $user->id) }}">
    <img class="gravatar" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" />
</a>
<h1>{{ $user->name }}</h1>