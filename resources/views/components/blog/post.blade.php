<div class="col-lg-4 col-md-4 col-sm-6 post mb-2">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">{{ $post['title'] }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ $post['created_at'] }}</h6>
      <p class="card-text">{{ $post['content'] }}</p>


    </div>
    <div class="card-footer text-muted">
      <div class="btn-group" role="group">
        <button type="button" data-bs-toggle="modal" data-bs-target="#post_{{ $post['id'] }}"
          class="btn btn-primary btn-sm text-white">Read More<span
            class="badge badge-light">{{ $post['views'] }}</span></button>
        {{-- href="{{ route('post', $post['id']) }}" --}}
        <a href="{{ route('delete', $post['id']) }}" class="btn btn-danger btn-sm text-white">Delete</a>
        <a href="{{ route('admin/edit', $post['id']) }}" class="btn btn-secondary btn-sm">Edit</a>
        <a href="{{ route('like', $post['id']) }}" class="btn btn-success btn-sm">Like<span
            class="badge badge-light">{{ $post['likes'] }}</span></a>
      </div>
    </div>
  </div>
  <div class="modal fade" id="post_{{ $post['id'] }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $post['title'] }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{ $post['content'] }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
