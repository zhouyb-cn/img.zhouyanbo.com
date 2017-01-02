@extends('layouts.master') 

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">File Hash</div>
                	<div class="panel-body">

						<p>
						  Drag the file to the following area, in the bottom of the area will be displayed in a hash of the directory name stored
						</p>

						<form action="/file/upload.json" class="dropzone" id="hashFile">
							{{ csrf_field() }}
						</form>
						<br>
						<div class="row marketing">
						    <div class="col-lg-8">
						        <form class="form-horizontal" role="form">
						            <div class="form-group">
						                <label for="filename" class="col-sm-4 control-label">Filename</label>
						                <div class="col-sm-8">
						                    <input type="text" class="form-control" id="filename" placeholder="Filename" name="filename" disabled>
						                </div>
						            </div>
						            <div class="form-group">
						                <label for="level-1" class="col-sm-4 control-label">level-1</label>
						                <div class="col-sm-8">
						                    <input type="text" class="form-control" id="level-1" placeholder="First level dir name" name="level-1" disabled>
						                </div>
						            </div>
						            <div class="form-group">
						                <label for="level-2" class="col-sm-4 control-label">level-2</label>
						                <div class="col-sm-8">
						                    <input type="text" class="form-control" id="level-2" placeholder="Second level dir name" name="level-2" disabled>
						                </div>
						            </div>
						        </form>
						    </div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.dropzone.dz-clickable {
	    cursor: pointer;
	}
	.dropzone {
	    border: 2px dashed #0087F7;
	    border-radius: 5px;
	    background: white;
        min-height: 150px;
	    border: 2px solid rgba(0, 0, 0, 0.3);
	    background: white;
	    padding: 54px 54px;
	}
	.dropzone, .dropzone * {
	    box-sizing: border-box;
	}
</style>

<script type="text/javascript" src="/js/dropzone.min.js"></script>
<script type="text/javascript">
	Dropzone.options.hashFile = {
		maxFilesize: 2,
		acceptedFiles: '.jpg, .jpeg, .png, .bpm',
		dictDefaultMessage: 'Drop file here to click to upload</br>One at a time',
		maxFiles: '3',
		addRemoveLinks: 'dictRemoveFile',
		success: uploadSuccess,
	}
	function uploadSuccess(data, file) {
		$('#filename').val(file.fileName);
		$('#level-1').val(file.firstLevelDir);
		$('#level-2').val(file.secondLevelDir);
	}
</script>

@endsection
