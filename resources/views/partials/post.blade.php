 
         <div class="post-preview">
            <a href="/post/{{ $post->slug }}">
              <h2 class="post-title">
                {{ $post->title }}
              </h2>
              <h3 class="post-subtitle">
                {{$post->excerpt}}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">{{$post->author->name}}</a>
              {{Date('F, nS Y g:i A', strtotime($post->created_at))}}</p>
          </div>
