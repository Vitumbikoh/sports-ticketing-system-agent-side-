<form action="your-route-here" method="POST">
    @csrf

    <div class="form-group">
        <label for="team_name">Select a Team:</label>
        <select name="team_name" id="team_name" class="form-control">
            @foreach($teamData as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
