<form method="POST" action="/chirps">
    @csrf
    <div class="form-control w-full">
        <textarea name="message" placeholder="What's on your mind?" class="textarea textarea-bordered w-full
        rows="4" maxlength="255" required>
        </textarea>
    @error('message')
        <div class='label'>
            <span class="label-text-alt text-error">{{ $message }}</span>
        </div>
    @enderror
    </div>
    <div class="mt-4 flex items-center justify-end">
        <button type="submit" class="btn btn-primary btn-sm">
            Chirp
        </button>
    </div>
</form>