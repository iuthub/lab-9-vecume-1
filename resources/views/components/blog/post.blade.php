<div class="col-lg-3 col-md-4 col-sm-6 post mb-2">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">{{ $post['title'] }}</h5>
      <p class="card-text">{{ $post['content'] }}</p>
      <div class="btn-group" role="group">
        <button type="button" data-bs-toggle="modal" data-bs-target="#post_{{ $post['id'] }}"
          class="btn btn-outline-primary btn-sm">Read More</button>
        {{-- href="{{ route('post', $post['id']) }}" --}}
        <a href="{{ route('delete', $post['id']) }}" class="btn btn-outline-danger btn-sm">Delete</a>
        <a href="{{ route('admin/edit', $post['id']) }}" class="btn btn-outline-secondary btn-sm">Edit</a>
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
