@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <form action="/demo-chat-app/send-message" method="POST" v-on:submit.prevent="onMessageSend">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="massage">Type what on your mind</label>
                <input type="text" name="massage" id="massage" v-model="massage" class="form-control">
            </div>
            <input type="submit" value="Send" name="submit-button" />
        </form>
    </div>
     <div class="row justify-content-center">
        <ul>
            <li v-for="x in massageLists">@{{x.message}} by @{{x.user_id}} at @{{x.created_at}}</li>
        </ul>
    </div>
</div>
@endsection
