<div class="card text-white bg-{{ $color }} mb-3" style="max-width: 18rem;">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6 text-white ">
                {{ $title }}
            </div>

            @if (Auth::user()->name == $createdBy)
            <div class="col-md-6 text-right">
                <form action="{{ route('post.destroy',$postId)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>

            </div>
            @endif

        </div>
    </div>
    <div class="card-body">
        <p class="card-text">
            {{ $body }}
        </p>
        <i><b>{{ $createdBy }}</b></i>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="fa fa-thumbs-up text-white"></a>
                0 Like
            </div>
            <div class="col-md-8">
                <span class="text-right">{{ $createdAt }}</span>
            </div>
        </div>
    </div>
</div>