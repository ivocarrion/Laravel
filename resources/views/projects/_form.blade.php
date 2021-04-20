        @csrf
        <div class="form-group">
            <label>Titulo del proyecto </label>
                <input  class="form-control bg-light shadow-sm  border-0"
                type="text" name="title" value="{{ old('title', $project->title) }}">
           
        </div>
        <div class="form-group">
            <label>Url del proyecto</label>
                <input  class="form-control bg-light shadow-sm  border-0" type="text" name="url" value="{{  old('url', $project->url) }}">
            
       </div>
         <div class="form-group">
        <label>Descripción del proyecto</label>
            <textarea   class="form-control bg-light shadow-sm  border-0"name="description">{{  old('description', $project->description) }}</textarea>
        </div>
        <button class="btn btn-primary btn-lg">{{ $btnText }}</button>