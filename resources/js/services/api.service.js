
var json = {};

export default class ApiService {

    constructor() {
        json['base_url'] = import.meta.env.VITE_API_URL
    }

    get(api, config = {}) {
        // console.log({api})
        return new Promise( (resolve, reject) => {
            window.axios.get(json.base_url+api, config).then( res => {
                resolve(res.data);
            }, (err) => {
                console.log(err, "API GET ERROR");
                reject(err.response.data);
            });
        })

    }

    post(api, data, config = {}) {
        return new Promise( (resolve, reject) => {

            console.log(json.base_url+api)
            window.axios.post(json.base_url+api, data, config).then(res => {
                resolve(res.data);
            }, (err) => {
                console.log(err, "API GET ERROR");
                reject(err.response.data);
            })
        })
    }

    // postLogin(api, data, config = {}) {
    //     return new Promise( resolve => {
    //         window.axios.post(json.base_url+api, data, config).then(res => {
    //             resolve(res.data);
    //         });
    //     })
    // }

    patch(api, data, config = {}) {
        return new Promise( (resolve, reject) => {
        console.log({config})
            return window.axios.patch(json.base_url+api, data, config).then(res => {
                resolve(res.data);
            }, (err) => {
                console.log(err.response.data, "API POST ERROR");
                reject(err.response.data);
            });
        });
    }
    delete(api, config = {}) {

        return new Promise( (resolve, reject) => {
            window.axios.delete(json.base_url + api, config).then(res => {
                resolve(res.data);
            }, (err) => {
                console.log(err.response.data, "API POST ERROR");
                reject(err.response.data);
            });;
        })


    }




}
