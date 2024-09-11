@foreach($teamData as $data)
    <div class="team-data-item">
        <p>{{ $data->name }}</p>
        <!-- Add other fields as needed -->
    </div>
@endforeach
