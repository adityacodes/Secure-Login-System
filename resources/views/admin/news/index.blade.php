@extends('layouts.admin')

@section('title',' All News')

@section('content')


<div class="row">
        <div class="card">
                <div class="col-lg-12">
	                <div class="card" id="my-tab-content" class="tab-content">


				        <div class="header">
					        <h4 class="title">All News
					            <a href="{{ route('admin.news.create') }}" class="btn btn-success pull-right">
					            	<i class="glyphicon glyphicon-plus"></i> NEW NEWS
					            </a>
					            <div >
					            	<b>Total Notices:</b>
					            	<span class="badge label-success">{{$news->total()}}</span>
					            	<br/><br/>
			            				<b>URL:</b>
			            				<a target="_blank" href="{{ url('/news/') }}">{{ url('/news/') }}</a>
					            </div>
				            </h4>
				            <hr>
				        </div>
        
				        <div class="content" >
				        	<h5>
				        		<table class="table bootstrap-admin-table-with-actions">
					                    <thead>
					                        <tr>
					                            <th>#</th>
					                            <th>Title</th>
					                            <th>Notice</th>
					                            <th>Created At</th>
					                            <th>Updated At</th>
					                            <th>Actions</th>
					                        </tr>
					                    </thead>
				                    <tbody>
				                    	@foreach ($news as $notice)
					                        <tr>
					                            <td>{{ $notice->id }}</td>
					                            <td>{{ substr($notice->subject,0,20) }}</td>
					                            <td>{{ substr($notice->message,0,30) }}{{ strlen($notice->notice_message) > 10 ? "..." : ""}}</td>
					                            <td>{{ date('M j, Y H:i:s', strtotime($notice->created_at)) }}</td>
					                            <td>{{ date('M j, Y H:i:s', strtotime($notice->updated_at)) }}</td>
					                            <td class="actions">
					                                <a href="{{ route('admin.news.show', $notice->id)}}">
					                                    <button class="btn btn-md btn-primary">
					                                        <h6><i class="ti-eye" aria-hidden="true"></i>
					                                        View</h6>
					                                    </button>
					                                </a>
					                                <a href="{{ route('admin.news.edit', $notice->id) }}">
					                                    <button class="btn btn-md btn-warning">
					                                        <h6><i class="ti-pencil"></i>
					                                        Edit</h6>
					                                    </button>
					                                </a>
					                            </td>
					                        </tr>
					                    @endforeach
				                    </tbody>

				                </table>

				                <div class="text-center">
				                	{!! $news->render() !!}
				                </div>
				            </h5>
				        </div>
				    </div>
				</div>
    	</div>    

</div>
@endsection