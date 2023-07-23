@foreach ($doctors as $doctor)
    <p>{{ $doctor->name }}</p>
@endforeach


{{ $doctors->links() }}
