var app = new Vue({
  el: "#app",
  data: {
    albums: [],
  },
  mounted: function () {
    axios.get("data.php").then((risposta) => {
      console.log(risposta.data);
      this.albums = risposta.data;
      console.log(this.albums);
    });
  },
});
