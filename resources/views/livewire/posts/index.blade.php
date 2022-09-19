<div>
    {{-- In work, do what you enjoy. --}}

    <div class="d-flex justify-content-between flex-wrap">
        
        @foreach ($posts as $post)
        <div id="post-box" class=" align-self-stretch m-1" style="width: 50%">
            <div>
                <h1 class="text-center uwu">Recent Post</h1>
                <div class="text-center">
                    <h4>{{ $post->title }}</h4>
                    <p id="timestamp">{{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div class="card-footer">
                {{-- <a href="{{ url('/posts/edit/' . $post->id) }}" ><i id="pen" class="fa-solid fa-user-pen"></i></a> --}}
                <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
        @endforeach
    </div>


    <style>
        #post-box{
            color: white;
        }

        .card-footer{
            background-color: #292929;
            color: white;
        }
        .uwu {
            background: #292929;
            color: #ffa31a;
        }
        a{
            color: #ffa31a;
            margin-right: 8px;
        }
        .text-center {

        }
    
    
    </style>
</div>


