
@extends('layouts.app')


<section id="portfolio" class="bg-light-gray">
<div class="container">
     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Book issue requests</div>

                <div class="panel-body">
                    @include('layouts.alert')
                    <ol>
                    @foreach($issueRequests as $issueRequest)
                        <li>
                        
                            <a class="btn btn-xs btn-success" href="{{ route('putAdminIssueBook', $issueRequest->_id) }}">Approve</a>

                            <a class="btn btn-xs btn-danger" href="{{ route('putIgnore', $issueRequest->_id) }}">Deny</a>
                            <h5>BookName: {!! $issueRequest->bookname !!}</h5>
                            <h5>UserName: {!! $issueRequest->username !!}</h5>
                            <h5>Writer: {!! $issueRequest->writer !!}</h5>

                        </li>
                    @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
