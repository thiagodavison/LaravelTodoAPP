<li class="list-group-item" id="todo-list-{{$todoList->id}}">
    <h4 class="list-group-item-heading">{{$todoList->title}} <span class="badge">{{$todoList->tasks->count() >= 1 ? $todoList->tasks->count(). " Task(s)" : "0 Task" }}</span></h4>
    <p class="list-group-item-text">{!! $todoList->description !!}</p>
    <div class="buttons">
        <a href="{{route('todolists.show',$todoList->id)}}" data-action="{{route('todolists.tasks.store',$todoList->id)}}" class="btn btn-info show-task-modal btn-xs" data-title="{{$todoList->title}}" title="Managet Task"><i class="glyphicon glyphicon-ok"></i></a>
        <a href="{{route('todolists.edit',$todoList->id)}}" class="btn btn-default btn-xs show-todolist-modal edit" title = "Edit {{$todoList->title}}"><i class="glyphicon glyphicon-edit"></i></a>
        <a href="{{route('todolists.destroy',$todoList->id)}}" class="btn btn-danger btn-xs show-confirm-modal" data-title="{{$todoList->title}}"><i class="glyphicon glyphicon-remove"></i></a>
    </div>
</li>