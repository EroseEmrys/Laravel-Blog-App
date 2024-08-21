@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form>
                        <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Post Title">
                        </div>
                        <div class="form-group">
                            <label>Post</label>
                            <textarea name="description" class="form-control" placeholder="Enter Post Description" rows="15"> </textarea>
                        </div>
                        </br>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection