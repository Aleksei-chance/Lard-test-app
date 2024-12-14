<style>
    .comment {
        position: relative;
    }

    .comment::before {
        content: '';
        position: absolute;
        left: -20px;
        top: 15px;
        bottom: 15px;
        width: 1px;
        background-color: #ddd;
    }

    .comment .card {
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .comment .btn-link {
        font-size: 0.875rem;
    }

    .comment .ms-4 {
        margin-left: 30px !important;
    }

    .comments .card-body {
        padding: 15px;
    }
</style>

<main class="container my-5">

    <article class="mb-5">
        <h2 class="mb-3">Article Title</h2>
        <p class="lead">
            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultricies sapien eget tempor ultrices.
            Donec in imperdiet ligula. Nullam vestibulum facilisis risus dignissim porttitor. Proin fermentum consequat
            felis id sodales. Integer a metus eu metus rutrum malesuada id non tortor. Aenean ultricies hendrerit nulla eu
            aliquam. Curabitur lobortis tincidunt risus mattis venenatis. Sed vestibulum mauris at magna sollicitudin efficitur.
            Pellentesque auctor urna rutrum lectus molestie suscipit. Cras convallis a lacus a auctor. Nulla et lectus ut orci hendrerit
            lobortis. Aliquam at odio nibh. Quisque est elit, auctor et augue ultrices, rutrum interdum nisl.
            <br><br>
            Integer volutpat ac urna sed elementum. Aenean finibus nisi et leo volutpat, vitae convallis enim pulvinar.
            Donec pulvinar in metus in tempus. Praesent at tincidunt ex. Duis non arcu sed quam venenatis pretium. Vestibulum
            lacinia orci et tortor pulvinar, a consectetur augue volutpat. Curabitur enim nisl, lobortis nec tortor a, convallis
            dapibus enim. Morbi lobortis eget elit at posuere. Fusce rutrum metus nisi, quis imperdiet tellus laoreet vel.
            Suspendisse faucibus metus nec justo interdum blandit. Vestibulum a magna efficitur, eleifend nibh et, tincidunt ex.
            <br><br>
            Proin vulputate luctus leo, et posuere dolor lacinia vel. Nulla nisi erat, consequat in vulputate eu,
            lobortis eget magna. Maecenas condimentum rhoncus luctus. Morbi mattis nulla ut condimentum iaculis. Aliquam
            tempus hendrerit enim, a rhoncus magna scelerisque in. Ut luctus est nec dui porta, vitae scelerisque mauris sagittis.
            Nulla facilisi. Aliquam aliquam nulla sed sem sollicitudin consectetur. Duis in nisl nulla. Sed finibus varius fermentum.
            Quisque sodales dui sed pellentesque tincidunt. Quisque sit amet ex arcu.
            <br><br>
            Aenean vel nunc at augue varius venenatis. Pellentesque et dictum sapien. Sed sed mollis est. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Duis eu sapien nisi. Praesent vitae arcu quis mi interdum dictum. Proin rutrum ipsum neque,
            quis mattis quam pulvinar sed.
        </p>
    </article>

    <section>
        <div id="comments" class="container mb-4">
            <h3>Comments</h3>
            <div class="p-4 text-center border rounded comment-card">
                <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="mt-3 mb-0 text-muted">Loading...</p>
            </div>
        </div>
    </section>
</main>

<script>
    load_comments();
</script>


