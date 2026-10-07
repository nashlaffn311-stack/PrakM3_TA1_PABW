<div style="padding: 12px; border-radius: 5px; margin-bottom: 15px; background-color: {{ $type === 'error' ? '#f8d7da' : '#d4edda' }}; color: {{ $type === 'error' ? '#721c24' : '#155724' }}; border: 1px solid {{ $type === 'error' ? '#f5c6cb' : '#c3e6cb' }};">
    <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>