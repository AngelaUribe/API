<div>
    @foreach ($users as $user)
        <div class="row align-items-center p-5">
            <div class="col text-center d-none d-sm-block">
                <img src="{{ $user->profile_picture }}" class="rounded-circle px-1 h-100" style="width: 200px"
                    alt="Album">
            </div>
            <div class="col-sm-6">
                <h2>{{ $user->name }}</h2>
                <h6 class="label">Bio</h6>
                <p class="content" >{{ $user->bio }}</p>
            </div>
            <div class="col">
                <h6 class="label">Phone</h6>
                <p class="contact">{{ $user->phone }}</p>
                <h6 class="label">Email</h6>
                <p class="contact">{{ $user->email }}</p>
            </div>
        </div>
    @endforeach
</div>
