<form method="post" action="{{route('tasks.destroy', $task->id)}}">
    @csrf
    Ban co muon xoa {{$task->title}} khong?
    <button type="submit">CO</button>
</form>