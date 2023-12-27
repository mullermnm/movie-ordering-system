<section class="s-extra">
    <form method="POST" action="{{ route('store_movie') }}" enctype="multipart/form-data" class="dropzone" id="my-dropzone">
        @csrf
        <select name="catagories" id="catagories" multiple>
            <option value="series">Series</option>
            <option value="romantic">Romantic</option>
            <option value="adventure">Adventure</option>
            <option value="animation">Animation</option>
            <option value="comedy">Comedy</option>
            <option value="action">Action</option>
            <option value="horror">Horror</option>
            <option value="eritrean">Eritrean</option>
            <option value="amharic">Amharic</option>
            <option value="india">India</option>
            <option value="korean">Korean</option>
        </select>
    </form>
</section> <!-- end s-extra -->
<script>
    new MultiSelectTag('catagories')

    Dropzone.options.myDropzone = {
        maxFileSize: 5000,
        maxFiles: 50,
        acceptedFiles: ['jpg', 'png', 'jpeg', 'gif'],
    }


</script>
