
@extends('layouts.app')


<section id="portfolio" class="bg-light-gray">
<div class="container">
     
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Book Suggestions</div>

                <div class="panel-body">
                    @include('layouts.alert')
                    <ol>
                    @foreach($createRequests as $createRequest)
                        <li>
                        
                            <a class="btn btn-xs btn-success" href="{{route('putSuggestion', $createRequest->_id) }}">Add</a>

                            <a class="btn btn-xs btn-danger" href="{{route('putIgnore', $createRequest->_id) }}">Ignore</a>
                            <h5>Name: {!! $createRequest->bookname !!}</h5>
                            
                            @if(!empty($createRequest->writer))
                            <h5>Writer: {!! $createRequest->writer !!}</h5>
                            @endif
            
                        </li>
                    @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update requests</div>

                <div class="panel-body">
                    @include('layouts.alert')
                    <ol>
                    @foreach($updateRequests as $updateRequest)
                        <li>
                        
                            <a class="btn btn-xs btn-success" href="{{ route('putApprove', $updateRequest->_id) }}">Approve</a>

                            <a class="btn btn-xs btn-danger" href="{{ route('putIgnore', $updateRequest->_id) }}">Deny</a>
                            <h5>Name: {!! $updateRequest->bookname !!}</h5>
                            
                            @if(!empty($updateRequest->writer))
                            <h5>Writer: {!! $updateRequest->writer !!}</h5>
                            @endif
                        </li>
                    @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
