<div>
    {{-- The whole world belongs to you. --}}
    <div id="create-post-box" class="mt-4">
        <div class="card-header">
            <h3 class="text-center">Create Post</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="title">
                <label for="title">Title</label>
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="content">
                <label for="content">Content</label>
                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn" type="submit" wire:click="createPost()"><span>Post</span></button>
            </div>
        </div>
    </div>
    <style scoped>
        #create-post-box{
            background-color:  	#1b1b1b;
            color: #1A1B41;
        }

        .card-header{
            background-color:  	#292929;
            color: #ffa31a;
        }
        a{
            color: #BAFF29;
            margin-right: 8px;
        }

        .btn{
            background-color: #292929;
            color: #ffa31a;
        }
       
        .btn:hover {
            background-color: blue;
        }

        .card{
            width: 500px;
        }
    
    </style>
</div>
