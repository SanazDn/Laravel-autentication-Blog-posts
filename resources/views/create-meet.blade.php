<x-layout>
    <div class="container py-md-5 container--narrow">
        <form action="/create-meet" method="POST"  enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="post-title" class="text-muted mb-1"><small>Meetup Title</small></label>
            <input value="{{old('title')}}" name="title" id="post-title" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
            @error('title')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
          </div>

          {{-- <div class="form-group">
            <label for="post-image" class="text-muted mb-1"><small>Meetup Image</small></label>
            <input value="{{old('image')}}" name="image" id="post-image" class="form-control form-control-lg form-control-title" type="url" placeholder="" autocomplete="off" />
            @error('image')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
          </div> --}}

          <div class="form-group">
            <label for="image">Meetup Image</label>
            <input value="{{old('image')}}" type="file" id="image" name="image" accept="image/*" class="form-control-file" required>
            @error('image')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
        </div>

          <div class="form-group">
            <label for="post-address" class="text-muted mb-1"><small>Address</small></label>
            <input value="{{old('address')}}" name="address" id="post-address" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off" />
            @error('address')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
          </div>

          {{-- <div class="form-group">
            <label for="post-description" class="text-muted mb-1"><small>Description</small></label>
            <textarea value="{{old('description')}}" name="description" id="post-description" class="form-control form-control-lg form-control-title" type="text" placeholder="" autocomplete="off"></textarea>
            @error('description')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
          </div> --}}

          <div class="form-group">
            <label for="post-body" class="text-muted mb-1"><small>Description</small></label>
            <textarea name="body" id="post-body" class="body-content tall-textarea form-control" type="text">{{old('body')}}</textarea>
            @error('body')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
          </div>

          <button class="btn btn-primary">Add Meetup</button>
        </form>
      </div>


    {{-- <div class="mt-5 flex">
        <form method="post" action="{{ url('/api/meetups') }}" enctype="multipart/form-data" class="max-w-md bg-white p-6 mt-5 mx-auto rounded-md shadow-md">
            @csrf

            <!-- Meetup Title -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-semibold text-gray-600 mb-2">Meetup Title</label>
                <input type="text" id="title" name="title" class="w-full border rounded-md p-2" required>
            </div>

            <!-- Meetup Image -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-semibold text-gray-600 mb-2">Meetup Image</label>
                <input type="file" id="image" name="image" class="w-full border rounded-md p-2" accept="image/*" required>
            </div>

            <!-- Address -->
            <div class="mb-4">
                <label for="address" class="block text-sm font-semibold text-gray-600 mb-2">Address</label>
                <input type="text" id="address" name="address" class="w-full border rounded-md p-2" required>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold text-gray-600 mb-2">Description</label>
                <textarea id="description" name="description" class="w-full border rounded-md p-2" rows="4" required></textarea>
            </div>

            <!-- Add Meetup Button -->
            <div class="text-center">
                <button type="submit" class="bg-pink-500 text-white py-2 px-4 rounded-md hover:bg-pink-600">Add Meetup</button>
            </div>
        </form>
    </div> --}}
</x-layout>
