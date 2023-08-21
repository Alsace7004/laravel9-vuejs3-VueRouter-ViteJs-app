<template>      
        <div class="roles">
            <h3>Roles</h3>
           <div id="print-me">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>Age</th>
                        <th>sexe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                </tbody>
                </table>
            </div>

            <button class="print-button" @click="print">
                Print
            </button>
        </div>
</template>

<script setup>
    import {ref,reactive} from "vue";
    import vTable from "../components/vTable/vTable.vue"
    /*************************************************************/
    import { usePaperizer } from 'paperizer'
        const { paperize } = usePaperizer('print-me',{
            styles: [
                'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
                "resources/app.css"
            ]
        })
        const print = () => {
            paperize()
        }
    /*************************************************************/
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