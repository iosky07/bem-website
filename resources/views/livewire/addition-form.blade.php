<div id="form-create" class=" card p-4">
    <form wire:submit.prevent="{{ $action }}">

        <x-input type="text" title="Kepatuhan" model="addition.title"/>

        <x-input type="number" title="Poin Penambahan" model="addition.plus_point"/>

        <div class="form-group col-span-6 sm:col-span-5"></div>
        <button type="submit" id="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

<script>
    document.addEventListener('livewire:load', function () {
        window.livewire.on('redirect', () => {
            setTimeout(function () {
                window.location.href = "{{route('admin.addition.index')}}"; //will redirect to your blog page (an ex: blog.html)
            }, 2000); //will call the function after 2 secs.
        });
    });
</script>
