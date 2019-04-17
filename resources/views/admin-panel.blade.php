@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                New Article
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Article Form -->
                <form action="{{ url('article')}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Article Header -->
                    <div class="form-group">
                        <label for="article-name" class="col-sm-3 control-label">Header</label>

                        <div class="col-sm-6">
                            <input type="text" name="header" id="article-header" class="form-control" value="{{ old('article') }}">
                        </div>
                    </div>

                    <!-- Article Body -->
                    <div class="form-group">
                        <label for="article-text" class="col-sm-3 control-label">Text</label>

                        <div class="col-sm-6">
                            <textarea name="text" id="article-text" class="form-control"></textarea>
                        </div>
                    </div>

                    <!-- Add Article Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Add Article
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Articles -->
        @if (count($articles) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Articles
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <td class="table-text">
                                <div>{{ $article->header }}</div>
                            </td>

                            <!-- Article Delete Button -->
                            <td>
                                <form action="{{ url('article/'.$article->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger" style="float: right;">
                                        <i class="fa fa-btn fa-trash"></i>Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
