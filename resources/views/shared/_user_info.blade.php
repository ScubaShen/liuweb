<a href="{{ route('users.show', $user->id) }}">
  <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar" style="max-width: 50px;border-radius: 50%;"/>
</a>
<h1 style="font-size: 1.4em;letter-spacing: -1px;margin-bottom: 3px;margin-top: 15px;">{{ $user->name }}</h1>