<div class="space-y-3">
    <p><strong>Name:</strong> {{ $record->name }}</p>
    <p><strong>Email:</strong> {{ $record->email }}</p>
    @if ($record->phone)
        <p><strong>Phone:</strong> {{ $record->phone }}</p>
    @endif
    <hr>
    <div class="prose max-w-none">
        {!! nl2br(e($record->message)) !!}
    </div>
</div>
