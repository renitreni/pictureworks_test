<x-layout.app>
    <x-slot name="title">
        User Card - {{ $user->name }}
    </x-slot>
    <div class="row">
        <div class="col-md-auto">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-auto">
                            <div class="row">
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
        </div>

        <div class="col-md-auto">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('user.update', ['user' => $user->id]) }}">
                        @method('PATCH')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                            @error('password')<small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Comment</label>
                            <textarea class="form-control" name="comment"></textarea>
                            <div class="form-text">Your input comment will be append to the current comment.</div>
                            @error('comment')<small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
