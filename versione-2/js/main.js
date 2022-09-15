var app = new Vue({
    el: "#app",
    data: {
        albumList: [],
        genres: [],
        selectedGenre:'',
        endpoint: "http://localhost/php-ajax-dischi/versione-2/api/api.php?genre=",
    },
    methods: {
        getAlbums() {
            axios
                .get(this.endpoint + this.selectedGenre)
                .then((response) => {
                    this.albumList = response.data;
                    console.log("response.data: ", response);
                    if (this.genres.length == 0) {
                        this.albumList.forEach((album) => {
                            if (!this.genres.includes(album.genre)) {
                                this.genres.push(album.genre);
                            }
                        });
                    }
                })
                .catch((error) => console.log(error));
        },
    },
    created() {
        this.getAlbums();
    },
});
