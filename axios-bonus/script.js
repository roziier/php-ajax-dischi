var app = new Vue({
  el: "#app",
  data: {
    albums: [],
    buttons: [],
  },
  mounted: function () {
    this.update();
  },
  methods: {
    update() {
      axios.get("data.php").then((risposta) => {
        this.albums = risposta.data;
        this.buttons = risposta.data;
      });
    },
    selectedArt(artista) {
      console.log(artista);
      axios
        .get("data.php", {
          params: {
            autore: artista,
          },
        })
        .then((risposta) => {
          console.log(risposta.data);
          this.albums = risposta.data;
          console.log(this.albums);
        });
    },
  },
});
