<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/1.0.7/css/responsive.bootstrap.min.css">
@if($editor_enabled)
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.3/summernote.css" rel="stylesheet">
	@if($include_font_awesome)
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	@endif
	@if($codemirror_enabled)
		<link href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.10.0/codemirror.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.10.0/theme/{{$codemirror_theme}}.min.css" rel="stylesheet">
	@endif
@endif
@include('ticketit::shared.nav')
@include('ticketit::shared.errors')