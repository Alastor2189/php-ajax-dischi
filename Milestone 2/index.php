<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <title>Document</title>
</head>

<body>

    <div id="root">
        <header>

        </header>
        <main>
            <div class="container">

                <div class="cover-cd" v-for="album in coverCD ">
                    <img class="" :src="album.poster" :alt="album.name">
                    <div class="information">
                        <h3 class="">
                            {{ album.title }}
                        </h3>

                        <p> {{ album.author }}</p>
                        <small>
                            {{ album.year }}
                        </small>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/script.js"></script>
</body>

</html>