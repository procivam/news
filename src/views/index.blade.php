<ul>
    @forelse($news as $obj)
        <li>{{ $obj->name }}</li>
    @empty
        <li>Новости отсутствуют</li>
    @endforelse
</ul>