<div>
   Show Tweets
   <p>{{ $content }}</p>
   <form  method="post" wire:submit.prevent='create'>
       <input type="text" name="content" id="content" wire:model='content'>
       <button type="submit">Criar Tweet</button>
       @error('content') <br>{{ $message }}       @enderror

   </form>
<br>
   <tr>
    @foreach ($tweets as $tweet)
    {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach
    </tr>
    <div>
        {{ $tweets->links() }}
    </div>
</div>
