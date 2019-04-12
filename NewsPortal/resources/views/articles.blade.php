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

                    <!-- Article Name -->
                    <div class="form-group">
                        <label for="article-name" class="col-sm-3 control-label">Article</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="article-name" class="form-control" value="{{ old('article') }}">
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

    </div>
</div>
@endsection