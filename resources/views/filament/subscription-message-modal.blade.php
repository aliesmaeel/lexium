<div class="space-y-3">
    <p><strong>Email:</strong> {{ $record->email }}</p>
    <hr>
    <div class="prose max-w-none">
        {!! nl2br(e($record->message)) !!}
    </div>
</div>
