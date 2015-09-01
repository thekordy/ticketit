@extends($master)
@section('page', 'New Ticket Form')

@section('content')
            <div class="well bs-component">
                @include('Ticketit::shared.flash_error')
                {!! Form::open([
                                'route'=>config('ticketit.main_route').'.store',
                                'method' => 'POST',
                                'class' => 'form-horizontal'
                                ]) !!}
                    <legend>Create New Ticket</legend>
                    <div class="form-group">
                        {!! Form::label('subject', 'Subject:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('subject', null, ['class' => 'form-control']) !!}
                            <span class="help-block">A brief of your issue</span>
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('content', 'Description:', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '5']) !!}
                            <span class="help-block">Describe your issue here in details</span>
                        </div>
                    </div>
                    <div class="form-inline row">
                        <div class="form-group col-lg-4">
                            {!! Form::label('priority', 'Priority:', ['class' => 'col-lg-6 control-label']) !!}
                            <div class="col-lg-6">
                                {!! Form::select('priority_id', $priorities, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group col-lg-4">
                            {!! Form::label('category', 'Category:', ['class' => 'col-lg-6 control-label']) !!}
                            <div class="col-lg-6">
                                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {!! link_to_route(config('ticketit.main_route').'.index', 'Back', null, ['class' => 'btn btn-default']) !!}
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
@stop