<div class="row">
    <div class="col-8 offset-2">
        <div class="card card-body">
            <form action="" wire:submit.prevent="addComment">
                <div class="form-row">
                    <div class="form-group col-8">
                        <label for="">Comment</label>
                        {{--
                            wire.model = request on every change like key up
                            wire.model.lazy = default html behaviour -> send request when input out of focus
                            wire.model.defer = Does not send request until user does something -> like a click event
                            --}}
                        <input type="text" name="comment" value="{{ old("comment") }}" class="form-control" wire:model.defer="newComment">
                        @if($errors->has('comment'))
                          <div class="alert alert-danger">{{ $errors->first('comment') }}</div>
                        @endif
                    </div>

                    <div class="form-group col-4">
                        <label for="" style="visibility: hidden">lkjlkj</label><br>
                        <input type="submit" class="btn btn-primary" value="Add"
                        {{-- wire:click="addComment" --}}
                        >
                    </div>
                </div>
            </form>
        </div>

        <hr>
        @foreach($comments as $comment)
            <div class="card card-body">
                <p>{{ $comment['body'] }}</p>
            </div>
        @endforeach
    </div>
    {{-- The whole world belongs to you. --}}
</div>
