<template>
    <div>
        <!-- <div ref="dropzone" class="p-5 bg-dark text-center text-light">
            Перетяните изображения на это поле
        </div> -->
        <div ref="dropzone" class="p-5 bg-dark text-center text-light">
            Перетяните изображения на это поле
        </div>

        <div class="form-group">
            <!-- по клику запускает медод с именем store -->
            <input @click.prevent="store" type="submit" class="btn btn-primary" value="Добавить">
        </div>
    </div>
</template>

<script>
import Dropzone from 'dropzone'

export default {
    name: "DropzoneComponent",

    data() {
        return {
            dropzone: null
        }
    },

    mounted() {
        // this.dropzone = new Dropzone("div#myId", { url: "/file/post"});
        this.dropzone = new Dropzone(this.$refs.dropzone, {
            //объект аргументов (см док dropzone -> configuration options)

            //адрес, на который скрипт пытается отправить изображения
            url: "/file/post",

            //автозагрузка изображений
            autoProcessQueue: false
        });
    },

    methods: {
        store() {
            //посмотреть в консоли захваченные дропбоксом файлы
            // console.log(this.dropzone.getAcceptedFiles());

            //аксиос запрос, аргументы: url, data
            // axios.post('/femimprover/public/admin/posts/store', { images: this.dropzone.getAcceptedFiles() })
            axios.post('/femimprover/public/api/user?api_token=1111', { images: this.dropzone.getAcceptedFiles() })

        }
    }
}
</script>