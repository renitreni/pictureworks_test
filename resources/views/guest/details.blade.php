<x-layout.app>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-auto">
                    <div class="row shadow-sm">
                        <div class="col-md-12">
                            Name: {{ $user->name }}
                        </div>
                        <div class="col-md-12">
                            Comment: {{ $user->comment }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
