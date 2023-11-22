

var json = {};
export default class UserService {


    constructor() {
        json['base_url'] = import.meta.env.VITE_API_URL
    }

    isUserAuthenticated(){
        return new Promise( async resolve => {

            window.axios.get(json.base_url + '/users/profile', {}).then( res => {

                // console.log(res)
                const data = res.data;
                if(data.bool == true){

                    const temp = data.data;
                    if(temp[0]){
                        let user_id = temp[0].id;
                        let role_id = temp[0].role_id
                        localStorage.setItem("_user_id", user_id);
                        localStorage.setItem("_role_id", role_id);

                        console.log(user_id, role_id)
                    }


                }
                resolve(true)
            }, (err) => {
                console.log(err, "API GET ERROR");
                resolve(false)
            });



        });
    }

    setLogout(){
        localStorage.clear();
    }

}
