<x-layout>
    <div class="container py-md-5 container--narrow">
        <form action="/create-meet" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="post-title" class="text-muted mb-1"><small>Meetup Title</small></label>
                <input value="{{ old('title') }}" name="title" id="post-title"
                    class="form-control form-control-lg form-control-title" type="text" placeholder=""
                    autocomplete="off" />
                @error('title')
                    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Meetup Image</label>
                <input value="{{ old('image') }}" type="file" id="image" name="image" accept="image/*"
                    class="form-control-file" required>
                @error('image')
                    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="post-address" class="text-muted mb-1"><small>Address</small></label>
                <input value="{{ old('address') }}" name="address" id="post-address"
                    class="form-control form-control-lg form-control-title" type="text" placeholder=""
                    autocomplete="off" />
                @error('address')
                    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="post-body" class="text-muted mb-1"><small>Description</small></label>
                <textarea name="body" id="post-body" class="body-content tall-textarea form-control" type="text">{{ old('body') }}</textarea>
                @error('body')
                    <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
                @enderror
            </div>

            <button class="btn btn-primary">Add Meetup</button>
        </form>
    </div>
</x-layout>
