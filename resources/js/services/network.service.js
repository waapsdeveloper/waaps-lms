import ApiService from "./api.service";
const apiService = new ApiService();
import UtilityService from "./utility.service";
const utilityService = new UtilityService();

export default class NetworkService {

    constructor() {}
    /////////////// Dashboard Api's///////////////


    // Auth Api's
    login(data) {
        return this.axiosPostResponse('/auth/login', data, null, false, true);
    }

    signup(data) {
        return this.axiosPostResponse('/auth/register', data, null, false, true);
    }

    axiosGetResponse(key, id = null, showLoader = false, showError = true, contentType = 'application/json') {
        return this.httpResponse('get', key, {}, id, showLoader, showError, contentType);
    }

    axiosPostResponse(key, data, id = null, showLoader = false, showError = true, contentType = 'application/json') {
        return this.httpResponse('post', key, data, id, showLoader, showError, contentType);
    }

    // axiosPostLoginResponse(key, data, id = null, showLoader = false, showError = true, contentType = 'application/json') {
    //     return this.httpResponse('post', key, data, id, showLoader, showError, contentType);
    // }

    axiosPatchResponse(key, data, id = null, showloader = false, showError = true, contenttype = 'application/json') {
        return this.httpResponse('patch', key, data, id, showloader, showError, contenttype);
    }

    axiosDeleteResponse(key, id = null, showloader = false, showError = true, contentType = 'application/json') {
        return this.httpResponse('delete', key, {}, id, showloader, showError, contentType);
    }

    // axiosPostResponse(api, data, config = {}) {
    //     return apiService.post(api, data, config);
    // }





    httpResponse(type = 'get', key, data, id = null, showLoader = false, showError = true, contentType = 'application/json') {

        return new Promise((resolve, reject) => {

            if (showLoader == true) {
                utilityService.showLoader();
            }

            const _id = (id) ? '/' + id : '';
            const url = key + _id;

            // let headers = {
            //     'Authorization': 'Bearer' + sqliteService.getToken()
            // }
            const seq = (type == 'get') ? apiService.get(url) : ((type == 'patch') ? apiService.patch(url, data) : ((type=='delete') ? apiService.delete(url) : apiService.post(url, data)));

            seq.then((res) => {
                console.log(res)
                if (res.status != 200) {

                    if (showError == true) {
                        utilityService.presentFailureToast(res['message']);
                    }

                    if(res.status == 401){
                        // redirect it to login page
                        this.$router.push({ path: 'login', query: {} });

                    }

                    reject(null);
                    return;
                }

                resolve(res.data);


                // this.utility.presentSuccessToast(res['message']);

            }, (err) => {
                console.log(err)
                let error = err;

                if (showLoader == true) {
                    utilityService.hideLoader();
                }

                if (showError == true) {
                    console.log(error['message'],'error');
                    utilityService.presentFailureToast(error['message']);
                }

                if(err.status == 401){
                    // redirect it to login page
                    sqlite.setLogout();
                    this.$router.push({ path: '/', query: {} });
                }

                reject(err);

            }).catch((err) => {
                console.log(err,"CATCH FROM NETWORK");
            })

        });

    }
}
