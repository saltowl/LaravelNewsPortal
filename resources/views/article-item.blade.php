@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <!-- Article Header -->
            <div class="panel-heading">
                {{ $article->header }}
            </div>

            <div class="panel-body">
                <form class="form-horizontal">
                    <!-- Article Body -->
                    <div class="col-sm-12" style="word-wrap: break-word; white-space: pre-line">
                        {{ $article->text }}
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</div>
@endsection
