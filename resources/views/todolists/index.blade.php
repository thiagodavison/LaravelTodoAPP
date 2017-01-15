@extends('layouts.main')

@section('content')
    <header id="particles-js">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><strong>In</strong>Work</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><strong>In</strong>Work</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> User <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Projects</h1>
                </div>
                <div class="col-md-4">
                    <a href="{{route('todolists.create')}}" class="btn btn-primary pull-right show-todolist-modal" title="Create new List">New Project</a>
                </div>
            </div>
        </div>

    </header>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php $count = $todoLists->count(); ?>
                <div class="alert alert-warning {{$count ? 'hidden' : ''}}" id="no-record-alert">
                    No records found.
                </div>

                <div class="alert alert-success" id="update-alert" style="display: none"></div>

                <div class="panel panel-default {{!$count ? 'hidden' : ''}}">
                    <ul class="list-group" id="todo-list">

                    </ul>
                    <ul class="list-group">
                        @foreach($todoLists as $todoList)
                        @include('todolists.item', compact('todoList'))
                        @endforeach
                    </ul>
                    <div class="panel-footer">
                        <small><span id="todo-list-counter">{{$count}}</span> <span>{{$count > 1 ? 'records' : 'record'}}</span> list items</small>
                    </div>
                </div>
            </div>

            @include('todolists.todolistsmodal')

            @include('todolists.taskmodal')

            @include('todolists.confirmmodal')

        </div>
    </div>

@endsection