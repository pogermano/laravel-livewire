<div>
   Show Tweets
   <p>{{ $message }}</p>
   <input type="text" name="message" id="message" wire:model='message'>

   <tr>
    @foreach ($tweets as $tweet)
    {{ $tweet->user->name }} - {{ $tweet->content }}
    @endforeach
   </tr>
</div>
