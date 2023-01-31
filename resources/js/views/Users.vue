<template>      
        <div class="users">
            <h3>Hello, Am The User View</h3>
            <h5>Je suis la vue: User</h5>

            <div class="data_box">
                <div class="data_box_header">
                    <div class="add_btn">The data box header</div>
                    <div class="search_btn">
                        <input type="text" class="input_control" v-model="tData.search" @input="getSearch" placeholder="Rechercher nom,prenom...">
                    </div>
                </div>
                <!-- Table Content Begin -->
                <div class="data_box_content">
                    <!-- The data box content -->
                    <table>
                        <thead>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Ajouté le</th>
                        </thead>
                        <tbody>
                            <tr v-if="!users.length">Pas d'utilisateur disponible pour le moment</tr>
                            <tr v-for="(user,key) in users" :key="key">
                                <td>{{key+=1}}</td>
                                <td>{{user.name}}</td>
                                <td>{{user.email}}</td>
                                <td>{{convert(user.created_at)}}</td>
                            </tr>
                            <!-- <tr>
                                <td>01</td>
                                <td>Kodjo</td>
                                <td>Mawugnon</td>
                                <td>Deuxieme</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Komlan</td>
                                <td>Mawuegnigan</td>
                                <td>Premier</td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>Kokou</td>
                                <td>Okeke</td>
                                <td>Deuxieme</td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>Yao</td>
                                <td>Mawulolo</td>
                                <td>Premier</td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td>Koffi</td>
                                <td>Selom</td>
                                <td>Deuxieme</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td>Komi</td>
                                <td>Esse</td>
                                <td>Premier</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td>Kossi</td>
                                <td>Alla</td>
                                <td>Deuxieme</td>
                            </tr> -->
                            <!-- Second waves -->
                            <!-- <tr>
                                <td>08</td>
                                <td>Kodjo</td>
                                <td>Mawugnon</td>
                                <td>Deuxieme</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td>Komlan</td>
                                <td>Mawuegnigan</td>
                                <td>Premier</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Kokou</td>
                                <td>Okeke</td>
                                <td>Deuxieme</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Yao</td>
                                <td>Mawulolo</td>
                                <td>Premier</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Koffi</td>
                                <td>Selom</td>
                                <td>Deuxieme</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Komi</td>
                                <td>Esse</td>
                                <td>Premier</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Kossi</td>
                                <td>Alla</td>
                                <td>Deuxieme</td>
                            </tr> -->
                            <!-- Third waves -->
                            <!-- Fourth waves -->
                        </tbody>
                    </table>
                </div>
                <!-- Table Content End -->
                <div class="data_box_footer">
                    <div class="show_entries">
                        ({{from}}-{{to}} sur {{total}})
                    </div>
                    <div class="pagination_btns">
                        <div class="prev_btn" v-if="prev_page_url" @click="goPrev(prev_page_url)">-</div>
                        <div class="next_btn" v-if="next_page_url" @click="goNext(next_page_url)">+</div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script setup>
import { onMounted, reactive } from "@vue/runtime-core"
import {ref} from "vue";

    let users = ref([])
    /*********************************/
    let current_page    = ref('')
    let last_page       = ref('')
    let last_page_url   = ref('')
    let next_page_url   = ref('')
    let prev_page_url   = ref('')
    let from            = ref('')
    let to              = ref('')
    let total           = ref('')
    /*********************************/
    const tData = reactive({
        search : ''
    })
    /*********************************/
    const goPrev = (ppu)=>{
        //alert("The NPU is:"+ppu)
        axios.get(ppu).then((res)=>{
            //console.log("Valeur de res dans goNext:",res)
            let content = res.data.users
            users.value = content.data
            configPagination(content)
        }).catch((err)=>{
            console.log("Valeur de err dans goNext:",err)
        })
    }
    const goNext = (npu)=>{
        //alert("The PPU is:"+npu)
        axios.get(npu).then((res)=>{
            //console.log("Valeur de res dans goNext:",res)
            let content = res.data.users
            users.value = content.data
            configPagination(content)
        }).catch((err)=>{
            console.log("Valeur de err dans goNext:",err)
        })
    }
    onMounted(()=>{
        getAllUsers()
    })
    const convert=(jour)=>{
            let  date =  new Date(jour);
            return  date.toLocaleDateString('en-GB') // "day-month-year"
    }
    const getAllUsers = ()=>{
        axios.get("api/users").then((res)=>{
            let content = res.data.users
            //console.log("Valeur de content:",content)
            //console.log("Valeur de res:",res.data.users)
            users.value = res.data.users.data
            configPagination(content)
        }).catch((err)=>{
            console.log("Valeur de err:",err)
        })
    }

    const configPagination=(data)=>{
        //console.log("Valeur de data dans configPagination:",data)
        current_page.value    = data.current_page
        last_page.value       = data.last_page
        last_page_url.value   = data.last_page_url
        next_page_url.value   = data.next_page_url
        prev_page_url.value   = data.prev_page_url
        from.value            = data.from
        to.value              = data.to
        total.value           = data.total
    }

    const getSearch = ()=>{
        axios.get("api/users",{params:tData}).then((res)=>{
            let content = res.data.users
            users.value = res.data.users.data
            configPagination(content)
        }).catch((err)=>{
            console.log("Valeur de err dans getSearch:",err)
        })
    }

    
</script>

<style scoped>
        .users{
            /* background-color: #273c75; */
            background-color: #eaeaea;
            color: #000;
            display: flex;
            flex-direction: column;
           /*  justify-content: center;
            align-items: center; */
            /* height: 86.45vh; */
            padding: 25px;
        }
        .data_box{
            border: 1px solid #000;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
        }
        .data_box_header{
            margin-bottom: 2px solid #fff;
            background-color: #fff;
            color: #000;
            padding: 8px 15px;
        }
        .data_box_content{
            background-color: rosybrown;
        }
        .data_box_footer{
            background-color: #fff;
            color: #000;
            border-top: 1px solid #000;
            padding: 8px 15px;
        }
        /*****************TABLE-DESIGN*****************/
        table{
            text-align: center;
            width: 100%;
            border-collapse: collapse;
            background-color: #fafafa;
            color: black;
        }
        table thead th{
            text-transform: uppercase;
            background-color: #2f3640;
            color:#fff;
        }
        table th,td{
            padding: 8px 15px;
        }

        /*************************BOX-DATA-FOOTER**************************/
        .data_box_footer{
            display: flex;
            justify-content: space-between;
        }
        /* .show_entries{
            border: 1px solid red;
        } */
        /* .pagination_btns{
            border: 1px solid dodgerblue; 
        } */
        .pagination_btns{
            width: 3.5rem;
            display: flex;
            justify-content: space-between;
        }
        .prev_btn{
            border: 2px solid red;
            height: 25px;
            width: 25px;
            border-radius: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .next_btn{
            border: 2px solid #000;
            height: 25px;
            width: 25px;
            border-radius: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        /****************DATA-BOX-HEADER****************/
        .data_box_header{
            display: flex;
            justify-content: space-between;
        }
        .search_btn{
            border: 1px solid #2f3640;
            border-radius: 5px;
            overflow: hidden;
        }
        .input_control{
            /* border: 1px dashed seagreen; */
            outline: none;
            padding: 5px 14px;
           
        }
</style>