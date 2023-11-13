import { toast } from "vue3-toastify";
import 'vue3-toastify/dist/index.css';

export default class UtilityService {
    constructor() {}

    showLoader() {
        console.log("show was clicked, click to hide");
        // do AJAX here
        // Vue.$loading.show();
        // setTimeout(() => loader.hide(), 3 * 1000)
    }

    hideLoader() {
        // Vue.$loading.hide();
    }

    presentSuccessToast(msg) {
        // Vue.$toast.success(msg,options)
        toast(msg, {
            autoClose: 1000,
        });

    }

    presentFailureToast(msg) {
        console.log(msg);
        toast(msg, {
            autoClose: 1000,
        });
        // Vue.$toast.error(msg,options);
    }

    //
    // hideLoader() {
    //     let loader = Vue.$loading.hide();
    // }
}
