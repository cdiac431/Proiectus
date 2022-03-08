<!DOCTYPE html>
<html>
<head>
  <title>Pujar arxius</title>
 
  <meta name="csrf-token" content="{{ csrf_token() }}">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
 
<div class="container mt-5">
 
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
 
 
      <h2 class="text-center">Penja aquí els arxius</h2>
 
 
    <div class="text-center">
 
        <form name="save-multiple-files" method="POST"  action="{{ url('save-multiple-files') }}" accept-charset="utf-8" enctype="multipart/form-data">
 
          @csrf
                   
            <div class="row">
 
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="file" name="files[]" placeholder="Selecciona els arxius" multiple >
                    </div>
                    @error('files')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                   
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit">Penja</button>
                </div>
            </div>     
        </form>
 
    </div>
 
 
</div>  
</body>
</html>