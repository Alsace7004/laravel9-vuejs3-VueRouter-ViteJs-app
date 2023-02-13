<template>      
        <div class="roles">
            <h3>Roles</h3>
            <div class="data_box">
                <!-- data box header -->
                <div class="data_box_header">
                    <div class="option_btns">
                        <select name="" class="sort_per_page" id="" v-model="tData.length" @change="getPerPage">
                            <option v-for="(pp,key) in perPage" :key="key" :value="pp">{{pp}}</option>
                        </select>
                        <button class="excel_export_btn" @click="export_to_excel">Excel</button>
                    </div>
                    <div class="search_btn">
                        <input type="text" class="input_control" v-model="tData.search" @input="getSearch" placeholder="Rechercher nom,prenom...">
                    </div>
                </div>
                <!-- Table Content Begin -->
                <div class="data_box_content">
                    <!-- The data box content -->
                    <v-table :columns="columns">
                        <tbody>
                            <tr v-if="!roles.length">Pas de roles disponible pour le moment</tr>
                            <tr v-for="(item,key) in roles" :key="key">
                                <td>{{key+=1}}</td>
                                <td>{{item.name}}</td>
                                <td>{{convert(item.created_at)}}</td>
                                <td>
                                    <a href="" @click.prevent="deleteUser(item.id)"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </v-table>
                </div>
                <!-- Table Content End -->
                <!-- data box footer -->
                <div class="data_box_footer">
                    <div class="show_entries">
                        ({{from}}-{{to}} sur {{total}})
                    </div>
                    <div class="pagination_btns">
                        <div class="prev_btn" v-if="prev_page_url" @click="goPrev(prev_page_url)">-</div>
                        <div class="next_btn" v-if="next_page_url" @click="goNext(next_page_url)">+</div>
                    </div>
                </div>
                <!-- data box footer -->
            </div>
        </div>
</template>

<script setup>
    import {ref,reactive} from "vue";
    import vTable from "../components/vTable/vTable.vue"
    /*********************************/
    let roles = ref([])
    /*********************************/
    let current_page    = ref('')
    let last_page       = ref('')
    let last_page_url   = ref('')
    let next_page_url   = ref('')
    let prev_page_url   = ref('')
    let from            = ref('')
    let to              = ref('')
    let total           = ref('')

    let perPage = ref(['5','10','20','30'])
    let columns =[
        {label:'~#',name:'id'},
        {label:'Nom',name:'nom'},
        {label:'Ajouté Le',name:'created_at'},
        {label:'Actions',name:'actions'},
    ]
    /*********************************/
    const tData = reactive({
        search :'',
        length :'5',
    })
    /*********************************/

</script>

<style scoped>
        .roles{
            /* background-color: #9c88ff;
            justify-content: center;
            align-items: center;
            height: 86.45vh; */
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 25px;
        }
</style>