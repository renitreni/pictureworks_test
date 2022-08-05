<x-layout.app>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-auto mb-2">
                    <div class="list-group">
                        @foreach($list as $value)
                            <a href="{{ route('user.show', ['user' => $value->id]) }}" type="button"
                               class="list-group-item list-group-item-action">{{ $value->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-12">
                    {{ $list->links() }}
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
