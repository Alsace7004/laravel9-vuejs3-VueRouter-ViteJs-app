

//import { useAuthStore } from "../store/index";
   

export default {  
    install: (app, options) => {    
          
        app.mixin({      
            data() {        
                return {     
  
                };      
            },
            methods:{
                //format date from mysql
                convert(jour){
                    let  date =  new Date(jour);
                    return  date.toLocaleDateString('en-GB') // "day-month-year"
                },
                // British English uses day-month-year order and 24-hour time without AM/PM
                // Expected output: "20/12/2012, 03:00:00"

                
            },   
            created() {     
                //   
            },    
            mounted(){
                //console.log("Printing from mounted in helper.js");  
            }
        });
    },
};
