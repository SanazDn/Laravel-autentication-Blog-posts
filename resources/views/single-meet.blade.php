<x-layout>
    <div class="container py-md-5 container--narrow">
        <div class="d-flex justify-content-between">
            <h2>{{$meet->title}}</h2>
            <span class="pt-2">
                <a href="#" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                <form class="delete-post-form d-inline" action="#" method="POST">
                    <button class="delete-post-button text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button>
                </form>
            </span>
        </div>

        <p class="text-muted small mb-4">
            <a href="#"><img class="avatar-tiny" src="https://gravatar.com/avatar/f64fc44c03a8a7eb1d52502950879659?s=128" /></a>
            Posted by <a href="#">{{$meet->user->username}}</a> on {{$meet->created_at->format('n/j/Y')}}
        </p>

        @if ($meet->image)
            <div class="flex">
                <img src="{{ asset('storage/' . $meet->image) }}" alt="Meetup Image" style="width: 300px; height: 200px;">
            </div>
        @endif

        <div class="body-content">
            {{$meet->address}}
        </div>

        <div class="body-content">
            {!! $meet->body !!}
        </div>
    </div>
</x-layout>
