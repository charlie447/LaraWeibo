<div class="list-group-item">
  <img class="mr-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width=32>
  <a href="{{ route('users.show', $user) }}">
    {{ $user->name }}
  </a>
  @can('destroy', $user)
    <form class="float-right" action="{{ route('users.destroy', $user->id)}}" method="post">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button type="submit" name="button" class="btn btn-sm btn-danger delete-btn">删除</button>
    </form>
  @endcan
</div>
