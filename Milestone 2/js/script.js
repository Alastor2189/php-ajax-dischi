const app = new Vue({
    el: "#root",
    data: {
        coverCD: [],
    },
    created() {
        axios.get("./server.php").then((resp) => {
            this.coverCD = resp.data;
        });
    },
});