var app = new Vue({
    el: '#app',
    data: {
      albumList: [],
      endpoint: 'http://localhost/php-ajax-dischi/versione-2/api/api.php'
    },
    methods: {

    },
    created() {
        let that = this;

        axios.get(this.endpoint)
        .then((response) => {
            that.albumList = response.data;
            console.log('response.data: ', response);
            ;
        })
        .catch((error) =>
            console.log(error)
        )
    }
  })
