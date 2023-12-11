<script>
import NetworkService from "../services/network.service";
const networkService = new NetworkService();
import { Publisher, Subscriber } from './../services/events/publishers.js'

import { toast } from "vue3-toastify";
import 'vue3-toastify/dist/index.css';

export default {
  name: "base",
  methods: {
    route(path, query = {}) {
      return this.$router.push({ path: path, query: query });
    },
    network() {
      return networkService;
    },
    publish(event, data) {
      const pub = new Publisher(event);
      pub.publish(data);
    },
    subscribe(event, callback) {
        const sub = new  Subscriber(event, callback);
        sub.subscribe();
        return sub;
    },
    message(msg, type){

        toast(msg, {
            autoClose: 1000,
        });
    }
  },
};
</script>
