<p>Bonjour Cher administrateur, un nouveau message a été laissé sur votre site.</p>
<p>
    Nom: {{$contact->name}}
</p>
<p>
    Email: {{$contact->email}}
</p>
<p>
    Sujet: {{$contact->subject}}
</p>
<div>
    Message:<br/>
    <p>{{$contact->message}}</p>
</div>

Cordialement,
{{ config('app.name') }}

