@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">

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
                            <td>
                                <div class="col-sm-12 col-md-12 col-lg-12 navbar-brand">{{ $article->header }}</div>
                                <div class="col-sm-12 col-md-12 col-lg-12">{{ $article->text }}</div>

                            </td>

                            <!-- Article View Button -->
                            <td>
                                <form action="{{ url('article/'.$article->id) }}" method="GET">
                                    <button type="submit" class="btn btn-default" style="float: right;">
                                        <i class="fa fa-btn fa-expand"></i>View
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
